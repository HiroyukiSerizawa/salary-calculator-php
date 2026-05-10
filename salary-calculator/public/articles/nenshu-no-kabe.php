<?php
$page_title = "年収の壁とは？103万・130万・150万円の壁をわかりやすく解説【2026年最新】";
$page_description = "年収の壁（103万・106万・130万・150万円）の違いと、扶養から外れるボーダーラインを解説。手取りへの影響や損しない働き方のポイントも紹介します。";
$canonical_url = "https://pfp.tokyo/calc/articles/nenshu-no-kabe.php";
$calc_url = "https://pfp.tokyo/calc/index.php";
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
    "datePublished": "2026-05-10",
    "dateModified": "2026-05-10",
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
    header { background: #fff; border-bottom: 1px solid #e0e7ef; }
    .header-inner {
      max-width: 860px; margin: 0 auto; padding: 14px 20px;
      display: flex; align-items: center; justify-content: space-between;
    }
    .site-logo { font-size: 15px; font-weight: 700; text-decoration: none; color: #153987; }
    .header-cta {
      background: #fe8d27; color: #fff; padding: 8px 18px;
      border-radius: 20px; font-size: 13px; font-weight: 700;
      text-decoration: none; white-space: nowrap; transition: background 0.2s;
    }
    .header-cta:hover { background: #e07820; }
    .breadcrumb { max-width: 860px; margin: 0 auto; padding: 10px 20px; font-size: 13px; color: #888; }
    .breadcrumb a { color: #1a6fb3; text-decoration: none; }
    .breadcrumb a:hover { text-decoration: underline; }
    .breadcrumb span { margin: 0 6px; }
    main { max-width: 860px; margin: 0 auto; padding: 0 20px 60px; }
    article {
      background: #fff; border-radius: 10px; padding: 36px 40px;
      box-shadow: 0 2px 12px rgba(0,0,0,.06); margin-top: 16px;
    }
    .article-header { margin-bottom: 32px; }
    .article-label {
      display: inline-block; background: #e8f0fb; color: #1a6fb3;
      font-size: 12px; font-weight: 700; padding: 3px 10px;
      border-radius: 4px; margin-bottom: 12px;
    }
    h1 { font-size: 26px; line-height: 1.5; color: #1a1a2e; margin-bottom: 14px; }
    .article-meta { font-size: 13px; color: #888; }
    .toc {
      background: #f0f4f8; border-left: 4px solid #1a6fb3;
      border-radius: 0 8px 8px 0; padding: 20px 24px; margin: 28px 0;
    }
    .toc-title { font-size: 14px; font-weight: 700; color: #1a6fb3; margin-bottom: 10px; }
    .toc ol { padding-left: 20px; }
    .toc li { font-size: 14px; margin-bottom: 5px; }
    .toc a { color: #333; text-decoration: none; }
    .toc a:hover { color: #1a6fb3; text-decoration: underline; }
    h2 {
      font-size: 21px; color: #1a1a2e;
      border-bottom: 3px solid #1a6fb3; padding-bottom: 8px; margin: 40px 0 18px;
    }
    h3 {
      font-size: 18px; color: #1a3a5c; margin: 28px 0 12px;
      padding-left: 12px; border-left: 3px solid #4a9fd4;
    }
    p { margin-bottom: 16px; }
    .highlight-box {
      background: #fff8e1; border: 1px solid #ffc107;
      border-radius: 8px; padding: 18px 22px; margin: 20px 0;
    }
    .highlight-box.blue { background: #e8f0fb; border-color: #1a6fb3; }
    .highlight-box.green { background: #e8f5e9; border-color: #4caf50; }
    .highlight-box.red { background: #fce8e8; border-color: #e53935; }
    .highlight-box .box-title { font-weight: 700; font-size: 15px; margin-bottom: 8px; color: #7b5800; }
    .highlight-box.blue .box-title { color: #1a6fb3; }
    .highlight-box.green .box-title { color: #2e7d32; }
    .highlight-box.red .box-title { color: #c62828; }
    .table-wrap { overflow-x: auto; margin: 20px 0; }
    table { width: 100%; border-collapse: collapse; font-size: 15px; }
    thead th { background: #1a6fb3; color: #fff; padding: 12px 16px; text-align: left; }
    tbody td { padding: 11px 16px; border-bottom: 1px solid #e8edf2; }
    tbody tr:nth-child(even) td { background: #f5f8fc; }
    tbody tr:hover td { background: #eaf2ff; }
    .wall-cards {
      display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 14px; margin: 24px 0;
    }
    .wall-card {
      border-radius: 10px; padding: 18px 16px; text-align: center;
      border: 2px solid;
    }
    .wall-card--blue { background: #e8f0fb; border-color: #1a6fb3; }
    .wall-card--orange { background: #fff3e0; border-color: #fe8d27; }
    .wall-card--red { background: #fce8e8; border-color: #e53935; }
    .wall-card--purple { background: #f3e5f5; border-color: #8e24aa; }
    .wall-card__amount { font-size: 22px; font-weight: 800; color: #1a1a2e; margin-bottom: 6px; }
    .wall-card__name { font-size: 12px; font-weight: 700; color: #555; margin-bottom: 8px; }
    .wall-card__desc { font-size: 12px; color: #666; line-height: 1.6; }
    .cta-block {
      background: linear-gradient(135deg, #1a6fb3 0%, #0d4e8a 100%);
      border-radius: 12px; padding: 30px 32px; text-align: center; margin: 36px 0; color: #fff;
    }
    .cta-block h3 { font-size: 20px; color: #fff; border-left: none; padding-left: 0; margin: 0 0 10px; }
    .cta-block p { font-size: 15px; margin-bottom: 20px; opacity: 0.9; }
    .cta-btn {
      display: inline-block; background: #ff6b35; color: #fff; font-size: 17px; font-weight: 700;
      padding: 14px 36px; border-radius: 30px; text-decoration: none;
      box-shadow: 0 4px 14px rgba(255,107,53,.4); transition: transform 0.15s, box-shadow 0.15s;
    }
    .cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255,107,53,.5); }
    .cta-sub { font-size: 12px; opacity: 0.75; margin-top: 10px; margin-bottom: 0; }
    .faq-item { border: 1px solid #e0e7ef; border-radius: 8px; margin-bottom: 14px; overflow: hidden; }
    .faq-q {
      background: #f0f4f8; padding: 16px 20px; font-weight: 700; font-size: 15px;
      display: flex; align-items: flex-start; gap: 10px;
    }
    .faq-q::before {
      content: "Q"; background: #1a6fb3; color: #fff; border-radius: 4px;
      padding: 1px 7px; font-size: 13px; flex-shrink: 0;
    }
    .faq-a { padding: 16px 20px; font-size: 15px; display: flex; gap: 10px; }
    .faq-a::before {
      content: "A"; background: #ff6b35; color: #fff; border-radius: 4px;
      padding: 1px 7px; font-size: 13px; flex-shrink: 0;
    }
    .related-articles { margin-top: 40px; border-top: 2px solid #e0e7ef; padding-top: 28px; }
    .related-articles h2 { font-size: 18px; border-bottom: none; padding-bottom: 0; margin-top: 0; margin-bottom: 16px; }
    .related-grid { display: grid; gap: 12px; }
    .related-card {
      display: block; background: #f5f8fc; border: 1px solid #d0dcea;
      border-radius: 8px; padding: 16px 20px; text-decoration: none;
      color: #1a1a2e; transition: background 0.15s;
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
      .wall-cards { grid-template-columns: 1fr 1fr; }
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
  年収の壁とは
</div>

<main>
<article>

  <header class="article-header">
    <span class="article-label">社会保険・給与解説</span>
    <h1>年収の壁とは？<br>103万・130万・150万円の壁をわかりやすく解説【2026年最新】</h1>
    <p class="article-meta">公開日：2026年5月10日　情報源：国税庁・厚生労働省</p>
  </header>

  <div class="highlight-box">
    <div class="box-title">📌 この記事のポイント</div>
    <ul style="padding-left: 18px; margin: 0;">
      <li><strong>103万円の壁</strong>：所得税が発生し、配偶者の税負担が増える可能性</li>
      <li><strong>106万円の壁</strong>：大企業勤務の場合、社会保険に加入義務が発生</li>
      <li><strong>130万円の壁</strong>：原則、扶養から外れ社会保険料の自己負担が始まる</li>
      <li><strong>150万円の壁</strong>：配偶者特別控除が満額から減り始める境界線</li>
    </ul>
  </div>

  <nav class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#what">年収の壁とは</a></li>
      <li><a href="#103">103万円の壁（所得税・配偶者控除）</a></li>
      <li><a href="#106">106万円の壁（社会保険の加入）</a></li>
      <li><a href="#130">130万円の壁（扶養脱退・社会保険）</a></li>
      <li><a href="#150">150万円・201万円の壁（配偶者特別控除）</a></li>
      <li><a href="#simulation">年収別の手取りシミュレーション</a></li>
      <li><a href="#taisaku">損しない働き方のポイント</a></li>
      <li><a href="#faq">よくある質問（FAQ）</a></li>
    </ol>
  </nav>

  <!-- ① 年収の壁とは -->
  <section id="what">
    <h2>① 年収の壁とは</h2>
    <p>
      「年収の壁」とは、パートや副業などで収入を得る人が一定の年収を超えると、
      <strong>税金の負担が増えたり、社会保険料の支払い義務が発生したりする境界線</strong>のことです。
      主に配偶者の扶養に入っている人や、扶養控除を適用している子どもを持つ親にとって重要なラインです。
    </p>

    <div class="wall-cards">
      <div class="wall-card wall-card--blue">
        <div class="wall-card__amount">103万円</div>
        <div class="wall-card__name">所得税の壁</div>
        <div class="wall-card__desc">配偶者控除の適用外になる可能性</div>
      </div>
      <div class="wall-card wall-card--orange">
        <div class="wall-card__amount">106万円</div>
        <div class="wall-card__name">社会保険の壁①</div>
        <div class="wall-card__desc">大企業勤務で社保加入義務</div>
      </div>
      <div class="wall-card wall-card--red">
        <div class="wall-card__amount">130万円</div>
        <div class="wall-card__name">社会保険の壁②</div>
        <div class="wall-card__desc">扶養脱退・社保自己負担開始</div>
      </div>
      <div class="wall-card wall-card--purple">
        <div class="wall-card__amount">150万円</div>
        <div class="wall-card__name">配偶者特別控除の壁</div>
        <div class="wall-card__desc">控除額が段階的に減少開始</div>
      </div>
    </div>
  </section>

  <!-- ② 103万円の壁 -->
  <section id="103">
    <h2>② 103万円の壁（所得税・配偶者控除）</h2>
    <p>
      給与収入が<strong>103万円を超えると所得税が発生</strong>します。
      これは給与所得控除（55万円）＋基礎控除（48万円）＝103万円が非課税の上限だからです。
    </p>
    <p>
      また、配偶者（主に夫）の税金にも影響します。妻の年収が103万円以下の場合、
      夫は<strong>配偶者控除（38万円）</strong>を受けられますが、103万円を超えると適用外になります。
    </p>
    <div class="highlight-box blue">
      <div class="box-title">💡 実際の影響は？</div>
      本人の所得税は年収103万円を少し超えた程度では数千円程度。
      夫の配偶者控除がなくなると夫の所得税が年間数万円増える可能性があります。
      ただし103万円〜150万円の範囲は「配偶者特別控除」で段階的に控除されます。
    </div>
  </section>

  <!-- ③ 106万円の壁 -->
  <section id="106">
    <h2>③ 106万円の壁（社会保険の加入義務）</h2>
    <p>
      従業員数101人以上の企業でパートとして働く場合、以下の条件をすべて満たすと
      <strong>社会保険（健康保険・厚生年金）への加入が義務</strong>になります。
    </p>
    <ul style="padding-left: 20px; margin-bottom: 16px;">
      <li>週の所定労働時間が20時間以上</li>
      <li>月額賃金が8.8万円以上（年収換算で約106万円）</li>
      <li>2ヶ月を超える雇用見込みがある</li>
      <li>学生でない</li>
    </ul>
    <div class="highlight-box">
      <div class="box-title">⚠️ 2024年10月から対象が拡大</div>
      従来「従業員501人以上」だった基準が段階的に引き下げられ、
      2024年10月からは<strong>51人以上</strong>の企業が対象になりました。
      さらに拡大が検討されています。
    </div>
    <p>
      社会保険に加入すると手取りは減りますが、将来の厚生年金受給額が増える・
      傷病手当金や出産手当金が受け取れるなど、保障面のメリットもあります。
    </p>
  </section>

  <!-- ④ 130万円の壁 -->
  <section id="130">
    <h2>④ 130万円の壁（扶養脱退・社会保険）</h2>
    <p>
      年収が<strong>130万円以上</strong>になると、原則として配偶者の健康保険の扶養から外れます。
      自分で社会保険（または国民健康保険・国民年金）に加入しなければなりません。
    </p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>状況</th><th>加入先</th><th>月額保険料の目安</th></tr>
        </thead>
        <tbody>
          <tr><td>会社員（社会保険加入）</td><td>健康保険＋厚生年金</td><td>月給の約14〜15%（労使折半）</td></tr>
          <tr><td>フリーランス・国保</td><td>国民健康保険＋国民年金</td><td>収入・地域によって異なる</td></tr>
        </tbody>
      </table>
    </div>

    <div class="highlight-box red">
      <div class="box-title">🚨 130万円の壁は「手取りの崖」に注意</div>
      年収129万円（扶養内）と131万円（扶養外）では、
      社会保険料の自己負担が発生するため<strong>手取りが逆転する</strong>ケースがあります。
      収入を少し増やしたつもりが手取りが減る「働き損」になる可能性があります。
    </div>
  </section>

  <!-- ⑤ 150万・201万円の壁 -->
  <section id="150">
    <h2>⑤ 150万円・201万円の壁（配偶者特別控除）</h2>
    <p>
      年収103万円超〜201万円以下の範囲では「配偶者特別控除」が適用されます。
      ただし年収が<strong>150万円を超えると控除額が段階的に減少</strong>し始め、
      <strong>201万円を超えると控除がゼロ</strong>になります。
    </p>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>配偶者の年収</th><th>配偶者特別控除額（夫の所得900万円以下の場合）</th></tr>
        </thead>
        <tbody>
          <tr><td>103万円超〜150万円以下</td><td>38万円（配偶者控除と同額）</td></tr>
          <tr><td>150万円超〜155万円以下</td><td>36万円</td></tr>
          <tr><td>155万円超〜160万円以下</td><td>31万円</td></tr>
          <tr><td>160万円超〜166.8万円未満</td><td>26万円</td></tr>
          <tr><td>175万円超〜183万円未満</td><td>16万円</td></tr>
          <tr><td>190万円超〜197万円未満</td><td>6万円</td></tr>
          <tr><td>201万円以上</td><td>0円</td></tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- CTA（中間） -->
  <div class="cta-block">
    <h3>扶養内・扶養外の手取りをすぐ比較したい方へ</h3>
    <p>月給・年齢・扶養人数を入力するだけで、社会保険料・所得税込みの手取りを自動計算します。</p>
    <a class="cta-btn" href="<?= htmlspecialchars($calc_url) ?>">→ 無料で手取りを計算する</a>
    <p class="cta-sub">登録不要・東京・協会けんぽ基準</p>
  </div>

  <!-- ⑥ シミュレーション -->
  <section id="simulation">
    <h2>⑥ 年収別の手取りシミュレーション（パート・配偶者扶養の場合）</h2>
    <p>
      以下は、配偶者の扶養に入っているパート女性（東京・協会けんぽ加入の夫に扶養される場合）の
      年収別手取り目安です。
    </p>
    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>年収の目安</th>
            <th>所得税</th>
            <th>社会保険料</th>
            <th>手取りの目安</th>
            <th>備考</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>100万円</td><td>なし</td><td>なし（扶養内）</td><td>約100万円</td><td>扶養内・住民税も非課税</td></tr>
          <tr><td>103万円</td><td>約数百円</td><td>なし（扶養内）</td><td>約103万円</td><td>103万円の壁ライン</td></tr>
          <tr><td>106万円</td><td>約数千円</td><td>約13〜15万円（加入義務発生の場合）</td><td>約89〜91万円</td><td>106万円の壁に注意</td></tr>
          <tr><td>130万円</td><td>約1〜2万円</td><td>約18〜20万円（扶養脱退）</td><td>約108〜110万円</td><td>130万円の壁で手取りが逆転</td></tr>
          <tr><td>150万円</td><td>約3〜4万円</td><td>約21〜23万円</td><td>約123〜126万円</td><td>配偶者特別控除が減少開始</td></tr>
          <tr><td>180万円</td><td>約7〜8万円</td><td>約26〜28万円</td><td>約144〜147万円</td><td>このあたりで手取りが追いつく</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">※ 概算です。勤務先の規模・健保組合・住民税等によって異なります。</p>
  </section>

  <!-- ⑦ 対策 -->
  <section id="taisaku">
    <h2>⑦ 損しない働き方のポイント</h2>

    <h3>壁を超えるなら一気に超える</h3>
    <p>
      130万円や106万円の壁をわずかに超えた程度では、
      社会保険料の負担で手取りが逆転する「働き損」になります。
      壁を超えるなら<strong>年収160〜180万円以上</strong>を目指すと手取りが増える傾向があります。
    </p>

    <h3>勤務先の「社会保険料補助制度」を活用する</h3>
    <p>
      2023年10月から、壁を意識せず働けるよう政府が「<strong>年収の壁・支援強化パッケージ</strong>」を導入しました。
      勤務先が社会保険料の負担増を補助する制度を設けている場合、実質的な手取り減少を抑えられます。
    </p>

    <h3>配偶者の収入も合わせてシミュレーション</h3>
    <p>
      配偶者控除・配偶者特別控除は<strong>配偶者（夫）の収入</strong>によっても控除額が変わります。
      夫の年収が1,000万円を超える場合は配偶者特別控除が適用されません。
      世帯全体の手取りを最大化するには、夫婦の収入バランスを一緒にシミュレーションすることが重要です。
    </p>

    <div class="highlight-box blue">
      <div class="box-title">💡 まずは現在の手取りを確認しよう</div>
      月給・年齢・扶養人数を入力するだけで、社会保険料・所得税込みの手取りをすぐに確認できます。
      扶養人数を変えてシミュレーションすることで、扶養内外の手取り差も把握できます。
    </div>
  </section>

  <!-- ⑧ FAQ -->
  <section id="faq">
    <h2>⑧ よくある質問（FAQ）</h2>

    <div class="faq-item">
      <div class="faq-q">103万円の壁は2026年も変わらないですか？</div>
      <div class="faq-a">2025年の税制改正で基礎控除の引き上げ（48万円→58万円）が議論されており、「103万円の壁」が「123万円の壁」に変わる可能性があります。2026年時点では詳細が決定次第更新します。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">副業収入にも年収の壁は適用されますか？</div>
      <div class="faq-a">副業収入（給与以外）の場合は計算方法が異なります。給与収入と副業収入を合算して確定申告が必要になります。社会保険の扶養判定は「見込み収入」で行われるため、副業含めた総収入で130万円を超えると扶養から外れる可能性があります。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">年末に収入が壁を超えそうな場合はどうすればいいですか？</div>
      <div class="faq-a">年末に向けて勤務日数を調整し年収を壁以内に収める方法があります。ただし無理に収入を抑えるよりも、壁を一気に超えて年収を増やす方が世帯全体の手取りとしてプラスになる場合もあります。シミュレーションで比較することをお勧めします。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">子どもを扶養している場合、年収の壁はどう考えればいいですか？</div>
      <div class="faq-a">子どもを扶養している場合は配偶者控除ではなく「扶養控除」が適用されます。子どもの年収が103万円以下であれば親は扶養控除（38〜63万円）を受けられます。子どもがアルバイトをしている場合、103万円を超えると扶養控除が外れ親の税負担が増える点に注意が必要です。</div>
    </div>
  </section>

  <!-- 関連記事 -->
  <div class="related-articles">
    <h2>関連記事</h2>
    <div class="related-grid">
      <a href="./kodomo-shienkin.php" class="related-card">
        <p class="related-card__title">子ども・子育て支援金とは？2026年4月から始まる新たな給与天引きをわかりやすく解説</p>
        <p class="related-card__desc">月額負担額の目安・年収別シミュレーション・使途まで詳しく解説</p>
      </a>
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <p class="related-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</p>
        <p class="related-card__desc">標準報酬月額の仕組みから計算方法まで徹底解説</p>
      </a>
    </div>
  </div>

</article>
</main>

<div style="background: #f0f4f8; padding: 40px 20px; text-align: center;">
  <div style="max-width: 600px; margin: 0 auto;">
    <p style="font-size: 15px; color: #555; margin-bottom: 6px;">扶養内・外の手取りの差を今すぐ確認</p>
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
  <p style="margin-top: 8px;">※ 本記事の情報は国税庁・厚生労働省の公表情報に基づきますが、制度変更が生じる場合があります。正確な情報は公式機関にご確認ください。</p>
  <p style="margin-top: 8px;">&copy; 2026 pfp.tokyo</p>
</footer>

</body>
</html>
