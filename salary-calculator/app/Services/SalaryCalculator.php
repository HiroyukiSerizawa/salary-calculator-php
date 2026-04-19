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
        $healthInsurance = (int) floor((float)$tableRow['health_insurance_half']);

        $careInsurance = $age >= CARE_INSURANCE_AGE
            ? (int) floor((float)$tableRow['care_insurance_half'])
            : 0;

        // 2026年4月分からの子ども・子育て支援金（本人負担分）
        $childSupport = (int) floor((float)$tableRow['child_support_half']);

        $pensionHalf = $tableRow['pension_half'] ?? null;
        $pension = $pensionHalf === null ? 0 : (int) floor((float)$pensionHalf);

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
}