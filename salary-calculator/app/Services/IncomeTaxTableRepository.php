<?php
declare(strict_types=1);

namespace App\Services;

use RuntimeException;

final class IncomeTaxTableRepository
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
    public function getTable(): array
    {
        if ($this->data !== null) {
            return $this->data;
        }

        if (!is_file($this->jsonPath)) {
            throw new RuntimeException('所得税テーブルJSONが見つかりません。');
        }

        $json = file_get_contents($this->jsonPath);
        if ($json === false) {
            throw new RuntimeException('所得税テーブルJSONの読み込みに失敗しました。');
        }

        $decoded = json_decode($json, true);
        if (!is_array($decoded)) {
            throw new RuntimeException('所得税テーブルJSONの形式が不正です。');
        }

        $this->data = $decoded;

        return $this->data;
    }
}
