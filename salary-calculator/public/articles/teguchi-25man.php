<?php
$page_title = "手取り25万円の給与明細を公開｜社会人2〜3年目の天引き額はいくら？【2026年版】";
$page_description = "手取り25万円の給与明細の内訳を実例公開。月収31万円・28歳のモデルケースで健康保険・厚生年金・所得税・住民税の天引き額を解説。手取り25万を達成する月収も逆算シミュレーターで確認できます。";
$canonical_url = "https://calc.pfp.tokyo/articles/teguchi-25man.php";
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
  手取り25万円の給与明細
</div>

<main>
<article>

  <div class="article-header">
    <span class="article-label">給与明細・実例</span>
    <h1>手取り25万円の給与明細を公開｜社会人2〜3年目の天引き額はいくら？【2026年版】</h1>
    <p class="article-meta">2026年5月19日 ／ 東京・協会けんぽ・2026年度料率</p>
  </div>

  <p>入社2〜3年目になると月収が少し上がり、そろそろ手取り25万円が見えてくる時期です。ただし住民税の天引きも始まり、「昇給したのに手取りがあまり増えない」と感じる方も多いはず。この記事では<strong>月収31万円・28歳・東京在住</strong>のモデルケースで給与明細の内訳を公開します。</p>

  <div class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#model">モデルケース：月収31万円・28歳の給与明細</a></li>
      <li><a href="#reverse">手取り25万円に必要な月収の逆算</a></li>
      <li><a href="#nenshi">2年目から住民税が始まる仕組み</a></li>
      <li><a href="#raise">昇給しても手取りが増えにくい理由</a></li>
      <li><a href="#compare">手取り20万・25万・30万の比較</a></li>
      <li><a href="#faq">よくある質問</a></li>
    </ol>
  </div>

  <!-- ① モデルケース -->
  <h2 id="model">① モデルケース：月収31万円・28歳の給与明細</h2>

  <div class="highlight-box blue">
    <div class="box-title">📋 計算条件</div>
    基本給：310,000円 ／ 交通費：0円 ／ 年齢：28歳 ／ 扶養：0人 ／ 住民税：10,000円（2年目以降）／ 雇用保険：加入
  </div>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>項目</th><th>金額</th><th>備考</th></tr>
      </thead>
      <tbody>
        <tr><td>基本給（総支給）</td><td>310,000円</td><td></td></tr>
        <tr><td>健康保険料</td><td>▲ 15,760円</td><td>標準報酬月額32万円の本人負担分</td></tr>
        <tr><td>介護保険料</td><td>▲ 0円</td><td>40歳未満のため非対象</td></tr>
        <tr><td>子ども・子育て支援金</td><td>▲ 368円</td><td>2026年4月から新設</td></tr>
        <tr><td>厚生年金保険料</td><td>▲ 29,280円</td><td>料率18.3%（労使折半）</td></tr>
        <tr><td>雇用保険料</td><td>▲ 1,550円</td><td>料率0.5%</td></tr>
        <tr><td>所得税</td><td>▲ 6,650円</td><td>源泉徴収（甲欄・扶養0人）</td></tr>
        <tr><td>住民税</td><td>▲ 10,000円</td><td>入社2年目から発生</td></tr>
        <tr class="total-row"><td>控除合計</td><td>▲ 63,608円</td><td></td></tr>
        <tr class="net-row"><td>💰 手取り（差引支給額）</td><td>246,392円</td><td></td></tr>
      </tbody>
    </table>
  </div>

  <div class="highlight-box green">
    <div class="box-title">✅ ポイント</div>
    月収31万円で手取りは約24.6万円。控除率は約20.5%。住民税10,000円が2年目から加わることで、入社1年目より手取りが約1万円少なく感じます。
  </div>

  <div class="cta-box">
    <p>あなたの月収・年齢・住民税で正確に計算できます</p>
    <a href="../index.php?salary=310000&age=28&resident_tax=10000" class="cta-btn">この条件で計算する →</a>
    <a href="../reverse.php?target_net=250000&age=28&resident_tax=10000" class="cta-btn secondary">手取り25万の月収を逆算 →</a>
  </div>

  <!-- ② 逆算 -->
  <h2 id="reverse">② 手取り25万円に必要な月収の逆算</h2>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>条件</th><th>必要な月収の目安</th></tr>
      </thead>
      <tbody>
        <tr><td>25歳・扶養なし・住民税0円（入社1年目）</td><td>約 302,000円</td></tr>
        <tr><td>28歳・扶養なし・住民税10,000円（2年目以降）</td><td>約 313,000円</td></tr>
        <tr><td>32歳・扶養なし・住民税15,000円</td><td>約 319,000円</td></tr>
        <tr><td>42歳・扶養1人・住民税15,000円（介護保険あり）</td><td>約 336,000円</td></tr>
      </tbody>
    </table>
  </div>

  <div class="related-link-box">
    <a href="../reverse.php?target_net=250000&age=28&resident_tax=10000">🔄 手取り25万円になる月収を逆算シミュレーターで確認する →</a>
  </div>

  <!-- ③ 住民税 -->
  <h2 id="nenshi">③ 2年目から住民税が始まる仕組み</h2>

  <p>住民税は「前年の所得」に対して課税されます。新卒1年目は前年（学生時代）の所得がほぼゼロのため住民税はかかりませんが、<strong>2年目の6月から突然天引きが始まります</strong>。</p>

  <div class="highlight-box">
    <div class="box-title">⚠️ 2年目6月の給与が突然減る</div>
    月収31万円で東京在住の場合、住民税は年間約12〜15万円（月1〜1.2万円）が目安。入社2年目6月から天引きが始まり、手取りが減ったように感じる原因です。
  </div>

  <div class="related-link-box">
    <a href="./jumin-zei.php">📖 住民税の仕組み・計算方法を詳しく解説 →</a>
  </div>

  <!-- ④ 昇給 -->
  <h2 id="raise">④ 昇給しても手取りが増えにくい理由</h2>

  <p>月収が上がると社会保険料・所得税・住民税も増えるため、手取りの増加幅は額面の上昇より小さくなります。</p>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>月収（額面）の増加</th><th>手取りの実際の増加目安</th><th>差し引きされる分</th></tr>
      </thead>
      <tbody>
        <tr><td>+10,000円</td><td>約 +7,700円</td><td>約 2,300円（社保・税）</td></tr>
        <tr><td>+30,000円</td><td>約 +22,000円</td><td>約 8,000円（社保・税）</td></tr>
        <tr><td>+50,000円</td><td>約 +35,000円</td><td>約 15,000円（社保・税）</td></tr>
      </tbody>
    </table>
  </div>

  <p>※28歳・扶養なし・住民税ありの条件での目安です。標準報酬月額の等級が変わるタイミングで社会保険料がまとめて増えることもあります。</p>

  <!-- ⑤ 比較 -->
  <h2 id="compare">⑤ 手取り20万・25万・30万の給与明細比較</h2>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>手取り目標</th><th>必要な月収目安</th><th>健康保険</th><th>厚生年金</th><th>所得税</th></tr>
      </thead>
      <tbody>
        <tr><td>手取り20万円</td><td>約 242,000円</td><td>12,345円</td><td>22,140円</td><td>3,570円</td></tr>
        <tr><td>手取り25万円</td><td>約 313,000円</td><td>15,760円</td><td>29,280円</td><td>6,650円</td></tr>
        <tr><td>手取り30万円</td><td>約 381,000円</td><td>18,715円</td><td>34,770円</td><td>9,530円</td></tr>
      </tbody>
    </table>
  </div>

  <p>※25歳・扶養なし・住民税なし（入社1年目）の条件での参考値。各手取りの詳細は個別記事でご確認ください。</p>

  <!-- ⑥ FAQ -->
  <h2 id="faq">⑥ よくある質問</html>

  <h3>Q. 月収が上がったのに手取りが減ったのはなぜ？</h3>
  <p>最も多い原因は<strong>住民税の天引き開始</strong>（入社2年目6月）です。また標準報酬月額の等級が上がるタイミング（毎年9月）に社会保険料が増えることもあります。昇給額より控除の増加分が大きいと手取りが減ります。</p>

  <h3>Q. 手取り25万円の年収換算は？</h3>
  <p>月の手取り25万円なら年間約300万円。賞与を含めた場合、額面年収450〜500万円が手取り年収360〜380万円程度の目安です。</p>

  <h3>Q. 扶養に入っている配偶者がいる場合は？</h3>
  <p>扶養控除（所得税）の申告をすることで所得税が軽減されます。月収31万円・扶養1人の場合、扶養なしに比べて所得税が月2,000〜3,000円程度安くなります。</p>

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
    <p>自分の条件で手取りをシミュレーションしてみよう</p>
    <a href="../index.php?salary=310000&age=28&resident_tax=10000" class="cta-btn">手取り計算ツールを使う →</a>
    <a href="../reverse.php?target_net=250000&age=28&resident_tax=10000" class="cta-btn secondary">手取り25万の月収を逆算 →</a>
  </div>

  <div class="related-articles">
    <h2>関連記事</h2>
    <div class="related-grid">
      <a href="./teguchi-20man.php" class="related-card">
        <div class="related-card__label">給与明細・実例</div>
        <div class="related-card__title">手取り20万円の給与明細を公開｜初任給・新卒の天引き額はいくら？【2026年版】</div>
      </a>
      <a href="./teguchi-30man.php" class="related-card">
        <div class="related-card__label">給与明細・実例</div>
        <div class="related-card__title">手取り30万円にするには月収いくら必要？給与明細の内訳を公開【2026年版】</div>
      </a>
      <a href="./jumin-zei.php" class="related-card">
        <div class="related-card__label">税金・住民税</div>
        <div class="related-card__title">住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説【2026年版】</div>
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
