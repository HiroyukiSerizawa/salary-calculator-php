<?php
$page_title = "手取り35万円の給与明細を公開｜月収いくら必要？30代の天引き額を解説【2026年版】";
$page_description = "手取り35万円の給与明細の内訳を実例公開。月収44万円・35歳のモデルケースで健康保険・厚生年金・所得税・住民税の天引き額を解説。手取り35万を達成する月収も逆算シミュレーターで確認できます。";
$canonical_url = "https://calc.pfp.tokyo/articles/teguchi-35man.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3745259041113437" crossorigin="anonymous"></script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "<?= htmlspecialchars($page_title) ?>",
    "description": "<?= htmlspecialchars($page_description) ?>",
    "author": { "@type": "Organization", "name": "給与手取り計算ツール" },
    "datePublished": "2026-05-19",
    "dateModified": "2026-05-19",
    "publisher": { "@type": "Organization", "name": "pfp.tokyo" }
  }
  </script>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: "Hiragino Kaku Gothic ProN", "Meiryo", sans-serif; background: #f5f7fa; color: #333; line-height: 1.8; font-size: 16px; }
    header { background: #fff; border-bottom: 1px solid #e0e7ef; }
    .header-inner { max-width: 860px; margin: 0 auto; padding: 14px 20px; display: flex; align-items: center; justify-content: space-between; }
    .site-logo { font-size: 15px; font-weight: 700; text-decoration: none; color: #153987; }
    .header-nav { font-size: 13px; }
    .header-nav a { color: #555; text-decoration: none; margin-left: 16px; }
    .header-nav a:hover { color: #153987; }
    .header-cta { background: #fe8d27; color: #fff; padding: 8px 18px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none; white-space: nowrap; }
    .breadcrumb { max-width: 860px; margin: 0 auto; padding: 10px 20px; font-size: 13px; color: #888; }
    .breadcrumb a { color: #1a6fb3; text-decoration: none; }
    .breadcrumb span { margin: 0 6px; }
    main { max-width: 860px; margin: 0 auto; padding: 0 20px 60px; }
    article { background: #fff; border-radius: 10px; padding: 36px 40px; box-shadow: 0 2px 12px rgba(0,0,0,.06); margin-top: 16px; }
    .article-header { margin-bottom: 32px; }
    .article-label { display: inline-block; background: #e8f0fb; color: #1a6fb3; font-size: 12px; font-weight: 700; padding: 3px 10px; border-radius: 4px; margin-bottom: 12px; }
    h1 { font-size: 26px; line-height: 1.5; color: #1a1a2e; margin-bottom: 14px; }
    .article-meta { font-size: 13px; color: #888; }
    .toc { background: #f0f4f8; border-left: 4px solid #1a6fb3; border-radius: 0 8px 8px 0; padding: 20px 24px; margin: 28px 0; }
    .toc-title { font-size: 14px; font-weight: 700; color: #1a6fb3; margin-bottom: 10px; }
    .toc ol { padding-left: 20px; }
    .toc li { font-size: 14px; margin-bottom: 5px; }
    .toc a { color: #333; text-decoration: none; }
    .toc a:hover { color: #1a6fb3; text-decoration: underline; }
    h2 { font-size: 21px; color: #1a1a2e; border-bottom: 3px solid #1a6fb3; padding-bottom: 8px; margin: 40px 0 18px; }
    h3 { font-size: 18px; color: #1a3a5c; margin: 28px 0 12px; padding-left: 12px; border-left: 3px solid #4a9fd4; }
    p { margin-bottom: 16px; }
    .highlight-box { background: #fff8e1; border: 1px solid #ffc107; border-radius: 8px; padding: 18px 22px; margin: 20px 0; }
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
    .total-row td { background: #e8f0fb !important; font-weight: 700; }
    .net-row td { background: #1a6fb3 !important; color: #fff !important; font-weight: 700; font-size: 17px; }
    .related-link-box { background: #f0f4ff; border: 1px solid #c2d0f5; border-radius: 8px; padding: 14px 18px; margin: 12px 0 20px; }
    .related-link-box a { color: #153987; font-weight: 600; font-size: 14px; text-decoration: none; }
    .related-link-box a:hover { text-decoration: underline; }
    .cta-box { background: linear-gradient(135deg, #1a6fb3 0%, #153987 100%); border-radius: 12px; padding: 28px 32px; margin: 32px 0; text-align: center; }
    .cta-box p { color: rgba(255,255,255,0.9); font-size: 14px; margin-bottom: 16px; }
    .cta-btn { display: inline-block; background: #fe8d27; color: #fff; font-size: 16px; font-weight: 700; padding: 14px 32px; border-radius: 30px; text-decoration: none; margin: 6px 8px; transition: background 0.2s; }
    .cta-btn:hover { background: #e07820; }
    .cta-btn.secondary { background: #fff; color: #153987; }
    .cta-btn.secondary:hover { background: #f0f4ff; }
    .ad-area { margin: 32px 0; text-align: center; min-height: 90px; }
    .related-articles { margin-top: 40px; }
    .related-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 14px; margin-top: 16px; }
    .related-card { display: block; background: #f5f8fc; border: 1px solid #e0e7ef; border-radius: 8px; padding: 14px 16px; text-decoration: none; transition: box-shadow 0.2s; }
    .related-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,.1); }
    .related-card__label { font-size: 11px; color: #1a6fb3; font-weight: 700; margin-bottom: 6px; }
    .related-card__title { font-size: 13px; color: #333; line-height: 1.6; }
    footer { background: #1a1a2e; color: #aaa; text-align: center; padding: 24px 20px; font-size: 13px; }
    footer a { color: #7ab0e0; text-decoration: none; }
    footer a:hover { text-decoration: underline; }
    @media (max-width: 600px) {
      article { padding: 24px 18px; }
      h1 { font-size: 21px; }
      h2 { font-size: 18px; }
      .cta-btn { display: block; margin: 8px 0; }
    }
  </style>
</head>
<body>

<header>
  <div class="header-inner">
    <a href="https://calc.pfp.tokyo/" class="site-logo">給与手取り計算ツール</a>
    <nav class="header-nav">
      <a href="https://calc.pfp.tokyo/">計算ツール</a>
      <a href="https://calc.pfp.tokyo/reverse.php">逆算</a>
      <a href="https://calc.pfp.tokyo/articles/" class="header-cta">解説記事</a>
    </nav>
  </div>
</header>

<div class="breadcrumb">
  <a href="https://calc.pfp.tokyo/">給与手取り計算</a>
  <span>›</span>
  <a href="https://calc.pfp.tokyo/articles/">解説記事</a>
  <span>›</span>
  手取り35万円の給与明細
</div>

<main>
<article>

  <div class="article-header">
    <span class="article-label">給与明細・実例</span>
    <h1>手取り35万円の給与明細を公開｜月収いくら必要？30代の天引き額を解説【2026年版】</h1>
    <p class="article-meta">2026年5月19日 ／ 東京・協会けんぽ・2026年度料率</p>
  </div>

  <p>30代のキャリアミドル層が転職や昇給で目指す「手取り35万円」。実際にこの水準を達成するには月収（額面）いくら必要なのでしょうか？この記事では<strong>月収44万円・35歳・東京在住・交通費あり</strong>のモデルケースで給与明細の内訳を公開し、転職交渉にも使える情報をまとめます。</p>

  <div class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#model">モデルケース：月収44万円・35歳の給与明細</a></li>
      <li><a href="#reverse">手取り35万円に必要な月収の逆算</a></li>
      <li><a href="#thirties">30代の控除の特徴</a></li>
      <li><a href="#career">手取り35万円を達成するキャリアの目安</a></li>
      <li><a href="#compare">手取り30万・35万・40万の比較</a></li>
      <li><a href="#faq">よくある質問</a></li>
    </ol>
  </div>

  <!-- ① モデルケース -->
  <h2 id="model">① モデルケース：月収44万円・35歳の給与明細</h2>

  <div class="highlight-box blue">
    <div class="box-title">📋 計算条件</div>
    基本給：440,000円 ／ 交通費：10,000円（非課税） ／ 年齢：35歳 ／ 扶養：0人 ／ 住民税：20,000円 ／ 雇用保険：加入
  </div>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>項目</th><th>金額</th><th>備考</th></tr>
      </thead>
      <tbody>
        <tr><td>基本給</td><td>440,000円</td><td></td></tr>
        <tr><td>交通費（非課税）</td><td>10,000円</td><td></td></tr>
        <tr><td>総支給額</td><td>450,000円</td><td></td></tr>
        <tr><td>健康保険料</td><td>▲ 21,670円</td><td>標準報酬月額44万円の本人負担分</td></tr>
        <tr><td>介護保険料</td><td>▲ 0円</td><td>35歳のため非対象（40歳から）</td></tr>
        <tr><td>子ども・子育て支援金</td><td>▲ 506円</td><td>2026年4月から新設</td></tr>
        <tr><td>厚生年金保険料</td><td>▲ 40,260円</td><td>料率18.3%（労使折半）</td></tr>
        <tr><td>雇用保険料</td><td>▲ 2,250円</td><td>料率0.5%（交通費込み450,000円で計算）</td></tr>
        <tr><td>所得税</td><td>▲ 13,690円</td><td>源泉徴収（甲欄・扶養0人）</td></tr>
        <tr><td>住民税</td><td>▲ 20,000円</td><td>前年所得から計算</td></tr>
        <tr class="total-row"><td>控除合計</td><td>▲ 98,376円</td><td>総支給の約21.9%</td></tr>
        <tr class="net-row"><td>💰 手取り（差引支給額）</td><td>351,624円</td><td></td></tr>
      </tbody>
    </table>
  </div>

  <div class="highlight-box green">
    <div class="box-title">✅ ポイント</div>
    月収44万円（総支給45万円）で手取りは約35万円。控除率は約22%。住民税2万円・所得税1.4万円と税負担が30代でぐっと増える水準です。
  </div>

  <div class="cta-box">
    <p>あなたの月収・年齢・住民税で正確にシミュレーション</p>
    <a href="../index.php?salary=440000&age=35&transportation=10000&resident_tax=20000" class="cta-btn">この条件で計算する →</a>
    <a href="../reverse.php?target_net=350000&age=35&resident_tax=20000" class="cta-btn secondary">手取り35万の月収を逆算 →</a>
  </div>

  <!-- ② 逆算 -->
  <h2 id="reverse">② 手取り35万円に必要な月収の逆算</h2>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>条件</th><th>必要な月収の目安</th></tr>
      </thead>
      <tbody>
        <tr><td>30歳・扶養なし・住民税15,000円</td><td>約 440,000円</td></tr>
        <tr><td>35歳・扶養なし・住民税20,000円</td><td>約 445,000円</td></tr>
        <tr><td>38歳・扶養1人・住民税20,000円</td><td>約 434,000円</td></tr>
        <tr><td>42歳・扶養1人・住民税20,000円（介護保険あり）</td><td>約 460,000円</td></tr>
      </tbody>
    </table>
  </div>

  <p>40歳以上は介護保険料が加わるため、同じ手取りを実現するのに月収が2〜3万円多く必要になります。</p>

  <div class="related-link-box">
    <a href="../reverse.php?target_net=350000&age=35&resident_tax=20000">🔄 手取り35万円になる月収を逆算シミュレーターで確認する →</a>
  </div>

  <!-- ③ 30代の特徴 -->
  <h2 id="thirties">③ 30代の控除の特徴</h2>

  <h3>所得税が急増する</h3>
  <p>月収44万円の所得税は13,690円。月収25万円（6,650円）と比べると2倍以上です。所得税は累進課税のため、収入が増えるほど増加率が高まります。</p>

  <h3>住民税も2万円水準に</h3>
  <p>月収44万円・東京在住の場合、住民税は年間約24万円（月2万円）が目安です。転職で年収が上がった翌年から住民税も増えることを念頭に置いておきましょう。</p>

  <h3>40歳で介護保険が加わる</h3>
  <p>35歳では介護保険料はかかりませんが、<strong>40歳になると月約3,500円の介護保険料が加わります</strong>。月収44万円の場合、40歳から手取りが約3,500円減ります。</p>

  <div class="related-link-box">
    <a href="./kaigo-hoken.php">📖 介護保険料の仕組み・40歳からの負担を詳しく解説 →</a>
  </div>

  <!-- ④ キャリア -->
  <h2 id="career">④ 手取り35万円を達成するキャリアの目安</h2>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>キャリア・職種</th><th>手取り35万円を達成しやすい目安</th></tr>
      </thead>
      <tbody>
        <tr><td>大企業・主任〜係長クラス</td><td>30代後半〜40代前半</td></tr>
        <tr><td>IT・エンジニア（中堅）</td><td>30代前半〜</td></tr>
        <tr><td>外資系・コンサル（若手〜中堅）</td><td>30歳前後</td></tr>
        <tr><td>営業職（高インセンティブ型）</td><td>実績次第で20代も可能</td></tr>
        <tr><td>医療専門職（看護師・薬剤師等）</td><td>夜勤・管理職で30代〜</td></tr>
      </tbody>
    </table>
  </div>

  <p>業界・職種・企業規模によって大きく異なります。転職時は月収の「額面」だけでなく、逆算ツールで手取りを確認してから判断するのがおすすめです。</p>

  <!-- ⑤ 比較 -->
  <h2 id="compare">⑤ 手取り30万・35万・40万の給与明細比較</h2>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>手取り目標</th><th>必要な月収目安</th><th>健康保険</th><th>厚生年金</th><th>所得税</th><th>住民税目安</th></tr>
      </thead>
      <tbody>
        <tr><td>手取り30万円</td><td>約 381,000円</td><td>18,715円</td><td>34,770円</td><td>9,530円</td><td>15,000円</td></tr>
        <tr><td>手取り35万円</td><td>約 445,000円</td><td>21,670円</td><td>40,260円</td><td>13,690円</td><td>20,000円</td></tr>
        <tr><td>手取り40万円</td><td>約 514,000円</td><td>25,640円</td><td>47,430円</td><td>19,090円</td><td>23,000円</td></tr>
      </tbody>
    </table>
  </div>

  <p>※35歳・扶養なし・交通費10,000円ありの条件での参考値。</p>

  <!-- ⑥ FAQ -->
  <h2 id="faq">⑥ よくある質問</h2>

  <h3>Q. 転職で月収44万円の求人はどこで探せる？</h3>
  <p>月収44万円（年収530万円相当）は30代のミドルキャリア転職で現実的な水準です。IT・コンサル・メーカー中堅社員・外資系若手に多く見られます。求人サイトで「年収600万円以上」のフィルターをかけると手取り35万円水準が射程に入ります。</p>

  <h3>Q. 手取り35万円の貯蓄目安は？</h3>
  <p>手取り35万円・東京在住の独身者の場合、家賃・食費・生活費を差し引いた貯蓄余力は月5〜10万円が一般的な目安です。収入の20〜25%を貯蓄に回すのが理想とされます。</p>

  <h3>Q. iDeCoや積立NISAで税負担を減らせる？</h3>
  <p>iDeCoは掛金が全額所得控除になるため、月収44万円の方が月2万円拠出すると年間で所得税・住民税が合計約6万円程度軽減される試算です。手取り35万円水準になったら積極的に活用したいところです。</p>

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

  <div class="cta-box">
    <p>転職後の手取りを今すぐシミュレーション</p>
    <a href="../reverse.php?target_net=350000&age=35&resident_tax=20000" class="cta-btn">手取り35万の月収を逆算 →</a>
    <a href="../index.php?salary=440000&age=35&transportation=10000&resident_tax=20000" class="cta-btn secondary">月収44万の手取りを計算 →</a>
  </div>

  <div class="related-articles">
    <h2>関連記事</h2>
    <div class="related-grid">
      <a href="./teguchi-30man.php" class="related-card">
        <div class="related-card__label">給与明細・実例</div>
        <div class="related-card__title">手取り30万円にするには月収いくら必要？給与明細の内訳を公開【2026年版】</div>
      </a>
      <a href="./nenshu-1000man.php" class="related-card">
        <div class="related-card__label">給与明細・実例</div>
        <div class="related-card__title">年収1000万円の手取りはいくら？給与明細の内訳と税負担を公開【2026年版】</div>
      </a>
      <a href="./kaigo-hoken.php" class="related-card">
        <div class="related-card__label">社会保険・介護</div>
        <div class="related-card__title">介護保険料とは？給与から天引きされる仕組みと計算方法【2026年最新】</div>
      </a>
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <div class="related-card__label">社会保険</div>
        <div class="related-card__title">社会保険料の計算方法とは？健康保険・厚生年金・雇用保険の仕組みをわかりやすく解説【2026年版】</div>
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
