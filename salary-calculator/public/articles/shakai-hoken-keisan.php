<?php
$page_title = "厚生年金18.3%・健康保険料【2026年】月収別の天引き額を今すぐ確認";
$page_description = "2026年の厚生年金保険料率は18.3%（本人負担9.15%）。あなたの月収から実際にいくら天引きされる？月収20〜60万円の社会保険料シミュレーション表で今すぐ確認。無料の手取り計算ツール付き。";
$canonical_url = "https://calc.pfp.tokyo/articles/shakai-hoken-keisan.php";
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
    "datePublished": "2026-05-02",
    "dateModified": "2026-05-02",
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
  社会保険料の計算方法
</div>

<main>
<article>

  <header class="article-header">
    <span class="article-label">社会保険・給与解説</span>
    <h1>社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</h1>
    <p class="article-meta">公開日：2026年5月2日　情報源：厚生労働省・協会けんぽ</p>
  </header>

  <div class="highlight-box">
    <div class="box-title">📌 この記事のポイント</div>
    <ul style="padding-left: 18px; margin: 0;">
      <li>社会保険料は<strong>標準報酬月額</strong>をもとに計算される</li>
      <li>健康保険（東京）の料率は<strong>9.98%</strong>（労使折半で従業員4.99%）</li>
      <li>厚生年金は<strong>18.3%</strong>（労使折半で従業員9.15%）</li>
      <li>2026年4月から<strong>子ども・子育て支援金</strong>が上乗せ徴収</li>
    </ul>
  </div>

  <nav class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#what">社会保険料とは</a></li>
      <li><a href="#hyojun">標準報酬月額の仕組み</a></li>
      <li><a href="#kenko">健康保険料の計算方法</a></li>
      <li><a href="#nenkin">厚生年金保険料の計算方法</a></li>
      <li><a href="#kaigo">介護保険料（40歳以上）</a></li>
      <li><a href="#shienkin">子ども・子育て支援金（2026年〜）</a></li>
      <li><a href="#simulation">年収別シミュレーション表</a></li>
      <li><a href="#faq">よくある疑問（FAQ）</a></li>
    </ol>
  </nav>

  <!-- ① 社会保険料とは -->
  <section id="what">
    <h2>① 社会保険料とは</h2>
    <p>
      会社員（正社員・一定条件のパート・派遣社員など）が加入する社会保険には、
      <strong>健康保険・厚生年金保険・介護保険・雇用保険・労災保険</strong>の5種類があります。
      このうち給与から天引きされる主な保険料は以下の4種類です。
    </p>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>保険の種類</th><th>対象者</th><th>2026年度の料率（東京）</th><th>労使折半</th></tr>
        </thead>
        <tbody>
          <tr><td>健康保険料</td><td>75歳未満の会社員</td><td>9.98%</td><td>あり（従業員4.99%）</td></tr>
          <tr><td>介護保険料</td><td>40〜64歳</td><td>1.60%</td><td>あり（従業員0.80%）</td></tr>
          <tr><td>子ども・子育て支援金</td><td>健康保険加入者全員</td><td>0.23%</td><td>あり（従業員0.115%）</td></tr>
          <tr><td>厚生年金保険料</td><td>70歳未満の会社員</td><td>18.30%</td><td>あり（従業員9.15%）</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">※ 健康保険料率は協会けんぽ東京支部（令和7年3月改定）。介護保険料率は全国一律。</p>
  </section>

  <!-- ② 標準報酬月額 -->
  <section id="hyojun">
    <h2>② 標準報酬月額の仕組み</h2>
    <p>
      社会保険料は実際の月給をそのまま使うのではなく、
      <strong>標準報酬月額</strong>という段階的な等級に当てはめて計算します。
      これにより、月給が少し増えても保険料が急変しないよう平準化されています。
    </p>

    <h3>何が「報酬」に含まれるか</h3>
    <p>
      基本給のほか、通勤手当・住宅手当・残業手当・家族手当なども原則として報酬に含まれます。
      ただし、<strong>月額10万円以内の通勤手当</strong>は非課税ですが社会保険料の算定には含まれます。
    </p>

    <h3>標準報酬月額の等級（主な範囲）</h3>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>等級</th><th>月給の目安（以上〜未満）</th><th>標準報酬月額</th></tr>
        </thead>
        <tbody>
          <tr><td>16級</td><td>195,000円〜210,000円</td><td>200,000円</td></tr>
          <tr><td>18級</td><td>225,000円〜245,000円</td><td>230,000円</td></tr>
          <tr><td>20級</td><td>270,000円〜290,000円</td><td>280,000円</td></tr>
          <tr><td>22級</td><td>310,000円〜330,000円</td><td>320,000円</td></tr>
          <tr><td>24級</td><td>355,000円〜395,000円</td><td>380,000円</td></tr>
          <tr><td>27級</td><td>455,000円〜545,000円</td><td>500,000円</td></tr>
          <tr><td>30級（上限）</td><td>605,000円以上</td><td>650,000円</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">※ 全50等級（健康保険）のうち主要等級を抜粋。厚生年金は32等級・上限65万円。</p>

    <div class="highlight-box blue">
      <div class="box-title">💡 いつの給与で決まる？</div>
      標準報酬月額は毎年<strong>4〜6月の報酬の平均</strong>をもとに9月に改定（定時決定）されます。
      大幅な昇給・降給があった場合は随時改定（月額変更届）の対象になる場合があります。
    </div>
  </section>

  <!-- ③ 健康保険料 -->
  <section id="kenko">
    <h2>③ 健康保険料の計算方法</h2>
    <p>
      協会けんぽ東京支部の2025年3月改定後の料率は<strong>9.98%</strong>（介護保険第2号被保険者に該当しない場合）。
      会社と従業員が折半するため、<strong>従業員の実質負担は4.99%</strong>です。
    </p>

    <div class="formula-box">
      健康保険料（従業員負担）= 標準報酬月額 × 4.99%<br>
      <span class="comment">例：標準報酬月額30万円 → 300,000 × 0.0499 = 14,970円</span>
    </div>

    <div class="highlight-box">
      <div class="box-title">⚠️ 被扶養者がいても保険料は変わらない</div>
      健康保険は家族（配偶者・子ども）を扶養に入れても、従業員本人の保険料は変わりません。
      扶養家族の保険料は追加負担なしでカバーされます。
    </div>
  </section>

  <!-- ④ 厚生年金 -->
  <section id="nenkin">
    <h2>④ 厚生年金保険料の計算方法</h2>
    <p>
      厚生年金の保険料率は全国一律<strong>18.3%</strong>（2017年9月以降固定）。
      労使折半のため従業員負担は<strong>9.15%</strong>です。
      なお、標準報酬月額の<strong>上限は65万円</strong>（32等級）です。
    </p>

    <div class="formula-box">
      厚生年金保険料（従業員負担）= 標準報酬月額 × 9.15%<br>
      <span class="comment">例：標準報酬月額30万円 → 300,000 × 0.0915 = 27,450円</span><br>
      <span class="comment">例：標準報酬月額70万円（上限65万円適用）→ 650,000 × 0.0915 = 59,475円</span>
    </div>

    <p>
      厚生年金は老齢・障害・遺族の3種類の年金給付につながります。
      納付額が多いほど将来の受給額（老齢厚生年金）も増えます。
    </p>
  </section>

  <!-- ⑤ 介護保険料 -->
  <section id="kaigo">
    <h2>⑤ 介護保険料（40歳以上）</h2>
    <p>
      介護保険の第2号被保険者（40〜64歳）は健康保険料と合算して徴収されます。
      料率は全国一律<strong>1.60%</strong>（2025年3月改定）、従業員負担は<strong>0.80%</strong>です。
    </p>

    <div class="formula-box">
      介護保険料（従業員負担）= 標準報酬月額 × 0.80%<br>
      <span class="comment">例：標準報酬月額30万円 → 300,000 × 0.008 = 2,400円</span>
    </div>

    <div class="highlight-box blue">
      <div class="box-title">📅 徴収される年齢</div>
      介護保険料は<strong>40歳の誕生月から</strong>天引きが始まり、<strong>65歳の誕生月の前月まで</strong>続きます。
      65歳以降は第1号被保険者として市区町村が徴収します。
    </div>
  </section>

  <!-- ⑥ 子ども・子育て支援金 -->
  <section id="shienkin">
    <h2>⑥ 子ども・子育て支援金（2026年4月〜）</h2>
    <p>
      2026年4月から健康保険料に上乗せされる新たな控除です。
      料率は<strong>0.23%</strong>（労使折半で従業員負担<strong>0.115%</strong>）。
    </p>

    <div class="formula-box">
      子ども・子育て支援金（従業員負担）= 標準報酬月額 × 0.115%<br>
      <span class="comment">例：標準報酬月額30万円 → 300,000 × 0.00115 = 345円</span>
    </div>

    <p>
      子どもの有無・既婚・未婚を問わず全員が対象です。
      詳しい仕組みや使われ方については
      <a href="./kodomo-shienkin.php" style="color: #1a6fb3;">子ども・子育て支援金の解説記事</a>をご覧ください。
    </p>
  </section>

  <!-- CTA（中間） -->
  <div class="cta-block">
    <h3>実際の手取りをすぐ確認したい方へ</h3>
    <p>月給・年齢・扶養人数を入れるだけで、社会保険料・所得税込みの手取りを自動計算します。</p>
    <a class="cta-btn" href="<?= htmlspecialchars($calc_url) ?>">→ 無料で手取りを計算する</a>
    <p class="cta-sub">登録不要・東京・協会けんぽ基準</p>
  </div>

  <!-- ⑦ シミュレーション -->
  <section id="simulation">
    <h2>⑦ 年収別シミュレーション表（2026年・東京・会社員）</h2>
    <p>以下は主な年収帯での社会保険料の月額目安です（従業員負担分のみ・子ども・子育て支援金含む）。</p>
    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>月給の目安</th>
            <th>標準報酬月額</th>
            <th>健康保険料</th>
            <th>厚生年金</th>
            <th>介護保険料<br><small>（40歳以上）</small></th>
            <th>支援金</th>
            <th>合計（40歳未満）</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>20万円</td><td>20万円</td><td>9,980円</td><td>18,300円</td><td>1,600円</td><td>230円</td><td>28,510円</td></tr>
          <tr><td>25万円</td><td>24万円</td><td>11,976円</td><td>21,960円</td><td>1,920円</td><td>276円</td><td>34,212円</td></tr>
          <tr><td>30万円</td><td>30万円</td><td>14,970円</td><td>27,450円</td><td>2,400円</td><td>345円</td><td>42,765円</td></tr>
          <tr><td>35万円</td><td>34万円</td><td>16,966円</td><td>31,110円</td><td>2,720円</td><td>391円</td><td>48,467円</td></tr>
          <tr><td>40万円</td><td>41万円</td><td>20,459円</td><td>37,515円</td><td>3,280円</td><td>472円</td><td>58,446円</td></tr>
          <tr><td>50万円</td><td>50万円</td><td>24,950円</td><td>45,750円</td><td>4,000円</td><td>575円</td><td>71,275円</td></tr>
          <tr><td>60万円以上</td><td>65万円（上限）</td><td>32,435円</td><td>59,475円</td><td>5,200円</td><td>748円</td><td>92,658円</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">※ 端数処理の関係で実際の給与明細と若干異なる場合があります。40歳未満は介護保険料なし。</p>
  </section>

  <!-- ⑧ FAQ -->
  <section id="faq">
    <h2>⑧ よくある疑問（FAQ）</h2>

    <div class="faq-item">
      <div class="faq-q">社会保険料はいつから天引きされますか？</div>
      <div class="faq-a">入社した月（または社会保険加入月）から保険料の発生が始まります。給与からの天引きは翌月払いが一般的なため、入社翌月の給与から引かれることが多いです。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">残業代が多い月は保険料が増えますか？</div>
      <div class="faq-a">標準報酬月額は毎年4〜6月の平均報酬で決まるため、4〜6月以外に残業が多くても即座に保険料は変わりません。ただし4〜6月の残業が多い場合は、9月以降の保険料が上がる可能性があります。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">転職した場合、保険料はどうなりますか？</div>
      <div class="faq-a">転職先で新たに社会保険に加入し直します。前職の標準報酬月額は引き継がれません。入社後初めての定時決定（9月）または随時改定まで、入社時の報酬をもとに等級が設定されます。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">賞与（ボーナス）からも社会保険料は引かれますか？</div>
      <div class="faq-a">はい。賞与からも同じ料率で社会保険料が徴収されます（標準賞与額をもとに計算）。健康保険の標準賞与額の上限は年間573万円、厚生年金は1回150万円です。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">産休・育休中は保険料が免除されますか？</div>
      <div class="faq-a">産前産後休業（産休）および育児休業（育休）中は、申請により社会保険料（健康保険・厚生年金）が従業員・会社の両方とも免除されます。ただし雇用保険料は免除されません。</div>
    </div>
  </section>

  <!-- 関連記事 -->
  <div class="related-articles">
    <h2>関連記事</h2>
    <a href="./kodomo-shienkin.php" class="related-card">
      <p class="related-card__title">子ども・子育て支援金とは？2026年4月から始まる新たな給与天引きをわかりやすく解説</p>
      <p class="related-card__desc">月額負担額の目安・年収別シミュレーション・使途まで詳しく解説</p>
    </a>
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

<footer>
  <p>
    <a href="<?= htmlspecialchars($calc_url) ?>">給与手取り計算ツール</a> |
    <a href="<?= htmlspecialchars($calc_url) ?>">プライバシーポリシー</a>
  </p>
  <p style="margin-top: 8px;">※ 本記事の情報は厚生労働省・協会けんぽの公表情報に基づきますが、制度変更が生じる場合があります。正確な情報は公式機関にご確認ください。</p>
  <p style="margin-top: 8px;">&copy; 2026 pfp.tokyo</p>
</footer>

</body>
</html>
