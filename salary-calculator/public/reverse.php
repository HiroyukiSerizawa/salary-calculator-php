<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/Config/constants.php';
require_once __DIR__ . '/../app/Helpers/FormatHelper.php';
require_once __DIR__ . '/../app/Validators/InputValidator.php';
require_once __DIR__ . '/../app/Services/InsuranceTableRepository.php';
require_once __DIR__ . '/../app/Services/IncomeTaxTableRepository.php';
require_once __DIR__ . '/../app/Services/IncomeTaxCalculator.php';
require_once __DIR__ . '/../app/Services/SalaryCalculator.php';
require_once __DIR__ . '/../app/Services/ReverseCalculator.php';

use App\Services\InsuranceTableRepository;
use App\Services\IncomeTaxTableRepository;
use App\Services\IncomeTaxCalculator;
use App\Services\SalaryCalculator;
use App\Services\ReverseCalculator;

function yen(int $n): string { return '¥' . number_format($n); }

$input = [
    'target_net'           => '',
    'transportation'       => '0',
    'age'                  => '',
    'dependents'           => '0',
    'employment_insurance' => '1',
    'resident_tax'         => '0',
];

$errors = [];
$reverseResult = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = [
        'target_net'           => trim((string)($_POST['target_net'] ?? '')),
        'transportation'       => trim((string)($_POST['transportation'] ?? '0')),
        'age'                  => trim((string)($_POST['age'] ?? '')),
        'dependents'           => trim((string)($_POST['dependents'] ?? '0')),
        'employment_insurance' => trim((string)($_POST['employment_insurance'] ?? '1')),
        'resident_tax'         => trim((string)($_POST['resident_tax'] ?? '0')),
    ];

    // バリデーション（target_netはsalaryとして検証）
    if ($input['target_net'] === '' || !ctype_digit($input['target_net'])) {
        $errors['target_net'] = '希望手取り額を正しく入力してください。';
    } elseif ((int)$input['target_net'] < 50000 || (int)$input['target_net'] > 3000000) {
        $errors['target_net'] = '希望手取り額は50,000〜3,000,000円の範囲で入力してください。';
    }
    if ($input['age'] === '' || !ctype_digit($input['age'])) {
        $errors['age'] = '年齢を正しく入力してください。';
    } elseif ((int)$input['age'] < 15 || (int)$input['age'] > 100) {
        $errors['age'] = '年齢は15〜100の範囲で入力してください。';
    }

    if ($errors === []) {
        $insuranceRepository = new InsuranceTableRepository(
            __DIR__ . '/../app/Data/tokyo_insurance_table_r8_2026_03.json'
        );
        $incomeTaxRepository = new IncomeTaxTableRepository(
            __DIR__ . '/../app/Data/income_tax_monthly_table_r8_2026.json'
        );
        $incomeTaxCalculator = new IncomeTaxCalculator($incomeTaxRepository);
        $calculator          = new SalaryCalculator($insuranceRepository, $incomeTaxCalculator);
        $reverseCalculator   = new ReverseCalculator($calculator);

        $reverseResult = $reverseCalculator->calculate([
            'target_net'           => (int)$input['target_net'],
            'transportation'       => (int)$input['transportation'],
            'age'                  => (int)$input['age'],
            'dependents'           => (int)$input['dependents'],
            'employment_insurance' => (int)$input['employment_insurance'] === 1,
            'resident_tax'         => (int)$input['resident_tax'],
        ]);
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>手取り逆算シミュレーター｜希望手取りから基本給を計算【東京版】</title>
  <meta name="description" content="希望する手取り額から必要な基本給を逆算。転職交渉や求人票確認に。住民税・交通費を入力して、必要な月給の目安をすぐに計算できます（東京・協会けんぽ前提）。">
  <link rel="canonical" href="https://calc.pfp.tokyo/reverse.php">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <style>
    .reverse-badge {
      display: inline-block;
      background: #f0f4ff;
      color: #153987;
      font-size: 12px;
      font-weight: 700;
      padding: 3px 10px;
      border-radius: 20px;
      border: 1px solid #c2d0f5;
      margin-bottom: 8px;
    }
    .result-highlight {
      background: linear-gradient(135deg, #153987 0%, #2563eb 100%);
      color: #fff;
      border-radius: 14px;
      padding: 28px 24px;
      margin-bottom: 24px;
      text-align: center;
    }
    .result-highlight__label {
      font-size: 13px;
      opacity: 0.85;
      margin-bottom: 6px;
    }
    .result-highlight__value {
      font-size: 2.4rem;
      font-weight: 800;
      letter-spacing: -0.5px;
    }
    .result-highlight__sub {
      font-size: 12px;
      opacity: 0.75;
      margin-top: 6px;
    }
    .result-confirm-btn {
      display: block;
      width: 100%;
      background: #fff;
      color: #153987;
      border: 2px solid #fff;
      border-radius: 10px;
      padding: 14px;
      font-size: 15px;
      font-weight: 700;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      margin-top: 20px;
      transition: background 0.15s, color 0.15s;
    }
    .result-confirm-btn:hover {
      background: #e8eeff;
      color: #153987;
    }
    .assumption-note {
      background: #fffbeb;
      border: 1px solid #fcd34d;
      border-radius: 10px;
      padding: 14px 16px;
      font-size: 13px;
      color: #78350f;
      margin-bottom: 20px;
    }
    .assumption-note strong { color: #92400e; }
    .nav-tabs {
      display: flex;
      gap: 8px;
      margin-bottom: 24px;
    }
    .nav-tab {
      flex: 1;
      text-align: center;
      padding: 10px 8px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 600;
      text-decoration: none;
      border: 2px solid #e2e8f0;
      color: #64748b;
      background: #f8fafc;
      transition: all 0.15s;
    }
    .nav-tab--active {
      background: #153987;
      color: #fff;
      border-color: #153987;
    }
    .nav-tab:hover:not(.nav-tab--active) {
      border-color: #153987;
      color: #153987;
    }
  </style>
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
      <span class="reverse-badge">逆算モード</span>
      <h1 class="hero__title">手取り逆算シミュレーター</h1>
      <p class="hero__subtitle">
        希望する手取り額を入力すると、必要な基本給の目安を逆算します。<br>
        転職時の給与交渉・求人票の確認にご活用ください（東京・協会けんぽ前提）。
      </p>
    </section>

    <main class="layout">
      <section class="card">
        <div class="nav-tabs">
          <a href="./index.php" class="nav-tab">通常計算（手取りを求める）</a>
          <a href="./reverse.php" class="nav-tab nav-tab--active">逆算（基本給を求める）</a>
        </div>

        <form method="POST" action="./reverse.php" novalidate>
          <div class="form-group">
            <label class="form-label" for="target_net">
              希望手取り額（月）<span class="form-label__required">必須</span>
            </label>
            <div class="input-wrap">
              <input
                type="number"
                id="target_net"
                name="target_net"
                class="form-input<?= isset($errors['target_net']) ? ' form-input--error' : '' ?>"
                value="<?= htmlspecialchars($input['target_net']) ?>"
                placeholder="例: 250000"
                min="50000"
                max="3000000"
                required
              >
              <span class="input-unit">円</span>
            </div>
            <?php if (isset($errors['target_net'])): ?>
              <p class="form-error"><?= htmlspecialchars($errors['target_net']) ?></p>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label class="form-label" for="age">
              年齢<span class="form-label__required">必須</span>
            </label>
            <div class="input-wrap">
              <input
                type="number"
                id="age"
                name="age"
                class="form-input<?= isset($errors['age']) ? ' form-input--error' : '' ?>"
                value="<?= htmlspecialchars($input['age']) ?>"
                placeholder="例: 30"
                min="15"
                max="100"
                required
              >
              <span class="input-unit">歳</span>
            </div>
            <?php if (isset($errors['age'])): ?>
              <p class="form-error"><?= htmlspecialchars($errors['age']) ?></p>
            <?php endif; ?>
            <p class="form-hint">40歳以上は介護保険料が加算されます</p>
          </div>

          <div class="form-group">
            <label class="form-label" for="transportation">
              交通費（月）<span class="form-label__optional">任意・仮置き</span>
            </label>
            <div class="input-wrap">
              <input
                type="number"
                id="transportation"
                name="transportation"
                class="form-input"
                value="<?= htmlspecialchars($input['transportation']) ?>"
                placeholder="例: 15000"
                min="0"
              >
              <span class="input-unit">円</span>
            </div>
            <p class="form-hint">不明な場合は0のままでOKです（社会保険料の計算に影響します）</p>
          </div>

          <div class="form-group">
            <label class="form-label" for="resident_tax">
              住民税（月）<span class="form-label__optional">任意・仮置き</span>
            </label>
            <div class="input-wrap">
              <input
                type="number"
                id="resident_tax"
                name="resident_tax"
                class="form-input"
                value="<?= htmlspecialchars($input['resident_tax']) ?>"
                placeholder="例: 15000"
                min="0"
              >
              <span class="input-unit">円</span>
            </div>
            <p class="form-hint">住民税は前年収入依存のため正確な逆算が難しく仮置きです。目安：年収400万→約1.2万円/月</p>
          </div>

          <div class="form-group">
            <label class="form-label" for="dependents">扶養人数</label>
            <select id="dependents" name="dependents" class="form-select">
              <?php foreach (range(0, 5) as $n): ?>
                <option value="<?= $n ?>"<?= (string)$n === $input['dependents'] ? ' selected' : '' ?>><?= $n ?>人</option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label">雇用保険</label>
            <div class="radio-group">
              <label class="radio-label">
                <input type="radio" name="employment_insurance" value="1"<?= $input['employment_insurance'] === '1' ? ' checked' : '' ?>>
                加入あり
              </label>
              <label class="radio-label">
                <input type="radio" name="employment_insurance" value="0"<?= $input['employment_insurance'] === '0' ? ' checked' : '' ?>>
                加入なし
              </label>
            </div>
          </div>

          <button type="submit" class="btn-calc">逆算する</button>
        </form>
      </section>

      <section class="card card--result">
        <?php if ($reverseResult !== null): ?>
          <?php $r = $reverseResult['result']; ?>

          <div class="result-highlight">
            <p class="result-highlight__label">必要な基本給の目安</p>
            <p class="result-highlight__value"><?= yen($reverseResult['suggested_salary']) ?></p>
            <p class="result-highlight__sub">
              この基本給での試算手取り：<?= yen($r['net_salary']) ?>
              （目標との差：<?= yen($r['net_salary'] - $reverseResult['target_net']) ?>）
            </p>
          </div>

          <div class="assumption-note">
            <strong>⚠ 計算前提（仮置き）</strong><br>
            交通費 <?= yen($r['transportation']) ?> / 住民税 <?= yen($r['resident_tax']) ?> で試算しています。
            実際の交通費・住民税が異なる場合は結果も変わります。
          </div>

          <table class="result-table">
            <thead>
              <tr><th>項目</th><th>金額</th></tr>
            </thead>
            <tbody>
              <tr class="result-row--base">
                <td>基本給</td>
                <td><?= yen($reverseResult['suggested_salary']) ?></td>
              </tr>
              <tr>
                <td>交通費</td>
                <td><?= yen($r['transportation']) ?></td>
              </tr>
              <tr class="result-row--gross">
                <td><strong>総支給額</strong></td>
                <td><strong><?= yen($r['gross_salary']) ?></strong></td>
              </tr>
              <tr class="result-row--deduction">
                <td>健康保険料</td>
                <td>−<?= yen($r['health_insurance']) ?></td>
              </tr>
              <?php if ($r['care_insurance'] > 0): ?>
              <tr class="result-row--deduction">
                <td>介護保険料</td>
                <td>−<?= yen($r['care_insurance']) ?></td>
              </tr>
              <?php endif; ?>
              <tr class="result-row--deduction">
                <td>子ども・子育て支援金</td>
                <td>−<?= yen($r['child_support']) ?></td>
              </tr>
              <tr class="result-row--deduction">
                <td>厚生年金保険料</td>
                <td>−<?= yen($r['pension']) ?></td>
              </tr>
              <?php if ($r['employment_insurance'] > 0): ?>
              <tr class="result-row--deduction">
                <td>雇用保険料</td>
                <td>−<?= yen($r['employment_insurance']) ?></td>
              </tr>
              <?php endif; ?>
              <tr class="result-row--deduction">
                <td>所得税</td>
                <td>−<?= yen($r['income_tax']) ?></td>
              </tr>
              <tr class="result-row--deduction">
                <td>住民税（仮置き）</td>
                <td>−<?= yen($r['resident_tax']) ?></td>
              </tr>
              <tr class="result-row--total-deduction">
                <td>控除合計</td>
                <td>−<?= yen($r['total_deductions']) ?></td>
              </tr>
              <tr class="result-row--net">
                <td><strong>試算手取り</strong></td>
                <td><strong><?= yen($r['net_salary']) ?></strong></td>
              </tr>
            </tbody>
          </table>

          <?php
          $confirmUrl = './index.php?' . http_build_query([
            'salary'               => $reverseResult['suggested_salary'],
            'age'                  => $input['age'],
            'transportation'       => $input['transportation'],
            'dependents'           => $input['dependents'],
            'employment_insurance' => $input['employment_insurance'],
            'resident_tax'         => $input['resident_tax'],
          ]);
          ?>
          <a href="<?= htmlspecialchars($confirmUrl) ?>" class="result-confirm-btn" style="background:#153987; color:#fff; display:block; text-align:center; padding:14px; border-radius:10px; font-weight:700; text-decoration:none; margin-top:20px;">
            この基本給で手取り計算を確認する →
          </a>

        <?php else: ?>
          <div class="result-placeholder">
            <p class="result-placeholder__text">希望手取り額と年齢を入力して「逆算する」を押してください</p>
          </div>
        <?php endif; ?>
      </section>
    </main>

    <section class="info-section">
      <h2 class="info-section__title">逆算シミュレーターについて</h2>
      <p class="info-section__lead">東京在住・協会けんぽ加入の会社員を前提に、希望手取り額から逆算した基本給の目安を表示します。</p>
      <div class="info-grid">
        <div class="info-item">
          <h3>計算の仕組み</h3>
          <p>手取り額は基本給に依存し、基本給を変えると社保・所得税も変わるため単純な逆算ができません。このツールは二分探索で繰り返し計算し、誤差1円以内の基本給を求めます。</p>
        </div>
        <div class="info-item">
          <h3>住民税について</h3>
          <p>住民税は前年の収入をもとに計算される地方税のため、正確な逆算ができません。入力がある場合はその値を固定して試算します。目安：年収400万円で月約1.2万円。</p>
        </div>
        <div class="info-item">
          <h3>交通費について</h3>
          <p>交通費は社会保険料の計算に含まれます（所得税の計算には含まれません）。交通費が大きいと社会保険料が増え、必要な基本給が変わる場合があります。</p>
        </div>
        <div class="info-item">
          <h3>結果の精度</h3>
          <p>試算は東京・協会けんぽ・令和8年料率を前提とした概算です。実際の金額は勤務先の健康保険組合・端数処理等によって異なります。</p>
        </div>
      </div>
    </section>

    <section class="faq-section">
      <h2 class="faq-section__title">よくある質問</h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-q">1,000円単位に丸めているのはなぜですか？</div>
          <div class="faq-a">求人票や雇用契約での基本給は通常キリのよい金額で設定されるため、計算上の最低ライン（exactSalary）を1,000円単位で切り上げた「提案基本給」を表示しています。試算手取りが目標より少し多くなるのはそのためです。</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">転職交渉でどう使えますか？</div>
          <div class="faq-a">「手取り〇〇万円は確保したい」という希望から「基本給〇〇万円は必要」という交渉の根拠数字を出せます。住民税・交通費の仮置き値も入力すると、より実態に近い試算ができます。</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">賞与は含まれますか？</div>
          <div class="faq-a">このツールは月次の基本給と手取りの関係を試算するもので、賞与は含まれません。年収ベースの試算には別途ご確認ください。</div>
        </div>
      </div>
    </section>

  </div>
</body>
</html>
