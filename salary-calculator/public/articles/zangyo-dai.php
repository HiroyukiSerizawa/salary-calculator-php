<?php
$page_title = "残業代（時間外手当）の計算方法とは？割増賃金率・計算式をわかりやすく解説【2026年版】";
$page_description = "残業代の計算方法を徹底解説。法定労働時間・割増賃金率（25%/50%/35%）・時給の出し方から年収別シミュレーション表まで、給与明細の残業代が正しいか自分で確認できます。";
$canonical_url = "https://calc.pfp.tokyo/articles/zangyo-dai.php";
$calc_url = "https://calc.pfp.tokyo/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">

  <!-- OGP -->
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3745259041113437"
      crossorigin="anonymous"></script>

  <!-- 構造化データ -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "<?= htmlspecialchars($page_title) ?>",
    "description": "<?= htmlspecialchars($page_description) ?>",
    "author": {
      "@type": "Organization",
      "name": "給与手取り計算ツール"
    },
    "datePublished": "2026-05-15",
    "dateModified": "2026-05-15",
    "publisher": {
      "@type": "Organization",
      "name": "pfp.tokyo"
    }
  }
  </script>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: "Hiragino Kaku Gothic ProN", "Meiryo", sans-serif;
      background: #f5f7fa;
      color: #333;
      line-height: 1.8;
      font-size: 16px;
    }

    header {
      background: #fff;
      border-bottom: 1px solid #e0e7ef;
    }
    .header-inner {
      max-width: 860px;
      margin: 0 auto;
      padding: 14px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .site-logo {
      font-size: 15px;
      font-weight: 700;
      text-decoration: none;
      color: #153987;
    }
    .header-nav {
      font-size: 13px;
    }
    .header-nav a { color: #555; text-decoration: none; margin-left: 16px; }
    .header-nav a:hover { color: #153987; }
    .header-cta {
      background: #fe8d27;
      color: #fff;
      padding: 8px 18px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 700;
      text-decoration: none;
      white-space: nowrap;
      transition: background 0.2s;
    }
    .header-cta:hover { background: #e07820; }

    .breadcrumb {
      max-width: 860px;
      margin: 0 auto;
      padding: 10px 20px;
      font-size: 13px;
      color: #888;
    }
    .breadcrumb a { color: #1a6fb3; text-decoration: none; }
    .breadcrumb a:hover { text-decoration: underline; }
    .breadcrumb span { margin: 0 6px; }

    main {
      max-width: 860px;
      margin: 0 auto;
      padding: 0 20px 60px;
    }

    article {
      background: #fff;
      border-radius: 10px;
      padding: 36px 40px;
      box-shadow: 0 2px 12px rgba(0,0,0,.06);
      margin-top: 16px;
    }

    .article-header { margin-bottom: 32px; }
    .article-label {
      display: inline-block;
      background: #e8f0fb;
      color: #1a6fb3;
      font-size: 12px;
      font-weight: 700;
      padding: 3px 10px;
      border-radius: 4px;
      margin-bottom: 12px;
    }
    h1 {
      font-size: 26px;
      line-height: 1.5;
      color: #1a1a2e;
      margin-bottom: 14px;
    }
    .article-meta { font-size: 13px; color: #888; }

    .toc {
      background: #f0f4f8;
      border-left: 4px solid #1a6fb3;
      border-radius: 0 8px 8px 0;
      padding: 20px 24px;
      margin: 28px 0;
    }
    .toc-title { font-size: 14px; font-weight: 700; color: #1a6fb3; margin-bottom: 10px; }
    .toc ol { padding-left: 20px; }
    .toc li { font-size: 14px; margin-bottom: 5px; }
    .toc a { color: #333; text-decoration: none; }
    .toc a:hover { color: #1a6fb3; text-decoration: underline; }

    h2 {
      font-size: 21px;
      color: #1a1a2e;
      border-bottom: 3px solid #1a6fb3;
      padding-bottom: 8px;
      margin: 40px 0 18px;
    }
    h3 {
      font-size: 18px;
      color: #1a3a5c;
      margin: 28px 0 12px;
      padding-left: 12px;
      border-left: 3px solid #4a9fd4;
    }

    p { margin-bottom: 16px; }

    .highlight-box {
      background: #fff8e1;
      border: 1px solid #ffc107;
      border-radius: 8px;
      padding: 18px 22px;
      margin: 20px 0;
    }
    .highlight-box.blue { background: #e8f0fb; border-color: #1a6fb3; }
    .highlight-box.green { background: #e8f8f0; border-color: #27ae60; }
    .highlight-box .box-title { font-weight: 700; font-size: 15px; margin-bottom: 8px; color: #7b5800; }
    .highlight-box.blue .box-title { color: #1a6fb3; }
    .highlight-box.green .box-title { color: #1e8449; }

    .table-wrap { overflow-x: auto; margin: 20px 0; }
    table { width: 100%; border-collapse: collapse; font-size: 15px; }
    thead th { background: #1a6fb3; color: #fff; padding: 12px 16px; text-align: left; }
    tbody td { padding: 11px 16px; border-bottom: 1px solid #e8edf2; }
    tbody tr:nth-child(even) td { background: #f5f8fc; }
    tbody tr:hover td { background: #eaf2ff; }

    .formula-box {
      background: #1a1a2e;
      color: #e8f0fb;
      border-radius: 8px;
      padding: 18px 22px;
      margin: 20px 0;
      font-family: monospace;
      font-size: 15px;
      line-height: 2;
    }
    .formula-box .comment { color: #7ab3e0; font-size: 13px; }

    .step-flow { counter-reset: step; margin: 20px 0; }
    .step-item { display: flex; gap: 16px; align-items: flex-start; margin-bottom: 14px; }
    .step-num {
      counter-increment: step;
      background: #1a6fb3;
      color: #fff;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 14px;
      flex-shrink: 0;
      margin-top: 2px;
    }
    .step-content { flex: 1; }
    .step-content strong { display: block; margin-bottom: 4px; }

    .compare-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin: 20px 0;
    }
    .compare-card {
      border: 2px solid #e0e7ef;
      border-radius: 10px;
      padding: 20px;
    }
    .compare-card.recommended { border-color: #1a6fb3; }
    .compare-card__title {
      font-size: 15px;
      font-weight: 700;
      color: #1a1a2e;
      margin-bottom: 12px;
      padding-bottom: 8px;
      border-bottom: 1px solid #e0e7ef;
    }
    .compare-card.recommended .compare-card__title { color: #1a6fb3; }
    .compare-card ul { padding-left: 18px; font-size: 14px; }
    .compare-card li { margin-bottom: 6px; }
    .badge {
      display: inline-block;
      background: #1a6fb3;
      color: #fff;
      font-size: 11px;
      font-weight: 700;
      padding: 2px 8px;
      border-radius: 3px;
      margin-left: 6px;
      vertical-align: middle;
    }

    .cta-block {
      background: linear-gradient(135deg, #1a6fb3 0%, #0d4e8a 100%);
      border-radius: 12px;
      padding: 30px 32px;
      text-align: center;
      margin: 36px 0;
      color: #fff;
    }
    .cta-block h3 { font-size: 20px; color: #fff; border-left: none; padding-left: 0; margin: 0 0 10px; }
    .cta-block p { font-size: 15px; margin-bottom: 20px; opacity: 0.9; }
    .cta-btn {
      display: inline-block;
      background: #ff6b35;
      color: #fff;
      font-size: 17px;
      font-weight: 700;
      padding: 14px 36px;
      border-radius: 30px;
      text-decoration: none;
      box-shadow: 0 4px 14px rgba(255,107,53,.4);
      transition: transform 0.15s, box-shadow 0.15s;
    }
    .cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255,107,53,.5); }
    .cta-sub { font-size: 12px; opacity: 0.75; margin-top: 10px; margin-bottom: 0; }

    .faq-item { border: 1px solid #e0e7ef; border-radius: 8px; margin-bottom: 14px; overflow: hidden; }
    .faq-q { background: #f0f4f8; padding: 16px 20px; font-weight: 700; font-size: 15px; display: flex; align-items: flex-start; gap: 10px; }
    .faq-q::before { content: "Q"; background: #1a6fb3; color: #fff; border-radius: 4px; padding: 1px 7px; font-size: 13px; flex-shrink: 0; }
    .faq-a { padding: 16px 20px; font-size: 15px; display: flex; gap: 10px; }
    .faq-a::before { content: "A"; background: #ff6b35; color: #fff; border-radius: 4px; padding: 1px 7px; font-size: 13px; flex-shrink: 0; }

    .ad-area {
      background: #f5f7fa;
      border: 1px solid #e0e7ef;
      border-radius: 8px;
      padding: 12px;
      margin: 32px 0;
      text-align: center;
      min-height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .related-articles { margin-top: 40px; border-top: 2px solid #e0e7ef; padding-top: 28px; }
    .related-articles h2 { font-size: 18px; border-bottom: none; padding-bottom: 0; margin-top: 0; margin-bottom: 16px; }
    .related-grid { display: grid; gap: 12px; }
    .related-card {
      display: block;
      background: #f5f8fc;
      border: 1px solid #d0dcea;
      border-radius: 8px;
      padding: 16px 20px;
      text-decoration: none;
      color: inherit;
      transition: background 0.2s;
    }
    .related-card:hover { background: #e8f0fb; }
    .related-card__label { font-size: 11px; color: #fe8d27; font-weight: 700; margin-bottom: 4px; }
    .related-card__title { font-size: 14px; font-weight: 700; color: #1a1a2e; }

    footer {
      background: #1a1a2e;
      color: #aaa;
      text-align: center;
      padding: 24px;
      font-size: 13px;
      margin-top: 0;
    }
    footer a { color: #aaa; text-decoration: none; }
    footer a:hover { color: #fff; }

    @media (max-width: 640px) {
      article { padding: 24px 18px; }
      h1 { font-size: 21px; }
      h2 { font-size: 18px; }
      .compare-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<header>
  <div class="header-inner">
    <a class="site-logo" href="https://calc.pfp.tokyo/">給与手取り計算</a>
    <div class="header-nav">
      <a href="https://calc.pfp.tokyo/articles/">解説記事</a>
      <a class="header-cta" href="<?= htmlspecialchars($calc_url) ?>">手取りを計算する</a>
    </div>
  </div>
</header>

<div class="breadcrumb">
  <a href="https://calc.pfp.tokyo/">トップ</a>
  <span>›</span>
  <a href="https://calc.pfp.tokyo/articles/">解説記事</a>
  <span>›</span>
  残業代（時間外手当）の計算方法
</div>

<main>
  <article>
    <div class="article-header">
      <span class="article-label">給与・労働時間</span>
      <h1>残業代（時間外手当）の計算方法とは？割増賃金率・計算式をわかりやすく解説【2026年版】</h1>
      <p class="article-meta">2026年5月掲載 ｜ 給与手取り計算ツール編集部</p>
    </div>

    <div class="toc">
      <div class="toc-title">📋 この記事の目次</div>
      <ol>
        <li><a href="#what">残業代（時間外手当）とは？</a></li>
        <li><a href="#rate">法定労働時間と割増賃金率</a></li>
        <li><a href="#formula">残業代の計算式</a></li>
        <li><a href="#hourly">月給から時給を計算する方法</a></li>
        <li><a href="#simulation">年収別・残業時間別シミュレーション表</a></li>
        <li><a href="#exception">残業代が出ないケースに注意</a></li>
        <li><a href="#faq">よくある質問（FAQ）</a></li>
      </ol>
    </div>

    <!-- 広告 -->
    <div class="ad-area">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-3745259041113437"
           data-ad-slot="auto"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
      <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>

    <h2 id="what">1. 残業代（時間外手当）とは？</h2>

    <p>残業代（時間外手当）とは、<strong>法定労働時間（1日8時間・週40時間）を超えて働いた場合に、通常の賃金に加えて支払われる割増賃金</strong>のことです。労働基準法第37条によって雇用主に支払いが義務付けられています。</p>

    <p>正社員・パート・アルバイトなど雇用形態を問わず、労働基準法の適用を受けるすべての労働者に発生します。会社から「残業代は出ない」と言われていても、法定時間を超えた労働に対して残業代を払わないことは<strong>原則として違法</strong>です。</p>

    <div class="highlight-box blue">
      <div class="box-title">📌 残業代が発生する3つのケース</div>
      <ul style="padding-left:18px;">
        <li style="margin-bottom:6px;"><strong>時間外労働</strong>：1日8時間・週40時間を超えた労働</li>
        <li style="margin-bottom:6px;"><strong>深夜労働</strong>：午後10時〜午前5時の間の労働</li>
        <li style="margin-bottom:6px;"><strong>休日労働</strong>：週1日の法定休日に行った労働</li>
      </ul>
    </div>

    <h2 id="rate">2. 法定労働時間と割増賃金率</h2>

    <p>労働基準法が定める割増賃金率は、残業の種類・時間帯・時間数によって異なります。以下の表で整理します。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>種類</th>
            <th>条件</th>
            <th>割増率</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>時間外労働（通常）</td><td>月60時間以下</td><td><strong>25%以上</strong></td></tr>
          <tr><td>時間外労働（長時間）</td><td>月60時間超</td><td><strong>50%以上</strong></td></tr>
          <tr><td>深夜労働</td><td>22時〜5時</td><td><strong>25%以上</strong>（時間外と合算あり）</td></tr>
          <tr><td>休日労働（法定休日）</td><td>週1日の法定休日</td><td><strong>35%以上</strong></td></tr>
          <tr><td>休日深夜</td><td>法定休日の22時〜5時</td><td><strong>60%以上</strong></td></tr>
        </tbody>
      </table>
    </div>

    <div class="highlight-box">
      <div class="box-title">⚠️ 月60時間超の割増率に注意</div>
      <p style="margin:0;">2023年4月から中小企業にも月60時間超の<strong>割増率50%</strong>が適用されています。それ以前は大企業のみでしたが、現在は企業規模を問わず適用されます。深夜労働が重なる場合は割増率が合算（例：時間外25%＋深夜25%＝50%以上）されます。</p>
    </div>

    <h2 id="formula">3. 残業代の計算式</h2>

    <p>残業代の基本的な計算式は次のとおりです。</p>

    <div class="formula-box">
      <span class="comment">── 基本計算式 ──</span><br>
      残業代 = 時給 × 割増率 × 残業時間<br>
      <br>
      <span class="comment">── 計算例 ──</span><br>
      時給2,000円 × 1.25 × 10時間 = <strong>25,000円</strong><br>
      <br>
      <span class="comment">── 深夜残業（時間外＋深夜）の場合 ──</span><br>
      時給2,000円 × 1.50 × 3時間 = <strong>9,000円</strong>
    </div>

    <p>「割増率」は小数で表します。25%割増なら1.25、50%割増なら1.50、35%割増なら1.35です。時給の求め方については次のセクションで解説します。</p>

    <h2 id="hourly">4. 月給から時給を計算する方法</h2>

    <p>月給制の場合、残業代計算に使う時給（1時間あたりの賃金）は月給から算出します。</p>

    <div class="formula-box">
      <span class="comment">── 時給の計算式 ──</span><br>
      時給 = 月給 ÷ 月の所定労働時間<br>
      <br>
      <span class="comment">── 月の所定労働時間の求め方 ──</span><br>
      月の所定労働時間 = 年間所定労働日数 × 1日の所定労働時間 ÷ 12<br>
      <br>
      <span class="comment">── 計算例（月給25万円・週5日・1日8時間勤務）──</span><br>
      年間所定労働日数：約240日<br>
      月の所定労働時間：240 × 8 ÷ 12 = <strong>160時間</strong><br>
      時給：250,000 ÷ 160 = <strong>1,563円</strong>
    </div>

    <h3>月給に含めない手当に注意</h3>

    <p>時給の計算に使う「月給」には、<strong>すべての手当を含めるわけではありません</strong>。以下の手当は残業代の算定基礎から除外することが労働基準法で認められています。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>除外できる手当</th>
            <th>理由</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>家族手当（扶養家族数によるもの）</td><td>個人的事情に基づく手当</td></tr>
          <tr><td>通勤手当</td><td>実費弁償的性格</td></tr>
          <tr><td>住宅手当（住宅費に応じて定額）</td><td>個人的事情に基づく手当</td></tr>
          <tr><td>別居手当・子女教育手当</td><td>個人的事情に基づく手当</td></tr>
          <tr><td>臨時に支払われた賃金・賞与</td><td>臨時・一時的支給</td></tr>
        </tbody>
      </table>
    </div>

    <p>住宅手当でも<strong>一律に支給されている場合は除外できない</strong>など、名称ではなく支給の実態で判断します。不明な点は会社の人事担当や労働基準監督署に確認しましょう。</p>

    <!-- 広告 -->
    <div class="ad-area">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-3745259041113437"
           data-ad-slot="auto"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
      <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>

    <h2 id="simulation">5. 年収別・残業時間別シミュレーション表</h2>

    <p>月給別・月残業時間別の残業代早見表です。割増率25%（月60時間以下の通常残業）・月の所定労働時間160時間で計算しています。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>月給</th>
            <th>時給（目安）</th>
            <th>月残業10時間</th>
            <th>月残業20時間</th>
            <th>月残業30時間</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>20万円</td>
            <td>1,250円</td>
            <td>15,625円</td>
            <td>31,250円</td>
            <td>46,875円</td>
          </tr>
          <tr>
            <td>25万円</td>
            <td>1,563円</td>
            <td>19,538円</td>
            <td>39,063円</td>
            <td>58,594円</td>
          </tr>
          <tr>
            <td>30万円</td>
            <td>1,875円</td>
            <td>23,438円</td>
            <td>46,875円</td>
            <td>70,313円</td>
          </tr>
          <tr>
            <td>35万円</td>
            <td>2,188円</td>
            <td>27,344円</td>
            <td>54,688円</td>
            <td>82,031円</td>
          </tr>
          <tr>
            <td>40万円</td>
            <td>2,500円</td>
            <td>31,250円</td>
            <td>62,500円</td>
            <td>93,750円</td>
          </tr>
        </tbody>
      </table>
    </div>

    <p style="font-size:13px; color:#888;">※ 所定労働時間160時間・割増率25%で計算した概算です。通勤手当等の除外手当がある場合や所定労働時間が異なる場合は実際の金額と異なります。</p>

    <h2 id="exception">6. 残業代が出ないケースに注意</h2>

    <p>法律上、一定の条件を満たす場合は残業代の支払い義務が免除または変形される制度があります。ただしいずれも要件が厳しく、名目だけでは適用されません。</p>

    <h3>管理監督者（管理職）</h3>
    <p>労働基準法上の「管理監督者」は時間外・休日労働の割増賃金規定が適用外です。ただし<strong>深夜割増は適用されます</strong>。管理監督者に該当するには、経営方針への参画・労働時間の裁量・高い待遇など実態が伴っていることが必要です。</p>

    <h3>みなし残業（固定残業代）</h3>
    <p>あらかじめ一定時間分の残業代を月給に含める制度です。固定残業代が設定されている場合でも、<strong>超過した残業時間分は別途支払い義務があります</strong>。また、固定残業代として支払われる時間数・金額が明示されていない場合は無効と判断されることがあります。</p>

    <h3>裁量労働制</h3>
    <p>専門業務型・企画業務型など、対象業種・要件が法律で限定されています。裁量労働制の場合も<strong>深夜・休日労働の割増賃金は発生</strong>します。</p>

    <div class="highlight-box">
      <div class="box-title">💡 固定残業代でも超過分は請求できる</div>
      <p style="margin:0;">「みなし残業代として月30時間分含む」と契約書に明記されていても、実際の残業が30時間を超えた場合、<strong>超過分の残業代は別途請求できます</strong>。固定残業代は「上限額」ではなく「あらかじめ支払う一定額」です。給与明細で固定残業代の時間数と実際の残業時間を必ず照合しましょう。</p>
    </div>

    <div class="cta-block">
      <h3>自分の手取りを確認するなら</h3>
      <p>残業代が増えると手取りはどう変わる？給与手取り計算ツールでシミュレーションできます。</p>
      <a href="<?= htmlspecialchars($calc_url) ?>" class="cta-btn">給与手取り計算ツール</a>
      <p class="cta-sub">東京・協会けんぽ前提。無料でご利用いただけます。</p>
    </div>

    <h2 id="faq">7. よくある質問（FAQ）</h2>

    <div class="faq-item">
      <div class="faq-q">残業代は翌月払いでもいい？</div>
      <div class="faq-a">労働基準法上、賃金は毎月1回以上・一定期日に支払う義務があります。翌月払いでも法定の支払日を定めている限り問題ありません。ただし<strong>1ヶ月を超える支払い遅延は違法</strong>です。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">アルバイトにも残業代は発生する？</div>
      <div class="faq-a">発生します。パート・アルバイトも労働基準法の適用を受けるため、<strong>雇用形態に関わらず</strong>1日8時間・週40時間を超えた労働には割増賃金の支払いが必要です。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">残業代の時効は？</div>
      <div class="faq-a">2020年4月1日以降に発生した賃金請求権の時効は<strong>3年</strong>です（それ以前は2年）。過去3年以内に未払い残業代がある場合は労働基準監督署への相談や法的手段が有効です。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">会社から「固定残業代に含まれる」と言われた</div>
      <div class="faq-a">固定残業代として認められるには、<strong>何時間分の残業代としていくら支払うか明示</strong>されている必要があります。時間数・金額が明示されていない場合は無効の可能性があります。また明示されていても超過分は必ず請求できます。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">管理職なのに残業代がもらえないのは正しい？</div>
      <div class="faq-a">「名ばかり管理職」は違法です。管理監督者の除外規定が適用されるには、<strong>経営への実質的な参画・労働時間の自由裁量・相応の待遇</strong>がすべて伴っていることが必要です。役職名だけで残業代をカットするのは認められません。</div>
    </div>

    <!-- 広告 -->
    <div class="ad-area">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-3745259041113437"
           data-ad-slot="auto"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
      <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>

    <div class="related-articles">
      <h2>関連記事</h2>
      <div class="related-grid">
        <a href="./kyuyo-meisai-mikata.php" class="related-card">
          <div class="related-card__label">給与・基礎知識</div>
          <div class="related-card__title">給与明細の見方とは？各項目の意味・控除の仕組みをわかりやすく解説【2026年版】</div>
        </a>
        <a href="./shakai-hoken-keisan.php" class="related-card">
          <div class="related-card__label">社会保険</div>
          <div class="related-card__title">社会保険料の計算方法とは？健康保険・厚生年金・雇用保険の仕組みをわかりやすく解説【2026年版】</div>
        </a>
        <a href="./jumin-zei.php" class="related-card">
          <div class="related-card__label">税金・住民税</div>
          <div class="related-card__title">住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説【2026年版】</div>
        </a>
        <a href="./nenshu-no-kabe.php" class="related-card">
          <div class="related-card__label">扶養・年収</div>
          <div class="related-card__title">年収の壁とは？103万・130万・150万円の壁をわかりやすく解説【2026年最新】</div>
        </a>
      </div>
    </div>

  </article>
</main>

<footer>
  <p><a href="https://calc.pfp.tokyo/">給与手取り計算トップ</a> | <a href="https://calc.pfp.tokyo/articles/">解説記事一覧</a> | <a href="https://pfp.tokyo">株式会社PFP</a></p>
  <p style="margin-top:8px;">© 2026 pfp.tokyo — 掲載内容は概算・解説目的です。正確な金額は給与明細または担当部署にご確認ください。</p>
</footer>

</body>
</html>
