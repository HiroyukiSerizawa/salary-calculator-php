<?php
$page_title = "手取り20万円の給与明細を公開｜初任給・新卒の天引き額はいくら？【2026年版】";
$page_description = "手取り20万円の給与明細の内訳を公開。健康保険・厚生年金・雇用保険・所得税の天引き額を実例で解説。初任給の手取りの目安や、手取り20万を達成できる月収も逆算シミュレーターで確認できます。";
$canonical_url = "https://calc.pfp.tokyo/articles/teguchi-20man.php";
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
    .header-cta { background: #fe8d27; color: #fff; padding: 8px 18px; border-radius: 20px; font-size: 13px; font-weight: 700; text-decoration: none; white-space: nowrap; transition: background 0.2s; }
    .header-cta:hover { background: #e07820; }

    .breadcrumb { max-width: 860px; margin: 0 auto; padding: 10px 20px; font-size: 13px; color: #888; }
    .breadcrumb a { color: #1a6fb3; text-decoration: none; }
    .breadcrumb a:hover { text-decoration: underline; }
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
  手取り20万円の給与明細
</div>

<main>
<article>

  <div class="article-header">
    <span class="article-label">給与明細・実例</span>
    <h1>手取り20万円の給与明細を公開｜初任給・新卒の天引き額はいくら？【2026年版】</h1>
    <p class="article-meta">2026年5月19日 ／ 東京・協会けんぽ・2026年度料率</p>
  </div>

  <p>「初任給25万円」と求人票に書いてあったのに、実際の手取りは20万円ちょっと——。新卒・入社1年目の方がよく感じる「給与明細の驚き」です。この記事では、<strong>月収25万円・25歳・東京在住</strong>のモデルケースで給与明細の内訳を公開し、各控除項目をわかりやすく解説します。</p>

  <div class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#model">モデルケース：月収25万円・25歳の給与明細</a></li>
      <li><a href="#breakdown">各控除項目の解説</a></li>
      <li><a href="#reverse">手取り20万円にするには月収いくら必要？</a></li>
      <li><a href="#first-year">新入社員1年目は住民税がかからない</a></li>
      <li><a href="#industry">業界別・初任給の手取り目安</a></li>
      <li><a href="#faq">よくある質問</a></li>
    </ol>
  </div>

  <!-- ① モデルケース -->
  <h2 id="model">① モデルケース：月収25万円・25歳の給与明細</h2>

  <p>以下は2026年度の料率をもとにした、実際の計算結果です。</p>

  <div class="highlight-box blue">
    <div class="box-title">📋 計算条件</div>
    基本給：250,000円 ／ 交通費：0円 ／ 年齢：25歳 ／ 扶養：0人 ／ 住民税：0円（入社1年目）／ 雇用保険：加入
  </div>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>項目</th><th>金額</th><th>備考</th></tr>
      </thead>
      <tbody>
        <tr><td>基本給（総支給）</td><td>250,000円</td><td>求人票に記載される額</td></tr>
        <tr><td>健康保険料</td><td>▲ 12,805円</td><td>標準報酬月額26万円の本人負担分</td></tr>
        <tr><td>介護保険料</td><td>▲ 0円</td><td>40歳未満のため非対象</td></tr>
        <tr><td>子ども・子育て支援金</td><td>▲ 299円</td><td>2026年4月から新設</td></tr>
        <tr><td>厚生年金保険料</td><td>▲ 23,790円</td><td>料率18.3%（労使折半）</td></tr>
        <tr><td>雇用保険料</td><td>▲ 1,250円</td><td>料率0.5%（2026年度）</td></tr>
        <tr><td>所得税</td><td>▲ 4,770円</td><td>源泉徴収（甲欄・扶養0人）</td></tr>
        <tr><td>住民税</td><td>▲ 0円</td><td>入社1年目は前年所得ゼロのため非課税</td></tr>
        <tr class="total-row"><td>控除合計</td><td>▲ 42,914円</td><td></td></tr>
        <tr class="net-row"><td>💰 手取り（差引支給額）</td><td>207,086円</td><td></td></tr>
      </tbody>
    </table>
  </div>

  <div class="highlight-box green">
    <div class="box-title">✅ ポイント</div>
    月収25万円の場合、控除は約4.3万円（手取り率約83%）。新卒1年目は住民税がゼロなので、2年目以降は住民税分だけ手取りが減ります。
  </div>

  <div class="cta-box">
    <p>あなたの月収・年齢・扶養人数で正確に計算できます</p>
    <a href="../index.php?salary=250000&age=25" class="cta-btn">この条件で計算する →</a>
    <a href="../reverse.php?target_net=200000&age=25" class="cta-btn secondary">手取り20万の月収を逆算 →</a>
  </div>

  <!-- ② 各控除項目 -->
  <h2 id="breakdown">② 各控除項目の解説</h2>

  <h3>健康保険料（協会けんぽ・東京）</h3>
  <p>病気やケガの医療費をカバーする公的保険です。東京の協会けんぽでは2026年度の保険料率は<strong>10.21%</strong>（労使折半で本人負担5.105%）。標準報酬月額をもとに計算されます。月収25万円の場合、標準報酬月額は26万円のグレードに当たり、<strong>12,805円</strong>が天引きされます。</p>

  <h3>介護保険料</h3>
  <p><strong>40歳になる月から</strong>加算されます。25歳の新卒には関係ありませんが、40歳以降の先輩社員は健康保険料に上乗せされています。</p>

  <h3>子ども・子育て支援金（2026年4月新設）</h3>
  <p>2026年4月から健康保険料に上乗せされた新しい負担です。月収25万円の場合は<strong>299円/月</strong>と少額ですが、今後段階的に引き上げられる予定です。</p>

  <h3>厚生年金保険料</h3>
  <p>老後の年金のために積み立てる保険料で、控除項目の中で最大です。料率18.3%（労使折半で本人9.15%）。月収25万円では<strong>23,790円</strong>。高いように見えますが、将来の年金受取額に直結します。</p>

  <h3>雇用保険料</h3>
  <p>失業したときの失業給付などに使われます。2026年度の従業員負担率は<strong>0.5%</strong>。月収25万円では<strong>1,250円</strong>です。</p>

  <h3>所得税（源泉徴収）</h3>
  <p>毎月の給与から概算で天引きされる税金です。社会保険料を差し引いた後の金額（課税所得）に対して、扶養人数に応じた税額表で計算されます。年末調整で過払い分が還付されます。</p>

  <!-- ③ 逆算 -->
  <h2 id="reverse">③ 手取り20万円にするには月収いくら必要？</h2>

  <p>「手取り20万円欲しい」と思ったとき、求人票でどの月収を狙えばいいのかを逆算してみましょう。年齢や扶養、住民税によって変わります。</p>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>条件</th><th>必要な月収の目安</th></tr>
      </thead>
      <tbody>
        <tr><td>25歳・扶養なし・住民税なし（入社1年目）</td><td>約 242,000円</td></tr>
        <tr><td>25歳・扶養なし・住民税10,000円（2年目以降）</td><td>約 255,000円</td></tr>
        <tr><td>30歳・扶養なし・住民税15,000円</td><td>約 258,000円</td></tr>
        <tr><td>42歳・扶養1人・住民税15,000円（介護保険あり）</td><td>約 275,000円</td></tr>
      </tbody>
    </table>
  </div>

  <p>あなたの条件（年齢・住民税・扶養）に合わせた正確な数字は、逆算シミュレーターで確認できます。</p>

  <div class="related-link-box">
    <a href="../reverse.php?target_net=200000&age=25">🔄 手取り20万円になる月収を逆算シミュレーターで確認する →</a>
  </div>

  <!-- ④ 住民税 -->
  <h2 id="first-year">④ 新入社員1年目は住民税がかからない</h2>

  <p>住民税は「前年の所得」をもとに計算されます。新卒1年目は前年（学生時代）の所得がほぼゼロのため、<strong>入社後の6月まで住民税が0円</strong>です。</p>

  <div class="highlight-box">
    <div class="box-title">⚠️ 2年目から手取りが減る</div>
    住民税は翌年6月から天引きが始まります。月収25万円・東京在住の場合、<strong>2年目以降は約10,000〜15,000円/月</strong>の住民税が加わります。手取りが突然減ったように感じるのはこのためです。
  </div>

  <div class="related-link-box">
    <a href="./jumin-zei.php">📖 住民税の仕組み・計算方法を詳しく解説 →</a>
  </div>

  <!-- ⑤ 業界別 -->
  <h2 id="industry">⑤ 業界別・初任給と手取りの目安（2026年）</h2>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>業界</th><th>初任給の目安（月収）</th><th>手取り目安（1年目）</th></tr>
      </thead>
      <tbody>
        <tr><td>IT・ソフトウェア</td><td>250,000〜280,000円</td><td>約207,000〜232,000円</td></tr>
        <tr><td>メーカー・製造</td><td>220,000〜250,000円</td><td>約182,000〜207,000円</td></tr>
        <tr><td>金融・保険</td><td>230,000〜270,000円</td><td>約190,000〜223,000円</td></tr>
        <tr><td>小売・サービス</td><td>200,000〜230,000円</td><td>約165,000〜190,000円</td></tr>
        <tr><td>医療・福祉</td><td>220,000〜260,000円</td><td>約182,000〜215,000円</td></tr>
        <tr><td>公務員（地方）</td><td>200,000〜220,000円</td><td>約165,000〜182,000円</td></tr>
      </tbody>
    </table>
  </div>

  <p>※上記はあくまで目安です。地域・企業規模・職種によって異なります。正確な計算は計算ツールでご確認ください。</p>

  <!-- ⑥ FAQ -->
  <h2 id="faq">⑥ よくある質問</h2>

  <h3>Q. 給与明細に書いてある「標準報酬月額」って何？</h3>
  <p>社会保険料の計算に使う基準額です。実際の月収に近い値に等級が設定されており、月収が一定範囲内であれば同じ保険料になります。詳しくは<a href="./shakai-hoken-keisan.php" style="color:#1a6fb3;">社会保険料の計算方法</a>をご覧ください。</p>

  <h3>Q. 入社後すぐに社会保険に入れる？</h3>
  <p>正社員として入社すれば原則、入社日から健康保険・厚生年金に加入します。初月の給与からすでに天引きされているはずです。</p>

  <h3>Q. 年末調整って何をするの？</h3>
  <p>毎月の源泉徴収は「概算」です。年末に1年間の所得を確定させて過払い分を精算する手続きが年末調整です。多くの新卒社員は数千円〜1万円程度が還付されます。</p>

  <h3>Q. 手取りを増やす方法はある？</h3>
  <p>扶養家族がいる場合は扶養控除の申告、iDeCoや企業型DCへの加入（所得控除）、生命保険料控除の活用などが有効です。社会保険料自体を下げることは難しいですが、節税によって所得税・住民税の負担を軽減できます。</p>

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
    <a href="../index.php?salary=250000&age=25" class="cta-btn">手取り計算ツールを使う →</a>
    <a href="../reverse.php?target_net=200000&age=25" class="cta-btn secondary">手取り20万の月収を逆算 →</a>
  </div>

  <div class="related-articles">
    <h2>関連記事</h2>
    <div class="related-grid">
      <a href="./kyuyo-meisai-mikata.php" class="related-card">
        <div class="related-card__label">給与・基礎知識</div>
        <div class="related-card__title">給与明細の見方とは？各項目の意味・控除の仕組みをわかりやすく解説【2026年版】</div>
      </a>
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <div class="related-card__label">社会保険</div>
        <div class="related-card__title">社会保険料の計算方法とは？健康保険・厚生年金・雇用保険の仕組みをわかりやすく解説【2026年版】</div>
      </a>
      <a href="./teguchi-30man.php" class="related-card">
        <div class="related-card__label">給与明細・実例</div>
        <div class="related-card__title">手取り30万円の給与明細を公開｜転職後の手取りはいくら？【2026年版】</div>
      </a>
      <a href="./jumin-zei.php" class="related-card">
        <div class="related-card__label">税金・住民税</div>
        <div class="related-card__title">住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説【2026年版】</div>
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
