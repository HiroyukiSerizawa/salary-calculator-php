<?php
declare(strict_types=1);

namespace App\Validators;

final class InputValidator
{
    /**
     * @param array<string, string> $input
     * @return array<string, string>
     */
    public function validate(array $input): array
    {
        $errors = [];

        if ($input['salary'] === '') {
            $errors['salary'] = '月給額を入力してください。';
        } elseif (!$this->isNonNegativeInteger($input['salary']) || (int)$input['salary'] <= 0) {
            $errors['salary'] = '月給額は1以上の整数で入力してください。';
        }

        if (!$this->isNonNegativeInteger($input['transportation'])) {
            $errors['transportation'] = '交通費は0以上の整数で入力してください。';
        }

        if ($input['age'] === '') {
            $errors['age'] = '年齢を入力してください。';
        } elseif (!$this->isNonNegativeInteger($input['age']) || (int)$input['age'] < 15 || (int)$input['age'] > 100) {
            $errors['age'] = '年齢は15〜100の整数で入力してください。';
        }

        if (!$this->isNonNegativeInteger($input['dependents'])) {
            $errors['dependents'] = '扶養人数は0以上の整数で入力してください。';
        }

        if (!in_array($input['employment_insurance'], ['0', '1'], true)) {
            $errors['employment_insurance'] = '雇用保険の選択が不正です。';
        }

        if (!$this->isNonNegativeInteger($input['resident_tax'])) {
            $errors['resident_tax'] = '住民税は0以上の整数で入力してください。';
        }

        return $errors;
    }

    private function isNonNegativeInteger(string $value): bool
    {
        return preg_match('/^\d+$/', $value) === 1;
    }
}
