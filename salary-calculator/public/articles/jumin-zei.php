<?php
$page_title = "住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説【2026年版】";
$page_description = "住民税の計算方法を徹底解説。所得割・均等割の仕組みから、年収別の住民税目安表、6月に増える理由、転職・退職時の注意点まで、給与天引きの仕組みをわかりやすく紹介します。";
$canonical_url = "https://calc.pfp.tokyo/articles/jumin-zei.php";
$calc_url = "https://calc.pfp.tokyo/index.php";
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
    "datePublished": "2026-05-12",
    "dateModified": "2026-05-12",
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
    .highlight-box .box-title { font-weight: 700; font-size: 15px; margin-bottom: 8px; color: #7b5800; }
    .highlight-box.blue .box-title { color: #1a6fb3; }

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

    .step-flow {
      counter-reset: step;
      margin: 20px 0;
    }
    .step-item {
      display: flex;
      gap: 16px;
      align-items: flex-start;
      margin-bottom: 14px;
    }
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
      color: #1a1a2e;
      transition: background 0.15s;
    }
    .related-card:hover { background: #e8f0fb; }
    .related-card__title { font-size: 14px; font-weight: 700; margin-bottom: 4px; }
    .related-card__desc { font-size: 13px; color: #666; margin: 0; }

    footer { background: #1a1a2e; color: #aaa; text-align: center; padding: 24px 20px; font-size: 13px; }
    footer a { color: #7ab3e0; text-decoration: none; }

    @media (max-width: 600px) {
      article { padding: 24px 18px; }
      h1 { font-size: 20px; }
      h2 { font-size: 18px; }
      .cta-block { padding: 24px 18px; }
      .cta-btn { font-size: 15px; padding: 12px 24px; }
    }
  </style>
</head>
<body>

<header>
  <div class="header-inner">
    <a class="site-logo" href="<?= htmlspecialchars($calc_url) ?>">給与手取り計算ツール</a>
    <a class="header-cta" href="<?= htmlspecialchars($calc_url) ?>">手取りを計算する →</a>
  </div>
</header>

<div class="breadcrumb">
  <a href="<?= htmlspecialchars($calc_url) ?>">トップ</a>
  <span>›</span>
  住民税の計算方法
</div>

<main>
<article>

  <header class="article-header">
    <span class="article-label">住民税・給与控除解説</span>
    <h1>住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説【2026年版】</h1>
    <p class="article-meta">公開日：2026年5月12日　情報源：総務省・各都道府県・市区町村</p>
  </header>

  <div class="highlight-box">
    <div class="box-title">📌 この記事のポイント</div>
    <ul style="padding-left: 18px; margin: 0;">
      <li>住民税は<strong>都道府県民税＋市区町村民税</strong>の合計で、税率は一律<strong>10%</strong></li>
      <li><strong>前年の所得</strong>をもとに計算されるため、今年収入が変わっても来年反映される</li>
      <li>6月に突然増える理由は<strong>定時改定（前年所得による毎年の再計算）</strong>のため</li>
      <li>新入社員の1年目（入社後最初の6月まで）は住民税の天引きがない</li>
    </ul>
  </div>

  <nav class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#what">住民税とは</a></li>
      <li><a href="#flow">住民税の計算の流れ</a></li>
      <li><a href="#shotoku-wari">所得割の計算（税率一律10%）</a></li>
      <li><a href="#kinto-wari">均等割（5,000円/年が基本）</a></li>
      <li><a href="#koujyo">主な所得控除一覧</a></li>
      <li><a href="#simulation">年収別 住民税の目安表</a></li>
      <li><a href="#june">6月に上がる理由</a></li>
      <li><a href="#tenshoku">転職・退職時の注意点</a></li>
      <li><a href="#faq">よくある疑問（FAQ）</a></li>
    </ol>
  </nav>

  <!-- AdSense -->
  <ins class="adsbygoogle"
       style="display:block; text-align:center; margin: 24px 0;"
       data-ad-layout="in-article"
       data-ad-format="fluid"
       data-ad-client="ca-pub-3745259041113437"
       data-ad-slot=""></ins>
  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>

  <!-- ① 住民税とは -->
  <section id="what">
    <h2>① 住民税とは（都道府県民税＋市区町村民税）</h2>
    <p>
      住民税は、1月1日現在の住所地に納める地方税で、
      <strong>都道府県民税</strong>と<strong>市区町村民税</strong>（特別区民税）の2種類から構成されます。
      給与所得者の場合は会社が給与から天引きして市区町村へ納付する
      <strong>特別徴収</strong>の方式が原則です。
    </p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>種類</th><th>納付先</th><th>所得割の税率</th><th>均等割</th></tr>
        </thead>
        <tbody>
          <tr><td>都道府県民税</td><td>都道府県</td><td>4%</td><td>1,500円/年</td></tr>
          <tr><td>市区町村民税</td><td>市区町村（特別区）</td><td>6%</td><td>3,500円/年</td></tr>
          <tr><td><strong>合計</strong></td><td></td><td><strong>10%</strong></td><td><strong>5,000円/年</strong></td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">
      ※ 均等割は地域によって異なる場合があります（森林環境税など上乗せがある自治体も）。
      2024年度から国の森林環境税1,000円/年が均等割に上乗せされ、実質6,000円/年になっている場合があります。
    </p>
  </section>

  <!-- ② 計算の流れ -->
  <section id="flow">
    <h2>② 住民税の計算の流れ</h2>
    <p>住民税は以下のステップで計算されます。すべて<strong>前年の所得</strong>をもとに計算される点が重要です。</p>

    <div class="step-flow">
      <div class="step-item">
        <div class="step-num">1</div>
        <div class="step-content">
          <strong>前年の総収入を確認する</strong>
          給与収入・事業収入・不動産収入など、すべての収入を合計します。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">2</div>
        <div class="step-content">
          <strong>給与所得を求める（給与収入 − 給与所得控除）</strong>
          給与所得控除は収入に応じた定額控除です。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">3</div>
        <div class="step-content">
          <strong>所得控除を差し引く（基礎控除・社保控除など）</strong>
          各種控除を差し引いて<strong>課税所得</strong>を算出します。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">4</div>
        <div class="step-content">
          <strong>所得割を計算（課税所得 × 10%）</strong>
          都道府県民税4%＋市区町村民税6%で合計10%を掛けます。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">5</div>
        <div class="step-content">
          <strong>税額控除を差し引く</strong>
          調整控除・配当控除・住宅ローン控除などを差し引きます。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">6</div>
        <div class="step-content">
          <strong>均等割を加算</strong>
          所得割に均等割（約5,000〜6,000円/年）を足した合計が年間住民税額です。
        </div>
      </div>
    </div>
  </section>

  <!-- ③ 所得割 -->
  <section id="shotoku-wari">
    <h2>③ 所得割の計算（税率一律10%）</h2>
    <p>
      所得割の税率は、所得の多さに関わらず<strong>一律10%</strong>です（所得税のような累進課税ではありません）。
    </p>

    <div class="formula-box">
      所得割 = 課税所得 × 10%<br>
      <span class="comment">課税所得 = 給与所得 − 各種所得控除</span><br>
      <span class="comment">例：課税所得200万円 → 2,000,000 × 10% = 200,000円（年間）</span>
    </div>

    <p>
      給与所得は「給与収入 − 給与所得控除」で計算します。
      給与所得控除は収入が高いほど控除額が大きくなりますが、
      所得税とは控除額が若干異なります（住民税の給与所得控除は所得税より少ない設定）。
    </p>
  </section>

  <!-- ④ 均等割 -->
  <section id="kinto-wari">
    <h2>④ 均等割（5,000円/年が基本）</h2>
    <p>
      均等割は所得にかかわらず一定額を負担する税です。
      標準は<strong>都道府県民税1,500円＋市区町村民税3,500円＝年5,000円</strong>です。
    </p>

    <div class="highlight-box">
      <div class="box-title">⚠️ 2024年度〜 森林環境税の上乗せ</div>
      2024年度から国税として<strong>森林環境税（1,000円/年）</strong>が創設されました。
      住民税と合わせて徴収されるため、実質的な均等割負担は約6,000円/年になっています。
    </div>

    <p>
      均等割は非課税限度額（所得が一定以下の場合）を下回ると課税されません。
      非課税となるかは市区町村ごとに定められた基準で判定されます。
    </p>
  </section>

  <!-- ⑤ 所得控除一覧 -->
  <section id="koujyo">
    <h2>⑤ 主な所得控除一覧</h2>
    <p>
      課税所得を計算する際に差し引ける「所得控除」には以下のものがあります。
      住民税の控除額は所得税より低い場合があります。
    </p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>控除の種類</th><th>住民税での控除額（目安）</th><th>備考</th></tr>
        </thead>
        <tbody>
          <tr><td>給与所得控除</td><td>収入に応じて55万〜195万円</td><td>給与収入者は自動適用</td></tr>
          <tr><td>基礎控除</td><td>43万円</td><td>所得税は48万円（住民税は少ない）</td></tr>
          <tr><td>社会保険料控除</td><td>支払額全額</td><td>厚生年金・健康保険・雇用保険など</td></tr>
          <tr><td>配偶者控除</td><td>33万円（配偶者の所得95万円以下）</td><td>所得税は38万円</td></tr>
          <tr><td>扶養控除（一般）</td><td>33万円/人</td><td>16歳以上の扶養親族</td></tr>
          <tr><td>扶養控除（特定）</td><td>45万円/人</td><td>19〜22歳の特定扶養親族</td></tr>
          <tr><td>生命保険料控除</td><td>最大7万円</td><td>所得税は最大12万円</td></tr>
          <tr><td>地震保険料控除</td><td>最大2万5千円</td><td>所得税は最大5万円</td></tr>
          <tr><td>医療費控除</td><td>実費超過分（10万円または所得の5%超）</td><td>確定申告で申請</td></tr>
          <tr><td>ひとり親控除</td><td>30万円</td><td>所得税は35万円</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">※ 所得税と比べ控除額が低い項目があります。控除の詳細は各市区町村の窓口または確定申告書でご確認ください。</p>
  </section>

  <!-- CTA（中間） -->
  <div class="cta-block">
    <h3>住民税込みの手取りをすぐ確認したい方へ</h3>
    <p>月給・年齢・扶養人数・住民税額を入れるだけで、手取りを自動計算します。</p>
    <a class="cta-btn" href="<?= htmlspecialchars($calc_url) ?>">→ 無料で手取りを計算する</a>
    <p class="cta-sub">登録不要・東京・協会けんぽ基準</p>
  </div>

  <!-- ⑥ 年収別シミュレーション -->
  <section id="simulation">
    <h2>⑥ 年収別 住民税の目安表（2026年・単身・東京）</h2>
    <p>
      以下は会社員（単身・扶養なし・東京）を想定した年間住民税の目安です。
      社会保険料控除や基礎控除を差し引いた課税所得をもとに試算しています。
    </p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>年収</th>
            <th>給与所得</th>
            <th>課税所得（目安）</th>
            <th>所得割（年）</th>
            <th>均等割</th>
            <th>年間住民税（目安）</th>
            <th>月額換算</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>300万円</td><td>202万円</td><td>約82万円</td><td>約82,000円</td><td>6,000円</td><td>約88,000円</td><td>約7,300円</td></tr>
          <tr><td>400万円</td><td>276万円</td><td>約142万円</td><td>約142,000円</td><td>6,000円</td><td>約148,000円</td><td>約12,300円</td></tr>
          <tr><td>500万円</td><td>356万円</td><td>約200万円</td><td>約200,000円</td><td>6,000円</td><td>約206,000円</td><td>約17,200円</td></tr>
          <tr><td>600万円</td><td>436万円</td><td>約265万円</td><td>約265,000円</td><td>6,000円</td><td>約271,000円</td><td>約22,600円</td></tr>
          <tr><td>700万円</td><td>516万円</td><td>約330万円</td><td>約330,000円</td><td>6,000円</td><td>約336,000円</td><td>約28,000円</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">
      ※ 社会保険料控除・基礎控除のみ考慮した概算です。生命保険料控除・扶養控除等がある場合はさらに少なくなります。
      実際の金額は各自治体の税務課または確定申告書でご確認ください。
    </p>
  </section>

  <!-- ⑦ 6月に上がる理由 -->
  <section id="june">
    <h2>⑦ 6月に住民税が上がる理由（定時改定の仕組み）</h2>
    <p>
      「6月の給与から急に住民税が増えた」という疑問をよく耳にします。
      これは住民税の<strong>定時改定</strong>によるものです。
    </p>

    <div class="highlight-box blue">
      <div class="box-title">💡 住民税の天引きサイクル</div>
      <ul style="padding-left: 18px; margin: 0;">
        <li>毎年1〜3月：確定申告または年末調整の情報が市区町村に集約される</li>
        <li>5月ごろ：市区町村が前年の所得をもとに新しい税額を計算し、会社に通知</li>
        <li><strong>6月〜翌5月</strong>：新しい税額で12か月に分割して天引き開始</li>
      </ul>
    </div>

    <p>
      つまり、6月の給与から天引きされる住民税は「<strong>前年の所得</strong>」に基づいています。
      前年に昇給・副業収入増加・配偶者控除がなくなったなどがあると、
      6月から住民税が増えるのはそのためです。
    </p>
  </section>

  <!-- ⑧ 転職・退職時の注意点 -->
  <section id="tenshoku">
    <h2>⑧ 転職・退職時の注意点（普通徴収への切り替え）</h2>

    <h3>退職した場合</h3>
    <p>
      退職する場合、残りの住民税の扱いは退職月によって異なります。
    </p>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>退職月</th><th>残りの住民税の扱い</th></tr>
        </thead>
        <tbody>
          <tr><td>1〜5月退職</td><td>最後の給与または退職金から残額を一括徴収（本人が希望すれば分割も可）</td></tr>
          <tr><td>6〜12月退職</td><td>退職翌月以降は<strong>普通徴収</strong>に切り替わり、自分で4回に分けて納付</td></tr>
        </tbody>
      </table>
    </div>

    <h3>転職した場合</h3>
    <p>
      転職先に新しい会社が決まっている場合は、前の会社から転職先の会社に住民税の特別徴収が引き継がれます。
      転職先が決まっていない場合や空白期間がある場合は、一時的に普通徴収となり自分で納付します。
    </p>

    <div class="highlight-box">
      <div class="box-title">⚠️ 普通徴収への切り替え後の納付忘れに注意</div>
      普通徴収になると、6・8・10月・翌1月の年4回に分けて自分で納付書で支払います。
      払い忘れると延滞金が発生するため注意しましょう。
      コンビニ払い・口座振替・スマホ決済などで納付可能です。
    </div>
  </section>

  <!-- ⑨ FAQ -->
  <section id="faq">
    <h2>⑨ よくある疑問（FAQ）</h2>

    <div class="faq-item">
      <div class="faq-q">住民税が急に上がった理由は何ですか？</div>
      <div class="faq-a">
        主な原因として、以下が考えられます。
        (1) 前年に昇給・残業増加があった
        (2) 配偶者が働きはじめて配偶者控除が使えなくなった
        (3) 副業などで給与外の収入が発生した
        (4) ふるさと納税などの申告をしなかった
        (5) 各種控除（生命保険料控除など）が変わった
        心当たりがなければ、市区町村から届く「住民税の決定通知書」で明細を確認しましょう。
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-q">新入社員1年目は住民税がかからないって本当ですか？</div>
      <div class="faq-a">
        はい、原則として正しいです。住民税は前年の所得をもとに計算されるため、
        学生から初めて就職した方は前年収入がなく（またはアルバイトのみで非課税の場合）、
        入社後最初の6月まで住民税の天引きがありません。
        入社翌年の6月から住民税の天引きがスタートします。
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-q">副業があると住民税は増えますか？</div>
      <div class="faq-a">
        はい、増えます。副業で所得が発生すると、それも住民税の課税対象に加算されます。
        副業分は確定申告（または住民税申告）で申告する必要があります。
        また、副業分の住民税が会社に通知されると副業が発覚するリスクがあるため、
        住民税の納付方法を「普通徴収（自分で納付）」に選択することで、
        副業分を会社に知られにくくすることができます。
      </div>
    </div>
  </section>

  <!-- 関連記事 -->
  <div class="related-articles">
    <h2>関連記事</h2>
    <div class="related-grid">
      <a href="./nenmatsu-chosei.php" class="related-card">
        <p class="related-card__title">年末調整とは？確定申告との違い・手続き方法をわかりやすく解説</p>
        <p class="related-card__desc">住民税に影響する控除申告の手続き方法を詳しく解説</p>
      </a>
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <p class="related-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</p>
        <p class="related-card__desc">住民税控除の前提となる社会保険料控除の計算を理解しよう</p>
      </a>
      <a href="./nenshu-no-kabe.php" class="related-card">
        <p class="related-card__title">年収の壁とは？103万・106万・130万円の違いを解説</p>
        <p class="related-card__desc">住民税の非課税ラインとも深く関わる年収の壁を整理</p>
      </a>
    </div>
  </div>

</article>
</main>

<div style="background: #f0f4f8; padding: 40px 20px; text-align: center; margin-top: 0;">
  <div style="max-width: 600px; margin: 0 auto;">
    <p style="font-size: 15px; color: #555; margin-bottom: 6px;">計算式がわかったところで、実際に試してみましょう</p>
    <p style="font-size: 22px; font-weight: 700; color: #1a1a2e; margin-bottom: 20px;">給与手取り計算ツールで今すぐ確認</p>
    <a href="<?= htmlspecialchars($calc_url) ?>"
       style="display: inline-block; background: linear-gradient(135deg, #1a6fb3, #0d4e8a); color: #fff; font-size: 18px; font-weight: 700; padding: 16px 48px; border-radius: 32px; text-decoration: none; box-shadow: 0 4px 16px rgba(26,111,179,.35);">
      → 手取りを無料で計算する
    </a>
    <p style="font-size: 13px; color: #999; margin-top: 12px;">登録不要・無料・東京/協会けんぽ基準</p>
  </div>
</div>

<!-- AdSense -->
<div style="text-align: center; padding: 20px;">
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-3745259041113437"
       data-ad-slot=""
       data-ad-format="auto"
       data-full-width-responsive="true"></ins>
  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

<footer>
  <p>
    <a href="<?= htmlspecialchars($calc_url) ?>">給与手取り計算ツール</a> |
    <a href="<?= htmlspecialchars($calc_url) ?>">プライバシーポリシー</a>
  </p>
  <p style="margin-top: 8px;">※ 本記事の情報は総務省・各自治体の公表情報に基づきますが、制度変更が生じる場合があります。正確な情報は各市区町村の窓口にご確認ください。</p>
  <p style="margin-top: 8px;">&copy; 2026 pfp.tokyo</p>
</footer>

</body>
</html>
