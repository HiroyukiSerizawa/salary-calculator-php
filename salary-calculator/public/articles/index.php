<?php
$page_title = "給与・社会保険の解説記事一覧 | 給与手取り計算ツール";
$page_description = "給与手取り・社会保険・税金に関する解説記事をまとめています。年収の壁、社会保険料の計算方法、子ども・子育て支援金など、給与にまつわる知識を詳しく解説。";
$canonical_url = "https://calc.pfp.tokyo/articles/";
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
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary">

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3745259041113437"
      crossorigin="anonymous"></script>

  <!-- 構造化データ -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "給与・社会保険の解説記事一覧",
    "description": "給与手取り・社会保険・税金に関する解説記事一覧",
    "url": "https://calc.pfp.tokyo/articles/",
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
      border-bottom: 3px solid #153987;
      padding: 16px 24px;
    }

    .header-inner {
      max-width: 860px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
    }

    .header-logo {
      font-size: 18px;
      font-weight: 700;
      color: #153987;
      text-decoration: none;
    }

    .header-sep { color: #bbb; }

    .header-title {
      font-size: 14px;
      color: #555;
    }

    .container {
      max-width: 860px;
      margin: 0 auto;
      padding: 40px 20px 80px;
    }

    .page-hero {
      text-align: center;
      margin-bottom: 48px;
    }

    .page-hero h1 {
      font-size: 26px;
      font-weight: 800;
      color: #153987;
      margin-bottom: 12px;
    }

    .page-hero p {
      color: #555;
      font-size: 15px;
      max-width: 600px;
      margin: 0 auto;
    }

    /* 広告エリア */
    .ad-area {
      background: #fff;
      border-radius: 10px;
      padding: 16px;
      margin-bottom: 40px;
      text-align: center;
      min-height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #aaa;
      font-size: 13px;
      border: 1px solid #e5e7eb;
    }

    /* 記事カテゴリ */
    .category-label {
      display: inline-block;
      background: #153987;
      color: #fff;
      font-size: 12px;
      font-weight: 600;
      padding: 3px 10px;
      border-radius: 4px;
      margin-bottom: 20px;
    }

    /* 記事グリッド */
    .articles-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 24px;
      margin-bottom: 48px;
    }

    .article-card {
      background: #fff;
      border-radius: 12px;
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
      box-shadow: 0 8px 24px rgba(21, 57, 135, 0.12);
      transform: translateY(-2px);
    }

    .article-card__label {
      font-size: 11px;
      font-weight: 700;
      color: #fe8d27;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .article-card__title {
      font-size: 16px;
      font-weight: 700;
      color: #153987;
      line-height: 1.5;
    }

    .article-card__desc {
      font-size: 13px;
      color: #555;
      line-height: 1.7;
      flex: 1;
    }

    .article-card__meta {
      font-size: 12px;
      color: #999;
    }

    .article-card__arrow {
      font-size: 13px;
      color: #fe8d27;
      font-weight: 600;
      margin-top: 4px;
    }

    /* 計算ツールバナー */
    .calc-banner {
      background: linear-gradient(135deg, #153987 0%, #1e4db7 100%);
      border-radius: 16px;
      padding: 36px 32px;
      color: #fff;
      text-align: center;
      margin-top: 48px;
    }

    .calc-banner h2 {
      font-size: 22px;
      font-weight: 800;
      margin-bottom: 10px;
    }

    .calc-banner p {
      font-size: 14px;
      opacity: 0.85;
      margin-bottom: 24px;
    }

    .calc-banner a {
      display: inline-block;
      background: #fe8d27;
      color: #fff;
      font-size: 15px;
      font-weight: 700;
      padding: 14px 36px;
      border-radius: 8px;
      text-decoration: none;
      transition: opacity 0.2s;
    }

    .calc-banner a:hover { opacity: 0.9; }

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

    @media (max-width: 600px) {
      .page-hero h1 { font-size: 20px; }
      .articles-grid { grid-template-columns: 1fr; }
      .calc-banner { padding: 28px 20px; }
    }
  </style>
</head>
<body>

<header>
  <div class="header-inner">
    <a class="header-logo" href="https://calc.pfp.tokyo/">給与手取り計算</a>
    <span class="header-sep">›</span>
    <span class="header-title">解説記事一覧</span>
  </div>
</header>

<div class="container">

  <div class="page-hero">
    <h1>給与・社会保険の解説記事</h1>
    <p>給与手取り・社会保険・税金に関する知識をわかりやすく解説しています。毎月の給与明細をより深く理解したい方に役立つ情報をまとめています。</p>
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

  <span class="category-label">社会保険・給与解説</span>

  <div class="articles-grid">

    <a href="./kyuyo-meisai-mikata.php" class="article-card">
      <span class="article-card__label">給与・基礎知識</span>
      <p class="article-card__title">給与明細の見方・読み方【完全ガイド】各項目の意味を徹底解説</p>
      <p class="article-card__desc">基本給・手当・控除の各項目をわかりやすく解説。「なぜこの金額が引かれるのか」が一目でわかります。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./nenshu-no-kabe.php" class="article-card">
      <span class="article-card__label">扶養・年収</span>
      <p class="article-card__title">年収の壁とは？103万・130万・150万円の壁をわかりやすく解説【2026年最新】</p>
      <p class="article-card__desc">扶養から外れるボーダーラインと手取りへの影響を年収別にシミュレーションして解説します。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./shakai-hoken-keisan.php" class="article-card">
      <span class="article-card__label">社会保険</span>
      <p class="article-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</p>
      <p class="article-card__desc">標準報酬月額の仕組みから、健康保険・厚生年金・介護保険料の計算方法まで徹底解説。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./kodomo-shienkin.php" class="article-card">
      <span class="article-card__label">社会保険・新制度</span>
      <p class="article-card__title">子ども・子育て支援金とは？2026年4月から始まる新たな給与天引きをわかりやすく解説</p>
      <p class="article-card__desc">月額負担額の目安、年収別シミュレーション、手取りへの影響を詳しく解説します。</p>
      <span class="article-card__meta">2026年4月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./bonus-tearai.php" class="article-card">
      <span class="article-card__label">給与・賞与</span>
      <p class="article-card__title">ボーナス（賞与）の手取り計算方法【2026年最新】月給との違いを徹底解説</p>
      <p class="article-card__desc">標準賞与額の上限・所得税の特例計算・賞与額別シミュレーション表で手取りを確認。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./jumin-zei.php" class="article-card">
      <span class="article-card__label">税金・住民税</span>
      <p class="article-card__title">住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説【2026年版】</p>
      <p class="article-card__desc">前年所得から計算される仕組み・年収別の目安・6月に上がる理由を詳しく解説。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./nenmatsu-chosei.php" class="article-card">
      <span class="article-card__label">税金・年末調整</span>
      <p class="article-card__title">年末調整とは？確定申告との違い・手続き方法をわかりやすく解説【2026年版】</p>
      <p class="article-card__desc">申告できる控除の種類・手続きの流れ・よくある申告漏れをわかりやすくまとめています。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./fuyou-kojo.php" class="article-card">
      <span class="article-card__label">扶養・控除</span>
      <p class="article-card__title">扶養控除とは？種類・条件・金額をわかりやすく解説【2026年最新】</p>
      <p class="article-card__desc">一般扶養・特定扶養・老人扶養の控除額と、社会保険の扶養との違いを解説します。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./shobyo-teatekin.php" class="article-card">
      <span class="article-card__label">社会保険・給付</span>
      <p class="article-card__title">傷病手当金とは？計算方法・受給条件・期間をわかりやすく解説【2026年版】</p>
      <p class="article-card__desc">病気・けがで働けない時の収入保障。支給額の計算方法と申請手順を詳しく解説。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

    <a href="./kaigo-hoken.php" class="article-card">
      <span class="article-card__label">社会保険・介護</span>
      <p class="article-card__title">介護保険料とは？給与から天引きされる仕組みと計算方法【2026年最新】</p>
      <p class="article-card__desc">40歳から始まる介護保険料の計算方法・給与別の金額・手取りへの影響を解説します。</p>
      <span class="article-card__meta">2026年5月掲載</span>
      <span class="article-card__arrow">続きを読む →</span>
    </a>

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

  <!-- 計算ツールバナー -->
  <div class="calc-banner">
    <h2>手取り額をすぐに確認したい方へ</h2>
    <p>東京・協会けんぽ前提の月給手取りシミュレーター。給与・年齢・扶養人数を入力するだけで概算を表示します。</p>
    <a href="https://calc.pfp.tokyo/">無料で手取りを計算する</a>
  </div>

</div>

<footer>
  <p><a href="https://calc.pfp.tokyo/">給与手取り計算トップ</a> | <a href="https://pfp.tokyo">株式会社PFP</a></p>
  <p style="margin-top:8px;">© 2026 pfp.tokyo — 掲載内容は概算です。正確な金額は給与明細または担当部署にご確認ください。</p>
</footer>

</body>
</html>
