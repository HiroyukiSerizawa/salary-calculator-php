<?php

declare(strict_types=1);

namespace App\Services;

use const App\Config\EMPLOYMENT_RATE;
use const App\Config\CARE_INSURANCE_AGE;

final class SalaryCalculator
{
    public function __construct(
        private readonly InsuranceTableRepository $insuranceTableRepository,
        private readonly IncomeTaxCalculator $incomeTaxCalculator
    ) {
    }

    /**
     * @param array{
     *   salary:int,
     *   transportation:int,
     *   age:int,
     *   dependents:int,
     *   employment_insurance:bool,
     *   resident_tax:int
     * } $input
     * @return array<string, int>
     */
    public function calculate(array $input): array
    {
        $salary = $input['salary'];
        $transportation = $input['transportation'];
        $age = $input['age'];
        $dependents = $input['dependents'];
        $employmentInsuranceEnabled = $input['employment_insurance'];
        $residentTax = $input['resident_tax'];

        // 社会保険の等級判定は交通費込み
        $socialInsuranceTargetSalary = $salary + $transportation;
        $tableRow = $this->insuranceTableRepository->findBySalary($socialInsuranceTargetSalary);

        $standardMonthlyRemuneration = (int)$tableRow['standard_monthly_remuneration'];

        // 社会保険料の端数処理ルール：50銭以下切り捨て、50銭超切り上げ
        // ※ floor() ではなく このルールを適用する
        $healthInsurance = self::roundInsurance((float)$tableRow['health_insurance_half']);

        $careInsurance = $age >= CARE_INSURANCE_AGE
            ? self::roundInsurance((float)$tableRow['care_insurance_half'])
            : 0;

        // 2026年4月分からの子ども・子育て支援金（本人負担分）
        $childSupport = self::roundInsurance((float)$tableRow['child_support_half']);

        // 厚生年金の最低等級は88,000円。健保grade1〜3（58,000〜78,000円）は
        // JSONで最低等級値(8,052円)を設定済みだが、万一nullの場合は最低額で保護する
        $pensionHalf = $tableRow['pension_half'] ?? null;
        $pension = $pensionHalf === null ? 8052 : self::roundInsurance((float)$pensionHalf);

        // 雇用保険も交通費込み賃金で計算
        $employmentInsurance = $employmentInsuranceEnabled
            ? (int) floor($socialInsuranceTargetSalary * EMPLOYMENT_RATE)
            : 0;

        // 所得税は、非課税交通費を除いた給与から社会保険等を差し引いて算定
        $monthlyTaxableAfterSocialInsurance = $salary
            - $healthInsurance
            - $careInsurance
            - $childSupport
            - $pension
            - $employmentInsurance;

        $incomeTax = $this->incomeTaxCalculator->calculateForKou(
            monthlyTaxableAfterSocialInsurance: max(0, $monthlyTaxableAfterSocialInsurance),
            dependents: $dependents
        );

        $grossSalary = $salary + $transportation;

        $totalDeductions = $healthInsurance
            + $careInsurance
            + $childSupport
            + $pension
            + $employmentInsurance
            + $incomeTax
            + $residentTax;

        $netSalary = $grossSalary - $totalDeductions;

        return [
            'gross_salary' => $grossSalary,
            'taxable_salary' => $salary,
            'social_insurance_target_salary' => $socialInsuranceTargetSalary,
            'transportation' => $transportation,
            'standard_monthly_remuneration' => $standardMonthlyRemuneration,
            'health_insurance' => $healthInsurance,
            'care_insurance' => $careInsurance,
            'child_support' => $childSupport,
            'pension' => $pension,
            'employment_insurance' => $employmentInsurance,
            'income_tax' => $incomeTax,
            'resident_tax' => $residentTax,
            'total_deductions' => $totalDeductions,
            'net_salary' => $netSalary,
        ];
    }

    /**
     * 社会保険料の端数処理
     * 50銭以下 → 切り捨て、50銭超 → 切り上げ
     * 例: 469.8 → 470、469.5 → 469、469.4 → 469
     */
    private static function roundInsurance(float $value): int
    {
        $frac = $value - floor($value);
        return $frac > 0.5 ? (int)ceil($value) : (int)floor($value);
    }
}