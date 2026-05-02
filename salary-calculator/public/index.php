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

        <section class="info-section">
            <h2 class="info-section__title">この計算ツールについて</h2>
            <p class="info-section__lead">東京在住・協会けんぽ加入の会社員を前提に、以下の控除を計算します。令和8年（2026年）の料率・税額表に対応しています。</p>
            <div class="info-grid">
                <div class="info-item">
                    <h3>健康保険料</h3>
                    <p>協会けんぽ東京支部の料率（2025年3月改定）をもとに標準報酬月額から計算。労使折半の従業員負担分を表示します。</p>
                </div>
                <div class="info-item">
                    <h3>介護保険料</h3>
                    <p>40歳以上が対象。協会けんぽの全国一律料率（2025年3月改定）を使用。40歳未満の場合は¥0になります。</p>
                </div>
                <div class="info-item">
                    <h3>子ども・子育て支援金</h3>
                    <p>2026年4月より開始。健康保険料に上乗せされる新たな控除です（標準報酬月額 × 0.115%）。</p>
                </div>
                <div class="info-item">
                    <h3>厚生年金保険料</h3>
                    <p>料率18.3%（労使折半）で計算。標準報酬月額の上限は65万円です。</p>
                </div>
                <div class="info-item">
                    <h3>雇用保険料</h3>
                    <p>一般の事業の場合、令和7年度の従業員負担率は6/1000。加入なしに切り替えも可能です。</p>
                </div>
                <div class="info-item">
                    <h3>所得税</h3>
                    <p>令和8年分の月額源泉徴収税額表（甲欄）をもとに計算。扶養人数が反映されます。</p>
                </div>
            </div>
        </section>

        <section class="articles-section">
            <h2 class="articles-section__title">給与・社会保険の解説記事</h2>
            <div class="articles-grid">
                <a href="./articles/kodomo-shienkin.php" class="article-card">
                    <span class="article-card__label">社会保険・給与解説</span>
                    <p class="article-card__title">子ども・子育て支援金とは？2026年4月から始まる新たな給与天引きをわかりやすく解説</p>
                    <p class="article-card__desc">月額負担額の目安、年収別シミュレーション、手取りへの影響を詳しく解説します。</p>
                    <span class="article-card__arrow">続きを読む →</span>
                </a>
                <a href="./articles/shakai-hoken-keisan.php" class="article-card">
                    <span class="article-card__label">社会保険・給与解説</span>
                    <p class="article-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</p>
                    <p class="article-card__desc">標準報酬月額の仕組みから、健康保険・厚生年金・介護保険料の計算方法まで徹底解説。</p>
                    <span class="article-card__arrow">続きを読む →</span>
                </a>
            </div>
        </section>

    </div>
</body>
</html>
