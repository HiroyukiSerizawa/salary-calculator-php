<?php
$page_title = "産休・育休中の給付金はいくら？出産手当金・育児休業給付金の計算方法【2026年版】";
$page_description = "産休・育休中にもらえる給付金を徹底解説。出産手当金（標準報酬日額×2/3）・育児休業給付金（67%→50%）の計算方法、社会保険料免除、年収別シミュレーション表つき。";
$canonical_url = "https://calc.pfp.tokyo/articles/sanku-ikukyu.php";
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
  産休・育休の給付金
</div>

<main>
  <article>
    <div class="article-header">
      <span class="article-label">給与・育児休業</span>
      <h1>産休・育休中の給付金はいくら？出産手当金・育児休業給付金の計算方法【2026年版】</h1>
      <p class="article-meta">2026年5月掲載 ｜ 給与手取り計算ツール編集部</p>
    </div>

    <div class="toc">
      <div class="toc-title">📋 この記事の目次</div>
      <ol>
        <li><a href="#basic">産休・育休の基本（期間と違い）</a></li>
        <li><a href="#shussan-teate">産休中の給付金：出産手当金</a></li>
        <li><a href="#ikukyu-kyufu">育休中の給付金：育児休業給付金</a></li>
        <li><a href="#menjo">社会保険料の免除</a></li>
        <li><a href="#simulation">年収別シミュレーション表</a></li>
        <li><a href="#procedure">手続きの流れ</a></li>
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

    <h2 id="basic">1. 産休・育休の基本（期間と違い）</h2>

    <p>「産休」と「育休」は混同されがちですが、<strong>法的根拠・取得できる人・給付元がすべて異なります</strong>。まずその違いをしっかり把握しておきましょう。</p>

    <div class="compare-grid">
      <div class="compare-card recommended">
        <div class="compare-card__title">産前産後休業（産休）</div>
        <ul>
          <li>産前：出産予定日の<strong>6週間前</strong>から（多胎妊娠は14週前）</li>
          <li>産後：出産日翌日から<strong>8週間</strong>（強制休業）</li>
          <li>取得権利：<strong>女性のみ</strong></li>
          <li>雇用形態：正社員・パート・派遣問わず</li>
          <li>根拠：労働基準法第65条</li>
        </ul>
      </div>
      <div class="compare-card">
        <div class="compare-card__title">育児休業（育休）</div>
        <ul>
          <li>期間：原則子が<strong>1歳になるまで</strong>（最長2歳まで延長可）</li>
          <li>取得権利：<strong>男女ともに</strong>取得可能</li>
          <li>パパ育休（産後パパ育休）：出生後8週間以内に4週間取得可能</li>
          <li>雇用形態：雇用保険加入者が対象</li>
          <li>根拠：育児・介護休業法</li>
        </ul>
      </div>
    </div>

    <div class="highlight-box">
      <div class="box-title">⚠️ 産休と育休はセットで取得するのが一般的</div>
      <p style="margin:0;">多くの場合、産後8週間の産休が終了した翌日から育休に入ります。産休中は健康保険から「出産手当金」が、育休中は雇用保険から「育児休業給付金」が支給されます。</p>
    </div>

    <h2 id="shussan-teate">2. 産休中の給付金：出産手当金</h2>

    <p>出産手当金は、<strong>健康保険（協会けんぽ等）から支給される給付金</strong>です。産休中に会社から給与が出ない（または減額される）場合に、生活を支えるために支払われます。</p>

    <h3>計算式</h3>

    <div class="formula-box">
      出産手当金 = 標準報酬日額 × 2/3 × 支給日数<br>
      <br>
      <span class="comment">── 標準報酬日額の計算 ──</span>
      標準報酬日額 = 標準報酬月額 ÷ 30
    </div>

    <h3>支給の主なポイント</h3>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>項目</th>
            <th>内容</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>支給期間</td><td>産前42日（多胎98日）＋産後56日 ＝ 最大<strong>98日</strong>（多胎154日）</td></tr>
          <tr><td>支払元</td><td>健康保険（協会けんぽ）</td></tr>
          <tr><td>所得税</td><td>非課税</td></tr>
          <tr><td>社会保険料</td><td>産休中は免除のためかからない</td></tr>
          <tr><td>会社からの給与との関係</td><td>産休中に給与が支払われる場合は出産手当金が減額または不支給</td></tr>
        </tbody>
      </table>
    </div>

    <h3>計算例：月給30万円の場合</h3>

    <div class="formula-box">
      標準報酬月額：約300,000円<br>
      標準報酬日額：300,000 ÷ 30 = <strong>10,000円</strong><br>
      <br>
      <span class="comment">── 98日間の出産手当金 ──</span>
      10,000円 × 2/3 × 98日 = <strong>約653,333円</strong>
    </div>

    <h2 id="ikukyu-kyufu">3. 育休中の給付金：育児休業給付金</h2>

    <p>育児休業給付金は、<strong>雇用保険（ハローワーク）から支給される給付金</strong>です。育休前6ヶ月の月平均賃金をもとに計算されます。</p>

    <h3>給付率と計算式</h3>

    <div class="formula-box">
      <span class="comment">── 育休開始から180日目まで ──</span>
      月給の <strong>67%</strong>（休業開始時賃金日額 × 67% × 支給日数）<br>
      <br>
      <span class="comment">── 181日目以降 ──</span>
      月給の <strong>50%</strong>（休業開始時賃金日額 × 50% × 支給日数）<br>
      <br>
      <span class="comment">── いずれも非課税・社会保険料なし ──</span>
    </div>

    <div class="highlight-box blue">
      <div class="box-title">💡 手取りベースで考えると実質収入はさほど変わらない</div>
      <p style="margin:0;">育休中は社会保険料・所得税がかからないため、手取りベースで比較すると育休中の実質収入は月給の<strong>約80〜90%水準</strong>になることもあります。給付金だけの額面では大きく下がって見えますが、控除がないぶん実際の減少は小さくなります。</p>
    </div>

    <h3>育児休業給付金の主なポイント</h3>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>項目</th>
            <th>内容</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>支給元</td><td>雇用保険（ハローワーク）</td></tr>
          <tr><td>受給資格</td><td>育休前2年間に雇用保険被保険者期間が12ヶ月以上</td></tr>
          <tr><td>所得税</td><td>非課税</td></tr>
          <tr><td>社会保険料</td><td>育休中は免除のためかからない</td></tr>
          <tr><td>支給タイミング</td><td>約2ヶ月ごとに2ヶ月分まとめて振込</td></tr>
          <tr><td>パパ育休（産後パパ育休）</td><td>出生後8週間以内に最大4週間取得可。給付率67%</td></tr>
        </tbody>
      </table>
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

    <h2 id="menjo">4. 社会保険料の免除</h2>

    <p>産休・育休中は、<strong>健康保険・厚生年金保険の保険料が免除</strong>されます。これは会社員にとって非常に大きなメリットです。</p>

    <div class="highlight-box green">
      <div class="box-title">✅ 社会保険料免除の3つのポイント</div>
      <ul style="padding-left:18px; margin-top:4px;">
        <li style="margin-bottom:6px;"><strong>本人負担分も会社負担分も両方免除</strong>される</li>
        <li style="margin-bottom:6px;">免除期間中も<strong>年金受給額への影響なし</strong>（標準報酬月額で算定継続）</li>
        <li style="margin-bottom:6px;">健康保険証はそのまま使用可能。医療費の自己負担も変わらない</li>
      </ul>
    </div>

    <p>産休開始月から育休終了月まで、月の末日が休業中であれば<strong>その月の保険料が丸ごと免除</strong>されます（育休の場合は、同一月内に14日以上育休を取得した場合も免除対象）。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>休業種別</th>
            <th>免除される保険料</th>
            <th>適用条件</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>産休（産前産後休業）</td><td>健康保険・厚生年金</td><td>産前産後休業期間中</td></tr>
          <tr><td>育休（育児休業）</td><td>健康保険・厚生年金</td><td>月末育休中 or 同一月14日以上</td></tr>
          <tr><td>雇用保険料</td><td>免除なし</td><td>育休中は給付金受給のため支払不要（結果として）</td></tr>
        </tbody>
      </table>
    </div>

    <h2 id="simulation">5. 年収別シミュレーション表</h2>

    <p>年収（月給換算）別に、出産手当金と育児休業給付金（最初の6ヶ月・67%期間）の目安額をまとめました。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>年収</th>
            <th>月給目安</th>
            <th>出産手当金（98日）</th>
            <th>育休給付金6ヶ月（67%）</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>300万円</td><td>25万円</td><td>約54.4万円</td><td>約100.5万円</td></tr>
          <tr><td>400万円</td><td>33万円</td><td>約71.9万円</td><td>約132.7万円</td></tr>
          <tr><td>500万円</td><td>42万円</td><td>約91.5万円</td><td>約168.8万円</td></tr>
          <tr><td>600万円</td><td>50万円</td><td>約109万円</td><td>約201万円</td></tr>
          <tr><td>700万円</td><td>58万円</td><td>約126.4万円</td><td>約233.2万円</td></tr>
        </tbody>
      </table>
    </div>

    <p style="font-size:13px; color:#888;">※ 標準報酬月額の上限（139万円）あり。上記は概算です。実際の給付額は標準報酬月額の等級・勤務日数等により異なります。</p>

    <div class="highlight-box">
      <div class="box-title">📌 出産手当金＋育休給付金の合計受取額（年収500万円の例）</div>
      <p style="margin:0;">出産手当金：約91.5万円 ＋ 育休給付金6ヶ月：約168.8万円 ＝ <strong>合計約260万円</strong>（産休・育休1年間の合計概算）。社会保険料免除額も含めると実質的な給付はさらに大きくなります。</p>
    </div>

    <h2 id="procedure">6. 手続きの流れ</h2>

    <p>産休・育休の取得から給付金受給まで、おおまかな流れは以下の4ステップです。</p>

    <div class="step-flow">
      <div class="step-item">
        <div class="step-num">1</div>
        <div class="step-content">
          <strong>会社に産休・育休の取得を申出</strong>
          産休は遅くとも産前6週前、育休は<strong>育休開始の1ヶ月前まで</strong>に会社へ書面で申出。育休は出生後8週以内に取得するパパ育休（産後パパ育休）の場合は2週間前まで
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">2</div>
        <div class="step-content">
          <strong>出産手当金の申請（産休中）</strong>
          会社経由または本人が<strong>協会けんぽに申請</strong>。産後56日経過後に申請するのが一般的。申請書に医師・助産師の証明が必要
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">3</div>
        <div class="step-content">
          <strong>育児休業給付金の申請（育休中）</strong>
          原則<strong>会社がハローワークに申請</strong>（初回は育休開始から約2ヶ月後）。本人は「育児休業給付受給資格確認票・育児休業給付金支給申請書」に記入・署名
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">4</div>
        <div class="step-content">
          <strong>復職 or 育休延長の申請</strong>
          子が1歳時点で保育園に落選した等の場合は最長<strong>2歳まで延長申請</strong>が可能。延長の場合もハローワークへの申請が必要
        </div>
      </div>
    </div>

    <div class="cta-block">
      <h3>産休・育休前後の手取りを確認</h3>
      <p>復職後の手取りや育休前の月収をシミュレーションするなら給与手取り計算ツールをご活用ください。</p>
      <a href="<?= htmlspecialchars($calc_url) ?>" class="cta-btn">給与手取り計算ツールを使う</a>
      <p class="cta-sub">東京・協会けんぽ前提。無料でご利用いただけます。</p>
    </div>

    <h2 id="faq">7. よくある質問</h2>

    <div class="faq-item">
      <div class="faq-q">育休中に副業してもいい？</div>
      <div class="faq-a">会社の就業規則によります。育休給付金の受給には直接影響しませんが、<strong>副業収入が一定以上になると社会保険上の注意が必要</strong>です。副業を始める前に会社の規定と社会保険への影響を確認することをおすすめします。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">パートでも育休給付金はもらえる？</div>
      <div class="faq-a">雇用保険に加入していれば受給可能です。基本的な要件は<strong>育休前2年間に雇用保険被保険者期間が12ヶ月以上</strong>あること（週20時間以上勤務している場合は加入義務あり）。短時間労働者でも条件を満たせば受給できます。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">夫婦で同時に育休を取れる？</div>
      <div class="faq-a">取れます。<strong>パパ・ママ育休プラス制度</strong>を利用すれば、両親ともに育休を取得した場合に子が<strong>1歳2ヶ月になるまで</strong>育休を延長できます（ただし各自の育休期間の上限は1年）。夫婦で育休を取り合うケースも増えています。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">育休中に会社都合で解雇されたら？</div>
      <div class="faq-a">育休を理由とした解雇・不利益取扱いは<strong>育児・介護休業法で禁止</strong>されており、無効となります。万が一そのような事態になった場合は、都道府県労働局や社会保険労務士へ相談することをおすすめします。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">育休給付金はいつもらえる？</div>
      <div class="faq-a">約<strong>2ヶ月ごとに2ヶ月分まとめて</strong>振込されます。初回は育休開始からおおむね<strong>4ヶ月後</strong>が目安です。会社の申請手続き状況によって多少前後することがあります。</div>
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
        <a href="./shakai-hoken-keisan.php" class="related-card">
          <div class="related-card__label">社会保険</div>
          <div class="related-card__title">社会保険料の計算方法とは？健康保険・厚生年金・雇用保険の仕組みをわかりやすく解説【2026年版】</div>
        </a>
        <a href="./fuyou-kojo.php" class="related-card">
          <div class="related-card__label">扶養・控除</div>
          <div class="related-card__title">扶養控除とは？種類・条件・金額をわかりやすく解説【2026年最新】</div>
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
