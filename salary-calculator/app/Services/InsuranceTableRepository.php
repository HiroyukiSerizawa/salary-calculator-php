<?php
declare(strict_types=1);

namespace App\Services;

use RuntimeException;

final class InsuranceTableRepository
{
    /** @var array<string, mixed>|null */
    private ?array $data = null;

    public function __construct(
        private readonly string $jsonPath
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function findBySalary(int $salary): array
    {
        if ($salary <= 0) {
            throw new RuntimeException('月給額が不正です。');
        }

        $rows = $this->getRows();

        foreach ($rows as $row) {
            $salaryFrom = (int)$row['salary_from'];
            $salaryTo = $row['salary_to'];

            // null は上限なし扱い
            if ($salaryTo === null) {
                if ($salary >= $salaryFrom) {
                    return $row;
                }
                continue;
            }

            if ($salary >= $salaryFrom && $salary < (int)$salaryTo) {
                return $row;
            }
        }

        throw new RuntimeException('該当する保険料テーブル行が見つかりませんでした。');
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function getRows(): array
    {
        if ($this->data === null) {
            if (!is_file($this->jsonPath)) {
                throw new RuntimeException('保険料テーブルJSONが見つかりません。');
            }

            $json = file_get_contents($this->jsonPath);
            if ($json === false) {
                throw new RuntimeException('保険料テーブルJSONの読み込みに失敗しました。');
            }

            $decoded = json_decode($json, true);
            if (!is_array($decoded)) {
                throw new RuntimeException('保険料テーブルJSONの形式が不正です。');
            }

            $this->data = $decoded;
        }

        $rows = $this->data['rows'] ?? null;

        if (!is_array($rows)) {
            throw new RuntimeException('保険料テーブルJSONに rows がありません。');
        }

        /** @var array<int, array<string, mixed>> $rows */
        return $rows;
    }
}