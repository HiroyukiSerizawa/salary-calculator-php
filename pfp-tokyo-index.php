<?php
$page_title = "給与・社会保険の情報サイト | pfp.tokyo";
$page_description = "給与手取り計算ツールと、社会保険・税金に関する解説記事を提供しています。年収の壁・給与明細の見方・社会保険料の計算方法など、給与にまつわる知識をわかりやすく解説。";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <link rel="canonical" href="https://pfp.tokyo/">

  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://pfp.tokyo/">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary">

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3745259041113437"
      crossorigin="anonymous"></script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "pfp.tokyo",
    "url": "https://pfp.tokyo/",
    "description": "給与手取り計算ツールと社会保険・税金の解説記事サイト",
    "publisher": {
      "@type": "Organization",
      "name": "株式会社PFP",
      "url": "https://pfp.co.jp"
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

    /* ヘッダー */
    header {
      background: #fff;
      border-bottom: 3px solid #153987;
      padding: 14px 24px;
    }
    .header-inner {
      max-width: 1000px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
    }
    .header-logo {
      font-size: 22px;
      font-weight: 800;
      color: #153987;
      text-decoration: none;
      letter-spacing: -0.5px;
    }
    .header-logo span { color: #fe8d27; }
    .header-corp a {
      font-size: 13px;
      color: #555;
      text-decoration: none;
      border: 1px solid #ddd;
      padding: 6px 14px;
      border-radius: 20px;
      transition: background 0.2s;
    }
    .header-corp a:hover { background: #f0f0f0; }

    /* ヒーロー */
    .hero {
      background: linear-gradient(135deg, #153987 0%, #1e4db7 100%);
      color: #fff;
      text-align: center;
      padding: 64px 24px 72px;
    }
    .hero__label {
      display: inline-block;
      background: rgba(255,255,255,0.2);
      font-size: 12px;
      font-weight: 600;
      padding: 4px 14px;
      border-radius: 20px;
      margin-bottom: 18px;
      letter-spacing: 0.08em;
    }
    .hero h1 {
      font-size: 32px;
      font-weight: 800;
      line-height: 1.35;
      margin-bottom: 16px;
    }
    .hero p {
      font-size: 15px;
      opacity: 0.85;
      max-width: 560px;
      margin: 0 auto;
    }

    /* コンテナ */
    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 56px 20px 80px;
    }

    /* セクションタイトル */
    .section-title {
      font-size: 22px;
      font-weight: 800;
      color: #153987;
      margin-bottom: 8px;
    }
    .section-lead {
      font-size: 14px;
      color: #666;
      margin-bottom: 28px;
    }

    /* 計算ツールバナー */
    .tool-banner {
      background: #fff;
      border: 2px solid #153987;
      border-radius: 16px;
      padding: 36px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      margin-bottom: 64px;
      flex-wrap: wrap;
    }
    .tool-banner__body h2 {
      font-size: 20px;
      font-weight: 800;
      color: #153987;
      margin-bottom: 8px;
    }
    .tool-banner__body p {
      font-size: 14px;
      color: #555;
      max-width: 420px;
    }
    .tool-banner__tags {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-top: 12px;
    }
    .tool-banner__tag {
      font-size: 11px;
      background: #eef2ff;
      color: #153987;
      padding: 3px 10px;
      border-radius: 20px;
      font-weight: 600;
    }
    .tool-banner__cta a {
      display: inline-block;
      background: #153987;
      color: #fff;
      font-size: 15px;
      font-weight: 700;
      padding: 16px 36px;
      border-radius: 10px;
      text-decoration: none;
      white-space: nowrap;
      transition: opacity 0.2s;
    }
    .tool-banner__cta a:hover { opacity: 0.85; }

    /* 広告エリア */
    .ad-area {
      background: #fff;
      border-radius: 10px;
      padding: 16px;
      margin: 0 0 56px;
      text-align: center;
      min-height: 90px;
      border: 1px solid #e5e7eb;
    }

    /* 記事グリッド */
    .articles-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 24px;
      margin-bottom: 16px;
    }
    .article-card {
      background: #fff;
      border-radius: 14px;
      border: 1px solid #e5e7eb;
      padding: 28px 24px;
      text-decoration: none;
      color: inherit;
      transition: box-shadow 0.2s, transform 0.2s;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .article-card:hover {
      box-shadow: 0 8px 28px rgba(21,57,135,0.12);
      transform: translateY(-3px);
    }
    .article-card__label {
      font-size: 11px;
      font-weight: 700;
      color: #fe8d27;
      letter-spacing: 0.04em;
    }
    .article-card__title {
      font-size: 15px;
      font-weight: 700;
      color: #153987;
      line-height: 1.55;
    }
    .article-card__desc {
      font-size: 13px;
      color: #666;
      line-height: 1.7;
      flex: 1;
    }
    .article-card__arrow {
      font-size: 13px;
      color: #fe8d27;
      font-weight: 600;
    }

    /* 会社情報 */
    .company-section {
      background: #fff;
      border-radius: 16px;
      border: 1px solid #e5e7eb;
      padding: 36px 40px;
      margin-top: 56px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: wrap;
    }
    .company-section__body p {
      font-size: 14px;
      color: #555;
      margin-top: 8px;
      max-width: 480px;
    }
    .company-section__body h2 {
      font-size: 18px;
      font-weight: 700;
      color: #153987;
    }
    .company-section__link a {
      display: inline-block;
      background: #f5f7fa;
      border: 1px solid #ddd;
      color: #333;
      font-size: 14px;
      font-weight: 600;
      padding: 12px 28px;
      border-radius: 8px;
      text-decoration: none;
      white-space: nowrap;
      transition: background 0.2s;
    }
    .company-section__link a:hover { background: #e8ecf5; }

    /* フッター */
    footer {
      background: #1a1a2e;
      color: #aaa;
      text-align: center;
      padding: 28px 24px;
      font-size: 13px;
    }
    footer a { color: #aaa; text-decoration: none; }
    footer a:hover { color: #fff; }
    footer .footer-links {
      display: flex;
      justify-content: center;
      gap: 24px;
      flex-wrap: wrap;
      margin-bottom: 12px;
    }

    @media (max-width: 640px) {
      .hero h1 { font-size: 24px; }
      .tool-banner { padding: 24px 20px; flex-direction: column; }
      .tool-banner__cta a { width: 100%; text-align: center; }
      .articles-grid { grid-template-columns: 1fr; }
      .company-section { padding: 24px 20px; flex-direction: column; }
    }
  </style>
</head>
<body>

<header>
  <div class="header-inner">
    <a class="header-logo" href="https://pfp.tokyo/">pfp<span>.</span>tokyo</a>
    <div class="header-corp">
      <a href="https://pfp.co.jp" target="_blank" rel="noopener noreferrer">株式会社PFP 公式サイト →</a>
    </div>
  </div>
</header>

<div class="hero">
  <div class="hero__label">給与・社会保険の情報サイト</div>
  <h1>給与明細をもっと<br>わかりやすく。</h1>
  <p>手取り計算ツールと、社会保険・税金に関する解説記事をまとめています。毎月の給与明細を正しく読むための情報を提供します。</p>
</div>

<div class="container">

  <!-- 計算ツール -->
  <div class="tool-banner">
    <div class="tool-banner__body">
      <h2>給与手取り計算ツール（東京版）</h2>
      <p>月給・年齢・扶養人数を入力するだけ。東京・協会けんぽ前提の手取り額をすぐに概算できます。令和8年（2026年）の料率・税額表に対応。</p>
      <div class="tool-banner__tags">
        <span class="tool-banner__tag">健康保険料</span>
        <span class="tool-banner__tag">厚生年金</span>
        <span class="tool-banner__tag">雇用保険</span>
        <span class="tool-banner__tag">所得税</span>
        <span class="tool-banner__tag">住民税</span>
        <span class="tool-banner__tag">子育て支援金</span>
      </div>
    </div>
    <div class="tool-banner__cta">
      <a href="https://pfp.tokyo/calc/">手取りを計算する →</a>
    </div>
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

  <!-- 記事一覧 -->
  <div class="section-title">給与・社会保険の解説記事</div>
  <p class="section-lead">給与手取り・社会保険・税金に関する知識をわかりやすく解説しています。</p>

  <div class="articles-grid">

    <a href="https://pfp.tokyo/calc/articles/kyuyo-meisai-mikata.php" class="article-card">
      <span class="article-card__label">給与・基礎知識</span>
      <p class="article-card__title">給与明細の見方・読み方【完全ガイド】各項目の意味を徹底解説</p>
      <p class="article-card__desc">基本給・手当・控除の各項目をわかりやすく解説。なぜこの金額が引かれるのかが一目でわかります。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/nenshu-no-kabe.php" class="article-card">
      <span class="article-card__label">扶養・年収</span>
      <p class="article-card__title">年収の壁とは？103万・130万・150万円の壁をわかりやすく解説【2026年最新】</p>
      <p class="article-card__desc">扶養から外れるボーダーラインと手取りへの影響を年収別にシミュレーションして解説します。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/shakai-hoken-keisan.php" class="article-card">
      <span class="article-card__label">社会保険</span>
      <p class="article-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</p>
      <p class="article-card__desc">標準報酬月額の仕組みから、健康保険・厚生年金・介護保険料の計算方法まで徹底解説。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/kodomo-shienkin.php" class="article-card">
      <span class="article-card__label">社会保険・新制度</span>
      <p class="article-card__title">子ども・子育て支援金とは？2026年4月から始まる新たな給与天引きをわかりやすく解説</p>
      <p class="article-card__desc">月額負担額の目安、年収別シミュレーション、手取りへの影響を詳しく解説します。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/bonus-tearai.php" class="article-card">
      <span class="article-card__label">給与・賞与</span>
      <p class="article-card__title">ボーナス（賞与）の手取り計算方法【2026年最新】月給との違いを徹底解説</p>
      <p class="article-card__desc">標準賞与額の上限・所得税の特例計算・賞与額別シミュレーション表で手取りを確認。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/jumin-zei.php" class="article-card">
      <span class="article-card__label">税金・住民税</span>
      <p class="article-card__title">住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説【2026年版】</p>
      <p class="article-card__desc">前年所得から計算される仕組み・年収別の目安・6月に上がる理由を詳しく解説。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/nenmatsu-chosei.php" class="article-card">
      <span class="article-card__label">税金・年末調整</span>
      <p class="article-card__title">年末調整とは？確定申告との違い・手続き方法をわかりやすく解説【2026年版】</p>
      <p class="article-card__desc">申告できる控除の種類・手続きの流れ・よくある申告漏れをわかりやすくまとめています。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/fuyou-kojo.php" class="article-card">
      <span class="article-card__label">扶養・控除</span>
      <p class="article-card__title">扶養控除とは？種類・条件・金額をわかりやすく解説【2026年最新】</p>
      <p class="article-card__desc">一般扶養・特定扶養・老人扶養の控除額と、社会保険の扶養との違いを解説します。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/shobyo-teatekin.php" class="article-card">
      <span class="article-card__label">社会保険・給付</span>
      <p class="article-card__title">傷病手当金とは？計算方法・受給条件・期間をわかりやすく解説【2026年版】</p>
      <p class="article-card__desc">病気・けがで働けない時の収入保障。支給額の計算方法と申請手順を詳しく解説。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="https://pfp.tokyo/calc/articles/kaigo-hoken.php" class="article-card">
      <span class="article-card__label">社会保険・介護</span>
      <p class="article-card__title">介護保険料とは？給与から天引きされる仕組みと計算方法【2026年最新】</p>
      <p class="article-card__desc">40歳から始まる介護保険料の計算方法・給与別の金額・手取りへの影響を解説します。</p>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

  </div>

  <div style="text-align:center; margin-top:8px;">
    <a href="https://pfp.tokyo/calc/articles/" style="display:inline-block; color:#153987; font-size:14px; font-weight:600; text-decoration:none; border:2px solid #153987; padding:10px 28px; border-radius:8px;">記事一覧をすべて見る →</a>
  </div>

  <!-- 広告 -->
  <div class="ad-area" style="margin-top:40px;">
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3745259041113437"
         data-ad-slot="auto"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
  </div>

  <!-- 会社情報 -->
  <div class="company-section">
    <div class="company-section__body">
      <h2>株式会社PFP</h2>
      <p>本サイトは株式会社PFPが運営しています。SES事業・システム開発を主業務とする情報サービス企業です。会社情報・お問い合わせは公式サイトをご覧ください。</p>
    </div>
    <div class="company-section__link">
      <a href="https://pfp.co.jp" target="_blank" rel="noopener noreferrer">pfp.co.jp を見る →</a>
    </div>
  </div>

</div>

<footer>
  <div class="footer-links">
    <a href="https://pfp.tokyo/calc/">給与手取り計算ツール</a>
    <a href="https://pfp.tokyo/calc/articles/">解説記事一覧</a>
    <a href="https://pfp.co.jp" target="_blank" rel="noopener noreferrer">株式会社PFP</a>
  </div>
  <p>© 2026 pfp.tokyo — 掲載内容は概算・解説目的です。正確な金額は給与明細または担当部署にご確認ください。</p>
</footer>

</body>
</html>
