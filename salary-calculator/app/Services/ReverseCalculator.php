<?php

declare(strict_types=1);

namespace App\Services;

/**
 * 希望手取り額から必要な基本給を逆算するサービス
 * 二分探索でSalaryCalculatorを繰り返し呼び出し、誤差1円以内に収束させる
 */
final class ReverseCalculator
{
    public function __construct(
        private readonly SalaryCalculator $calculator
    ) {
    }

    /**
     * @param array{
     *   target_net: int,
     *   transportation: int,
     *   age: int,
     *   dependents: int,
     *   employment_insurance: bool,
     *   resident_tax: int
     * } $input
     * @return array<string, mixed>
     */
    public function calculate(array $input): array
    {
        $targetNet      = $input['target_net'];
        $transportation = $input['transportation'];
        $age            = $input['age'];
        $dependents     = $input['dependents'];
        $employmentIns  = $input['employment_insurance'];
        $residentTax    = $input['resident_tax'];

        // 二分探索の範囲
        // 下限: 手取りは総支給を超えないのでtargetNet未満にはならない
        // 上限: 控除は多くても総支給の35%程度なのでtargetNet * 1.6で十分
        $low  = max(0, $targetNet - $transportation);
        $high = (int)($targetNet * 1.6) + 100000;

        $exactSalary = $high;
        $calcResult  = null;

        for ($i = 0; $i < 60; $i++) {
            $mid = (int)(($low + $high) / 2);

            $result = $this->calculator->calculate([
                'salary'               => $mid,
                'transportation'       => $transportation,
                'age'                  => $age,
                'dependents'           => $dependents,
                'employment_insurance' => $employmentIns,
                'resident_tax'         => $residentTax,
            ]);

            if ($result['net_salary'] < $targetNet) {
                $low = $mid + 1;
            } else {
                $high        = $mid;
                $exactSalary = $mid;
                $calcResult  = $result;
            }

            if ($high - $low <= 0) {
                break;
            }
        }

        // exactSalaryで目標に届かなかった場合の安全弁
        if ($calcResult === null || $calcResult['net_salary'] < $targetNet) {
            $exactSalary = $high;
            $calcResult  = $this->calculator->calculate([
                'salary'               => $exactSalary,
                'transportation'       => $transportation,
                'age'                  => $age,
                'dependents'           => $dependents,
                'employment_insurance' => $employmentIns,
                'resident_tax'         => $residentTax,
            ]);
        }

        // 1,000円単位に切り上げた「提案基本給」を出す（求人票に近い表現のため）
        $suggestedSalary = (int)(ceil($exactSalary / 1000) * 1000);

        $suggestedResult = $this->calculator->calculate([
            'salary'               => $suggestedSalary,
            'transportation'       => $transportation,
            'age'                  => $age,
            'dependents'           => $dependents,
            'employment_insurance' => $employmentIns,
            'resident_tax'         => $residentTax,
        ]);

        return [
            'target_net'       => $targetNet,
            'exact_salary'     => $exactSalary,
            'suggested_salary' => $suggestedSalary,
            'result'           => $suggestedResult,
        ];
    }
}
