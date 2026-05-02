<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/Config/constants.php';
require_once __DIR__ . '/../app/Helpers/FormatHelper.php';
require_once __DIR__ . '/../app/Validators/InputValidator.php';
require_once __DIR__ . '/../app/Services/InsuranceTableRepository.php';
require_once __DIR__ . '/../app/Services/IncomeTaxTableRepository.php';
require_once __DIR__ . '/../app/Services/IncomeTaxCalculator.php';
require_once __DIR__ . '/../app/Services/SalaryCalculator.php';

use App\Validators\InputValidator;
use App\Services\InsuranceTableRepository;
use App\Services\IncomeTaxTableRepository;
use App\Services\IncomeTaxCalculator;
use App\Services\SalaryCalculator;

$input = [
    'salary' => '',
    'transportation' => '0',
    'age' => '',
    'dependents' => '0',
    'employment_insurance' => '1',
    'resident_tax' => '0',
];

$errors = [];
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = [
        'salary' => trim((string)($_POST['salary'] ?? '')),
        'transportation' => trim((string)($_POST['transportation'] ?? '0')),
        'age' => trim((string)($_POST['age'] ?? '')),
        'dependents' => trim((string)($_POST['dependents'] ?? '0')),
        'employment_insurance' => trim((string)($_POST['employment_insurance'] ?? '1')),
        'resident_tax' => trim((string)($_POST['resident_tax'] ?? '0')),
    ];

    $validator = new InputValidator();
    $errors = $validator->validate($input);

    if ($errors === []) {
        $insuranceRepository = new InsuranceTableRepository(
            __DIR__ . '/../app/Data/tokyo_insurance_table_r8_2026_03.json'
        );

        $incomeTaxRepository = new IncomeTaxTableRepository(
            __DIR__ . '/../app/Data/income_tax_monthly_table_r8_2026.json'
        );

        $incomeTaxCalculator = new IncomeTaxCalculator($incomeTaxRepository);

        $calculator = new SalaryCalculator(
            $insuranceRepository,
            $incomeTaxCalculator
        );

        $result = $calculator->calculate([
            'salary' => (int)$input['salary'],
            'transportation' => (int)$input['transportation'],
            'age' => (int)$input['age'],
            'dependents' => (int)$input['dependents'],
            'employment_insurance' => (int)$input['employment_insurance'] === 1,
            'resident_tax' => (int)$input['resident_tax'],
        ]);
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>給与手取り計算（東京版）</title>
    <meta name="description" content="東京・協会けんぽ前提の月給手取りシミュレーター">
    <meta name="google-site-verification" content="f5yiJQiXvEnbrN_Oy1yFKjQy6NFNtroF3t0MfmP1Spc" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="site-header__inner">
            <div class="site-header__top">
                <a class="site-header__brand" href="https://pfp.co.jp" target="_blank" rel="noopener noreferrer" aria-label="株式会社PFP 公式サイト">
                    <img src="./assets/img/pfp-logo.png" alt="株式会社PFP ロゴ" class="site-header__logo">
                </a>
                <a class="site-header__url" href="https://pfp.co.jp" target="_blank" rel="noopener noreferrer">https://pfp.co.jp</a>
            </div>
            <div class="site-header__rule"></div>
        </div>
    </header>

    <div class="page">
        <section class="hero">
            <h1 class="hero__title">給与手取り計算</h1>
            <p class="hero__subtitle">
                東京・協会けんぽ前提の概算結果です。必要項目だけ入力して、手取り額の目安を確認できます。
            </p>
        </section>

        <main class="layout">
            <section class="card">
                <?php require __DIR__ . '/../app/Views/form.php'; ?>
            </section>

            <section class="card card--result">
                <?php require __DIR__ . '/../app/Views/result.php'; ?>
            </section>
        </main>
    </div>
</body>
</html>
