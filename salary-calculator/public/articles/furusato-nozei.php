<?php
$page_title = "ふるさと納税とは？仕組み・控除上限額・手取りへの影響をわかりやすく解説【2026年版】";
$page_description = "ふるさと納税の仕組みを徹底解説。自己負担2,000円の仕組み、年収別の控除上限額シミュレーション、ワンストップ特例と確定申告の違い、住民税・手取りへの影響まで詳しく紹介します。";
$canonical_url = "https://calc.pfp.tokyo/articles/furusato-nozei.php";
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
    "datePublished": "2026-05-14",
    "dateModified": "2026-05-14",
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
  ふるさと納税
</div>

<main>
  <article>
    <div class="article-header">
      <span class="article-label">税金・節税</span>
      <h1>ふるさと納税とは？仕組み・控除上限額・手取りへの影響をわかりやすく解説【2026年版】</h1>
      <p class="article-meta">2026年5月掲載 ｜ 給与手取り計算ツール編集部</p>
    </div>

    <div class="toc">
      <div class="toc-title">📋 この記事の目次</div>
      <ol>
        <li><a href="#what">ふるさと納税とは</a></li>
        <li><a href="#structure">仕組み：なぜ「実質2,000円」なのか</a></li>
        <li><a href="#limit">控除上限額の計算方法</a></li>
        <li><a href="#simulation">年収別の控除上限額シミュレーション</a></li>
        <li><a href="#procedure">手続き方法：ワンストップ特例 vs 確定申告</a></li>
        <li><a href="#effect">住民税・手取りへの影響</a></li>
        <li><a href="#faq">よくある質問</a></li>
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

    <h2 id="what">1. ふるさと納税とは</h2>

    <p>ふるさと納税とは、<strong>任意の自治体に寄附をすることで、所得税と住民税の控除が受けられる制度</strong>です。2008年に開始され、現在では年間1,000万件以上が利用する人気の節税・返礼品制度となっています。</p>

    <p>「納税」という名前がついていますが、実際には<strong>寄附</strong>です。寄附先の自治体から返礼品（地域の特産品・食品・日用品など）を受け取ることができ、寄附額のうち2,000円を超える部分が翌年の税金から控除されます。</p>

    <div class="highlight-box blue">
      <div class="box-title">📌 ふるさと納税の3つのメリット</div>
      <ul style="padding-left:18px;">
        <li style="margin-bottom:6px;">自己負担<strong>2,000円</strong>で返礼品がもらえる</li>
        <li style="margin-bottom:6px;">所得税の還付＋翌年の住民税が減額される</li>
        <li style="margin-bottom:6px;">応援したい自治体を自由に選べる</li>
      </ul>
    </div>

    <h2 id="structure">2. 仕組み：なぜ「実質2,000円」なのか</h2>

    <p>ふるさと納税の仕組みを具体例で説明します。たとえば年収500万円の会社員が、ふるさと納税で<strong>6万円を寄附</strong>した場合：</p>

    <div class="formula-box">
      寄附額：60,000円<br>
      <span class="comment">── 自己負担2,000円は控除されない ──</span>
      控除対象額：60,000円 − 2,000円 = <strong>58,000円</strong><br>
      <br>
      所得税からの還付：58,000円 × 約20%（所得税率）= 約11,600円<br>
      住民税からの控除：58,000円 − 11,600円 = 約46,400円<br>
      <br>
      <span class="comment">── 合計控除額 ──</span>
      11,600円 + 46,400円 = <strong>58,000円</strong>（≒ 自己負担2,000円）
    </div>

    <p>つまり、控除上限額の範囲内であれば、<strong>2,000円の自己負担で返礼品がもらえる</strong>という仕組みです。ただし、この恩恵を受けるには「控除上限額」の範囲内に収める必要があります。</p>

    <div class="highlight-box">
      <div class="box-title">⚠️ 上限を超えると損になる</div>
      <p style="margin:0;">控除上限額を超えて寄附した分は税控除の対象外となり、<strong>純粋な「持ち出し」</strong>になります。自分の上限額を事前に把握しておくことが重要です。</p>
    </div>

    <h2 id="limit">3. 控除上限額の計算方法</h2>

    <p>控除上限額は年収・家族構成・その他の控除によって異なります。厳密には確定申告や年末調整の結果が出ないと正確な額はわかりませんが、<strong>目安として以下の計算式</strong>が使われます。</p>

    <div class="formula-box">
      <span class="comment">── 住民税所得割額からの上限 ──</span>
      住民税所得割額 × 20% ÷ （90% − 所得税率 × 1.021） + 2,000円<br>
      <br>
      <span class="comment">── 簡易計算（おおまかな目安） ──</span>
      年収 × 約2〜4%（年収・家族構成による）
    </div>

    <p>計算式は複雑なため、ふるさと納税サイト（楽天・ふるなびなど）の<strong>「控除額シミュレーター」</strong>を使うのが実用的です。</p>

    <h3>控除上限額に影響する主な要素</h3>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>要素</th>
            <th>影響</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>年収（給与収入）</td><td>高いほど上限額が増える</td></tr>
          <tr><td>配偶者控除・扶養控除</td><td>控除が多いほど上限額が減る</td></tr>
          <tr><td>医療費控除・住宅ローン控除</td><td>控除が多いほど上限額が減る</td></tr>
          <tr><td>副業・不動産収入</td><td>収入が増えると上限額が増える</td></tr>
        </tbody>
      </table>
    </div>

    <h2 id="simulation">4. 年収別の控除上限額シミュレーション</h2>

    <p>給与所得のみ・独身の場合のおおよその目安です（社会保険料等控除後の概算）。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>年収</th>
            <th>独身・扶養なし</th>
            <th>配偶者あり（専業主婦）</th>
            <th>配偶者＋子1人</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>300万円</td><td>約28,000円</td><td>約19,000円</td><td>約15,000円</td></tr>
          <tr><td>400万円</td><td>約42,000円</td><td>約33,000円</td><td>約29,000円</td></tr>
          <tr><td>500万円</td><td>約61,000円</td><td>約49,000円</td><td>約44,000円</td></tr>
          <tr><td>600万円</td><td>約77,000円</td><td>約69,000円</td><td>約66,000円</td></tr>
          <tr><td>700万円</td><td>約108,000円</td><td>約86,000円</td><td>約83,000円</td></tr>
          <tr><td>800万円</td><td>約129,000円</td><td>約120,000円</td><td>約116,000円</td></tr>
          <tr><td>1,000万円</td><td>約180,000円</td><td>約171,000円</td><td>約166,000円</td></tr>
        </tbody>
      </table>
    </div>

    <p style="font-size:13px; color:#888;">※ 上記は目安です。住宅ローン控除・医療費控除などがある場合は上限額が変わります。正確な金額は各ふるさと納税サイトのシミュレーターでご確認ください。</p>

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

    <h2 id="procedure">5. 手続き方法：ワンストップ特例 vs 確定申告</h2>

    <p>ふるさと納税の控除を受けるには、<strong>ワンストップ特例制度</strong>か<strong>確定申告</strong>のどちらかの手続きが必要です。</p>

    <div class="compare-grid">
      <div class="compare-card recommended">
        <div class="compare-card__title">ワンストップ特例制度 <span class="badge">会社員におすすめ</span></div>
        <ul>
          <li>確定申告不要</li>
          <li>寄附先が<strong>5自治体以内</strong></li>
          <li>年収2,000万円以下</li>
          <li>医療費控除などを申告しない</li>
          <li>申請書を各自治体に郵送</li>
          <li>控除はすべて<strong>住民税</strong>から</li>
        </ul>
      </div>
      <div class="compare-card">
        <div class="compare-card__title">確定申告</div>
        <ul>
          <li>自治体数の制限なし</li>
          <li>医療費控除等と合わせて申告可</li>
          <li>所得税の還付＋住民税の両方で控除</li>
          <li>翌年2月16日〜3月15日に申告</li>
          <li>マイナンバーカードがあればe-Tax可能</li>
        </ul>
      </div>
    </div>

    <div class="highlight-box green">
      <div class="box-title">✅ 会社員の場合はワンストップ特例が簡単</div>
      <p style="margin:0;">年末調整をしている会社員で、寄附先が5自治体以内であれば<strong>ワンストップ特例制度</strong>が最も手軽です。寄附後に送られてくる申請書に記入・押印して返送するだけで手続きが完了します。</p>
    </div>

    <h3>ワンストップ特例の申請手順</h3>

    <div class="step-flow">
      <div class="step-item">
        <div class="step-num">1</div>
        <div class="step-content">
          <strong>ふるさと納税サイトで寄附する</strong>
          楽天ふるさと納税・ふるなび・さとふるなどから寄附先・返礼品を選ぶ
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">2</div>
        <div class="step-content">
          <strong>ワンストップ特例申請書が届く</strong>
          寄附した自治体から申請書類が郵送される（または寄附時にオンライン申請も可）
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">3</div>
        <div class="step-content">
          <strong>申請書に記入・本人確認書類を添付して返送</strong>
          翌年1月10日必着（期限厳守）
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">4</div>
        <div class="step-content">
          <strong>翌年6月から住民税が減額される</strong>
          住民税決定通知書で控除額を確認できる
        </div>
      </div>
    </div>

    <h2 id="effect">6. 住民税・手取りへの影響</h2>

    <p>ふるさと納税の控除が反映されるタイミングと給与への影響を整理します。</p>

    <h3>所得税（確定申告の場合）</h3>
    <p>確定申告をした翌年（3〜4月ごろ）に、<strong>所得税の還付</strong>が振込で受け取れます。会社員の場合は少額ですが、確実に戻ってきます。</p>

    <h3>住民税（翌年6月〜）</h3>
    <p>ふるさと納税の最大の恩恵は<strong>住民税の減額</strong>です。翌年6月から翌々年5月の住民税（12ヶ月分）が毎月の給与天引きで自動的に減額されます。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>タイミング</th>
            <th>内容</th>
            <th>手取りへの影響</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>寄附時（当年）</td>
            <td>実際の支出（寄附金の支払い）</td>
            <td>その月の手取りが減る</td>
          </tr>
          <tr>
            <td>確定申告後（翌年3〜4月）</td>
            <td>所得税の還付</td>
            <td>還付金が振込まれる</td>
          </tr>
          <tr>
            <td>翌年6月〜翌々年5月</td>
            <td>住民税の減額（12ヶ月）</td>
            <td>毎月の手取りが少し増える</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="highlight-box">
      <div class="box-title">💡 「手取りが減る」と感じる理由</div>
      <p style="margin:0;">寄附した年は支出が発生するため一時的に手取りが減りますが、翌年以降の住民税減額で取り戻せます。年末に一括でまとめて寄附する方が多い理由のひとつです。</p>
    </div>

    <div class="cta-block">
      <h3>給与の手取り額をすぐ確認</h3>
      <p>ふるさと納税前後の手取りを比べてみましょう。住民税欄の金額を変えるとシミュレーションできます。</p>
      <a href="<?= htmlspecialchars($calc_url) ?>" class="cta-btn">手取り計算ツールを使う</a>
      <p class="cta-sub">東京・協会けんぽ前提。無料でご利用いただけます。</p>
    </div>

    <h2 id="faq">7. よくある質問</h2>

    <div class="faq-item">
      <div class="faq-q">ふるさと納税をすると「手取りが増える」のですか？</div>
      <div class="faq-a">厳密には「手取りが増える」わけではなく、<strong>支払うべき税金（住民税）が減る</strong>仕組みです。2,000円の自己負担で返礼品がもらえるお得さがあります。給与の月々の手取りは翌年6月以降に少し増えます。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">年収103万・130万円の壁とふるさと納税は関係ありますか？</div>
      <div class="faq-a">ふるさと納税の寄附金は「給与収入」ではないため、<strong>年収の壁（103万・130万円）には影響しません</strong>。ただし、寄附金控除は所得控除のひとつであるため、課税所得の計算には影響します。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">転職・退職した年もふるさと納税はできますか？</div>
      <div class="faq-a">できますが注意が必要です。<strong>退職後に給与収入がない期間がある場合</strong>、その年の収入が下がり控除上限額も下がります。また、ワンストップ特例が使えなくなる場合があるため、確定申告での対応を検討してください。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">住宅ローン控除がある場合は注意が必要ですか？</div>
      <div class="faq-a">はい。住宅ローン控除を受けている場合、<strong>所得税がすでに減額されている</strong>ため、ふるさと納税の所得税控除が少なくなることがあります。控除額のシミュレーションは住宅ローン控除を考慮したうえで行いましょう。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">ふるさと納税の返礼品に税金はかかりますか？</div>
      <div class="faq-a">返礼品は「一時所得」として扱われます。一時所得は年間50万円を超えた部分に課税されますが、<strong>通常の利用範囲内（数万〜数十万円程度）では課税されないケースがほとんど</strong>です。</div>
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
        <a href="./jumin-zei.php" class="related-card">
          <div class="related-card__label">税金・住民税</div>
          <div class="related-card__title">住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説【2026年版】</div>
        </a>
        <a href="./nenmatsu-chosei.php" class="related-card">
          <div class="related-card__label">税金・年末調整</div>
          <div class="related-card__title">年末調整とは？確定申告との違い・手続き方法をわかりやすく解説【2026年版】</div>
        </a>
        <a href="./fuyou-kojo.php" class="related-card">
          <div class="related-card__label">扶養・控除</div>
          <div class="related-card__title">扶養控除とは？種類・条件・金額をわかりやすく解説【2026年最新】</div>
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
