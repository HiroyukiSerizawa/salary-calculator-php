<?php
$page_title = "ボーナス（賞与）の手取り計算方法【2026年最新】月給との違いを徹底解説";
$page_description = "ボーナス（賞与）の手取り計算方法を徹底解説。社会保険料・雇用保険・所得税の計算式と、賞与50万〜200万円の手取りシミュレーション表つき。月給との違いもわかりやすく解説します。";
$canonical_url = "https://calc.pfp.tokyo/articles/bonus-tearai.php";
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
  ボーナスの手取り計算方法
</div>

<main>
<article>

  <header class="article-header">
    <span class="article-label">賞与・ボーナス解説</span>
    <h1>ボーナス（賞与）の手取り計算方法【2026年最新】月給との違いを徹底解説</h1>
    <p class="article-meta">公開日：2026年5月12日　情報源：国税庁・厚生労働省・協会けんぽ</p>
  </header>

  <div class="highlight-box">
    <div class="box-title">📌 この記事のポイント</div>
    <ul style="padding-left: 18px; margin: 0;">
      <li>ボーナスの社会保険料は<strong>標準賞与額</strong>をもとに計算（上限：健康保険は年573万円、厚生年金は1回150万円）</li>
      <li>所得税は<strong>前月の月給をベースにした特例計算</strong>で算出される</li>
      <li>住民税は<strong>ボーナスから天引きされない</strong></li>
      <li>月給と異なり、<strong>標準報酬月額の等級には影響しない</strong></li>
    </ul>
  </div>

  <nav class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#what">ボーナスの手取りとは（月給との違い）</a></li>
      <li><a href="#shakai-hoken">社会保険料の計算（標準賞与額の仕組み）</a></li>
      <li><a href="#koyo-hoken">雇用保険料の計算</a></li>
      <li><a href="#shotoku-zei">所得税の計算（特例計算）</a></li>
      <li><a href="#jumin-zei">住民税はボーナスから引かれない</a></li>
      <li><a href="#simulation">手取りシミュレーション表</a></li>
      <li><a href="#hikaku">月給と賞与の控除の違いまとめ</a></li>
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

  <!-- ① ボーナスの手取りとは -->
  <section id="what">
    <h2>① ボーナスの手取りとは（月給との違い）</h2>
    <p>
      ボーナス（賞与）は月給とは別の給与ですが、社会保険料・雇用保険・所得税が控除されます。
      ただし、計算方法は月給と大きく異なります。最も重要な違いは<strong>住民税が天引きされない</strong>点と、
      <strong>所得税の計算が「前月給与ベースの特例方式」</strong>で行われる点です。
    </p>
    <p>
      また、月給の社会保険料計算で使う「標準報酬月額」の等級は、
      ボーナスの金額が変わっても<strong>直接影響を受けません</strong>。
      ボーナス独自の「標準賞与額」を使って保険料を計算します。
    </p>
    <div class="highlight-box blue">
      <div class="box-title">💡 月給との主な違い</div>
      <ul style="padding-left: 18px; margin: 0;">
        <li>社会保険料：月給は「標準報酬月額」、ボーナスは「標準賞与額」で計算</li>
        <li>所得税：月給は「月給×税率」、ボーナスは「前月の月給をベースにした特例計算」</li>
        <li>住民税：月給からは天引き、ボーナスからは<strong>天引きなし</strong></li>
      </ul>
    </div>
  </section>

  <!-- ② 社会保険料 -->
  <section id="shakai-hoken">
    <h2>② 社会保険料の計算（標準賞与額の仕組み・上限573万円）</h2>
    <p>
      ボーナスの社会保険料は、実際の賞与支給額（1,000円未満切り捨て）を
      <strong>標準賞与額</strong>として、月給と同じ料率を掛けて計算します。
    </p>

    <h3>標準賞与額の上限</h3>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>保険の種類</th><th>上限</th><th>備考</th></tr>
        </thead>
        <tbody>
          <tr><td>健康保険（協会けんぽ）</td><td>年間累計573万円</td><td>4月〜翌3月の合計</td></tr>
          <tr><td>厚生年金</td><td>1回あたり150万円</td><td>回数の上限なし</td></tr>
          <tr><td>介護保険（40歳以上）</td><td>健康保険と同じ</td><td>年間573万円</td></tr>
        </tbody>
      </table>
    </div>

    <h3>計算式（東京・協会けんぽ・2026年度）</h3>
    <div class="formula-box">
      健康保険料（従業員負担）= 標準賞与額 × 4.99%<br>
      厚生年金保険料（従業員負担）= 標準賞与額 × 9.15%<br>
      介護保険料（従業員負担・40歳以上）= 標準賞与額 × 0.80%<br>
      子ども・子育て支援金（従業員負担）= 標準賞与額 × 0.115%<br>
      <span class="comment">例：賞与100万円（40歳未満）→ 健保49,900 + 厚年91,500 + 支援金1,150 = 142,550円</span>
    </div>

    <div class="highlight-box">
      <div class="box-title">⚠️ 上限超過の注意点</div>
      健康保険は<strong>年間累計573万円</strong>を超えた賞与部分には保険料がかかりません。
      例えば夏冬合計で600万円のボーナスを受け取る場合、超過分の27万円分は非課税（保険料なし）となります。
    </div>
  </section>

  <!-- ③ 雇用保険料 -->
  <section id="koyo-hoken">
    <h2>③ 雇用保険料の計算（賞与額×0.6%）</h2>
    <p>
      雇用保険料は月給と同様に、賞与支給額に料率を掛けて計算します。
      2026年度の一般の事業における従業員負担分の料率は<strong>0.6%</strong>です。
    </p>

    <div class="formula-box">
      雇用保険料（従業員負担）= 賞与支給額 × 0.6%<br>
      <span class="comment">例：賞与100万円 → 1,000,000 × 0.006 = 6,000円</span>
    </div>

    <p>
      雇用保険料に上限はなく、賞与額に比例して増えます。
      また、社会保険料と異なり1,000円未満の切り捨て処理は行いません。
    </p>
  </section>

  <!-- ④ 所得税 -->
  <section id="shotoku-zei">
    <h2>④ 所得税の計算（賞与に対する特例計算）</h2>
    <p>
      ボーナスの所得税は、月給のような単純な税率表引きではなく、
      <strong>前月の月給（社保控除後）をベースにした「賞与に対する源泉徴収税額の特例計算」</strong>で求めます。
    </p>

    <h3>計算の流れ</h3>
    <ol style="padding-left: 20px; margin-bottom: 16px;">
      <li style="margin-bottom: 8px;">前月の給与から社会保険料を差し引いた金額（前月社保控除後の給与）を求める</li>
      <li style="margin-bottom: 8px;">扶養人数と前月社保控除後の給与をもとに、国税庁の「賞与に対する源泉徴収税額の算出率の表」から税率を調べる</li>
      <li style="margin-bottom: 8px;">賞与支給額から社会保険料・雇用保険料を差し引いた額に、上記の税率を掛ける</li>
    </ol>

    <h3>税率の目安（扶養0人の場合）</h3>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>前月の社保控除後の給与</th><th>税率（扶養0人）</th></tr>
        </thead>
        <tbody>
          <tr><td>〜88,000円未満</td><td>0%</td></tr>
          <tr><td>88,000円〜183,000円未満</td><td>2.042%</td></tr>
          <tr><td>183,000円〜250,000円未満</td><td>4.084%</td></tr>
          <tr><td>250,000円〜360,000円未満</td><td>6.126%</td></tr>
          <tr><td>360,000円〜500,000円未満</td><td>8.168%</td></tr>
          <tr><td>500,000円〜700,000円未満</td><td>10.21%</td></tr>
          <tr><td>700,000円〜1,000,000円未満</td><td>12.252%</td></tr>
          <tr><td>1,000,000円〜1,500,000円未満</td><td>16.336%</td></tr>
          <tr><td>1,500,000円〜</td><td>20.42%</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">※ 2026年度の税率表（国税庁「賞与に対する源泉徴収税額の算出率の表」より抜粋・簡略化）。税率には復興特別所得税2.1%が含まれます。</p>

    <div class="formula-box">
      所得税 = （賞与 − 賞与からの社保 − 雇用保険料） × 算出率表の税率<br>
      <span class="comment">例：賞与100万円、前月社保控除後給与28万円（扶養0人）→ 税率6.126%</span><br>
      <span class="comment">  （1,000,000 − 142,550 − 6,000）× 0.06126 ≒ 52,250円</span>
    </div>
  </section>

  <!-- ⑤ 住民税 -->
  <section id="jumin-zei">
    <h2>⑤ 住民税はボーナスから控除されない</h2>
    <p>
      住民税は月給からのみ特別徴収（天引き）されます。
      <strong>ボーナスからは住民税が引かれません。</strong>
      これが月給との大きな違いのひとつです。
    </p>
    <div class="highlight-box blue">
      <div class="box-title">💡 だからボーナスの控除率は相対的に低い</div>
      月給では住民税（おおむね月給の約1〜1.5%程度）も引かれますが、ボーナスには住民税控除がないため、
      同じ金額でも「手取り率」はボーナスのほうがやや高くなる傾向があります。
    </div>
  </section>

  <!-- CTA（中間） -->
  <div class="cta-block">
    <h3>月給の手取りも一緒に確認しませんか？</h3>
    <p>月給・年齢・扶養人数を入れるだけで、社会保険料・所得税込みの手取りを自動計算します。</p>
    <a class="cta-btn" href="<?= htmlspecialchars($calc_url) ?>">→ 無料で手取りを計算する</a>
    <p class="cta-sub">登録不要・東京・協会けんぽ基準</p>
  </div>

  <!-- ⑥ シミュレーション -->
  <section id="simulation">
    <h2>⑥ 手取りシミュレーション表</h2>
    <p>
      以下は賞与支給額別の手取り目安です（東京・協会けんぽ・40歳未満・前月社保控除後給与28万円前後を想定）。
    </p>
    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>賞与支給額</th>
            <th>社会保険料<br><small>（健保+厚年+支援金）</small></th>
            <th>雇用保険料</th>
            <th>所得税<br><small>（扶養0人）</small></th>
            <th>手取り<br><small>（扶養0人）</small></th>
            <th>手取り<br><small>（扶養1人）</small></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>50万円</td>
            <td>71,275円</td>
            <td>3,000円</td>
            <td>26,000円</td>
            <td>約399,700円</td>
            <td>約412,100円</td>
          </tr>
          <tr>
            <td>100万円</td>
            <td>142,550円</td>
            <td>6,000円</td>
            <td>52,250円</td>
            <td>約799,200円</td>
            <td>約823,600円</td>
          </tr>
          <tr>
            <td>150万円</td>
            <td>213,825円</td>
            <td>9,000円</td>
            <td>84,600円</td>
            <td>約1,192,575円</td>
            <td>約1,230,700円</td>
          </tr>
          <tr>
            <td>200万円</td>
            <td>285,100円</td>
            <td>12,000円</td>
            <td>123,200円</td>
            <td>約1,579,700円</td>
            <td>約1,630,400円</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">
      ※ 東京・協会けんぽ・40歳未満。所得税は前月社保控除後給与28万円前後を想定した概算値です。
      扶養1人の場合の所得税は税率が1段階下がる前提で算出。端数処理の関係で実際と異なる場合があります。
    </p>
  </section>

  <!-- ⑦ 月給と賞与の違いまとめ -->
  <section id="hikaku">
    <h2>⑦ 月給と賞与の控除の違いまとめ</h2>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>控除の種類</th><th>月給</th><th>ボーナス（賞与）</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>社会保険料の計算基準</td>
            <td>標準報酬月額（等級制）</td>
            <td>標準賞与額（実額、上限あり）</td>
          </tr>
          <tr>
            <td>健康保険料率（従業員）</td>
            <td>4.99%</td>
            <td>4.99%（同じ）</td>
          </tr>
          <tr>
            <td>厚生年金保険料率（従業員）</td>
            <td>9.15%</td>
            <td>9.15%（同じ）</td>
          </tr>
          <tr>
            <td>上限</td>
            <td>標準報酬月額65万円（上限）</td>
            <td>健保：年573万円 / 厚年：1回150万円</td>
          </tr>
          <tr>
            <td>雇用保険料率（従業員）</td>
            <td>0.6%</td>
            <td>0.6%（同じ）</td>
          </tr>
          <tr>
            <td>所得税の計算方法</td>
            <td>給与所得の源泉徴収税額表</td>
            <td>賞与に対する算出率表（前月給与ベース）</td>
          </tr>
          <tr>
            <td>住民税</td>
            <td>天引きあり（特別徴収）</td>
            <td><strong>天引きなし</strong></td>
          </tr>
          <tr>
            <td>標準報酬月額への影響</td>
            <td>あり（4〜6月の報酬で決定）</td>
            <td><strong>なし（直接影響しない）</strong></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- ⑧ FAQ -->
  <section id="faq">
    <h2>⑧ よくある疑問（FAQ）</h2>

    <div class="faq-item">
      <div class="faq-q">ボーナスの社会保険料の上限はいくらですか？</div>
      <div class="faq-a">
        健康保険は1年度（4月〜翌3月）の累計で<strong>573万円</strong>が上限です。
        厚生年金は1回の賞与につき<strong>150万円</strong>が上限です。
        上限を超えた部分には保険料がかかりません。
        例えば夏・冬合計で600万円の賞与を受け取る場合、
        健康保険の上限573万円を超えた27万円分には健康保険料が発生しません。
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-q">ボーナスをもらうと翌月から社会保険料が上がりますか？</div>
      <div class="faq-a">
        いいえ、ボーナスの金額は月給の社会保険料（標準報酬月額の等級）に直接影響しません。
        標準報酬月額は毎年4〜6月の「月給」の平均で決まります。
        ただし、賞与自体からはその都度「標準賞与額×保険料率」で保険料が差し引かれます。
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-q">賞与がゼロの月でも会社は届け出が必要ですか？</div>
      <div class="faq-a">
        はい。年金事務所（日本年金機構）は、賞与を支払った場合は支給後5日以内に
        「被保険者賞与支払届」を提出する義務があります。
        なお、賞与が<strong>ゼロ円</strong>の場合は届け出は不要です。
        賞与が年4回以上支給される場合は「標準賞与額」ではなく「標準報酬月額」に
        組み込まれる取り扱いになる点も覚えておきましょう。
      </div>
    </div>
  </section>

  <!-- 関連記事 -->
  <div class="related-articles">
    <h2>関連記事</h2>
    <div class="related-grid">
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <p class="related-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</p>
        <p class="related-card__desc">標準報酬月額の仕組みや年収別シミュレーション表つきで詳しく解説</p>
      </a>
      <a href="./kyuyo-meisai-mikata.php" class="related-card">
        <p class="related-card__title">給与明細の見方・読み方ガイド</p>
        <p class="related-card__desc">支給・控除・差引支給額の各項目を図解でわかりやすく説明</p>
      </a>
      <a href="./nenmatsu-chosei.php" class="related-card">
        <p class="related-card__title">年末調整とは？確定申告との違い・手続き方法をわかりやすく解説</p>
        <p class="related-card__desc">ボーナスで源泉徴収が多かった分も年末調整で精算されます</p>
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
  <p style="margin-top: 8px;">※ 本記事の情報は国税庁・厚生労働省・協会けんぽの公表情報に基づきますが、制度変更が生じる場合があります。正確な情報は公式機関にご確認ください。</p>
  <p style="margin-top: 8px;">&copy; 2026 pfp.tokyo</p>
</footer>

</body>
</html>
