<?php
declare(strict_types=1);

namespace App\Services;

use RuntimeException;

final class IncomeTaxCalculator
{
    public function __construct(
        private readonly IncomeTaxTableRepository $repository
    ) {
    }

    public function calculateForKou(int $monthlyTaxableAfterSocialInsurance, int $dependents): int
    {
        $table = $this->repository->getTable();

        if ($monthlyTaxableAfterSocialInsurance < 0) {
            return 0;
        }

        foreach ($table['fixed_rows'] as $row) {
            if (
                $monthlyTaxableAfterSocialInsurance >= $row['from']
                && $monthlyTaxableAfterSocialInsurance < $row['to']
            ) {
                $taxes = $row['kou'];
                return $this->resolveTaxByDependents($taxes, $dependents, (int)$table['method']['extra_dependent_credit_over_7']);
            }
        }

        foreach ($table['formula_rows'] as $row) {
            $from = $row['from'];
            $to = $row['to'];

            $matches = $monthlyTaxableAfterSocialInsurance >= $from
                && ($to === null || $monthlyTaxableAfterSocialInsurance < $to);

            if (!$matches) {
                continue;
            }

            $formula = $row['kou'];
            $baseTaxes = $formula['base_tax_by_dependents_0_to_7'];
            $baseTax = $this->resolveTaxByDependents($baseTaxes, $dependents, (int)$table['method']['extra_dependent_credit_over_7']);

            $extra = $monthlyTaxableAfterSocialInsurance - (int)$formula['base_amount'];
            $tax = $baseTax + (int)floor($extra * (float)$formula['rate']);

            return max(0, $tax);
        }

        throw new RuntimeException('該当する所得税テーブル行が見つかりませんでした。');
    }

    private function resolveTaxByDependents(array $taxes, int $dependents, int $extraDependentCredit): int
    {
        if ($dependents <= 7) {
            return (int)$taxes[$dependents];
        }

        $taxAtSeven = (int)$taxes[7];
        $reduction = ($dependents - 7) * $extraDependentCredit;

        return max(0, $taxAtSeven - $reduction);
    }
}
