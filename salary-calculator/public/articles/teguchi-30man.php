<?php
$page_title = "手取り30万円にするには月収いくら必要？給与明細の内訳を公開【2026年版】";
$page_description = "手取り30万円を達成するために必要な月収を逆算。月収38万円・30歳のモデルケースで健康保険・厚生年金・所得税・住民税の天引き額を実例公開。転職・年収交渉に役立てよう。";
$canonical_url = "https://calc.pfp.tokyo/articles/teguchi-30man.php";
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
  手取り30万円の給与明細
</div>

<main>
<article>

  <div class="article-header">
    <span class="article-label">給与明細・実例</span>
    <h1>手取り30万円にするには月収いくら必要？給与明細の内訳を公開【2026年版】</h1>
    <p class="article-meta">2026年5月19日 ／ 東京・協会けんぽ・2026年度料率</p>
  </div>

  <p>転職活動でよく聞く「手取り30万円」。では実際に手取り30万円を達成するには、<strong>月収（基本給）はいくら必要</strong>なのでしょうか？この記事では月収38万円・30歳・東京在住のモデルケースで給与明細の内訳を公開し、転職交渉や求人選びに役立てる情報をお届けします。</p>

  <div class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#model">モデルケース：月収38万円・30歳の給与明細</a></li>
      <li><a href="#reverse">手取り30万円に必要な月収の逆算</a></li>
      <li><a href="#negotiation">転職・年収交渉での活用法</a></li>
      <li><a href="#compare">20代・30代・40代の手取り比較</a></li>
      <li><a href="#faq">よくある質問</a></li>
    </ol>
  </div>

  <!-- ① モデルケース -->
  <h2 id="model">① モデルケース：月収38万円・30歳の給与明細</h2>

  <p>転職後の一般的なケースとして、30歳・東京在住・交通費1万円・住民税1.5万円（前年所得から計算）の条件で試算しました。</p>

  <div class="highlight-box blue">
    <div class="box-title">📋 計算条件</div>
    基本給：380,000円 ／ 交通費：10,000円（非課税） ／ 年齢：30歳 ／ 扶養：0人 ／ 住民税：15,000円 ／ 雇用保険：加入
  </div>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>項目</th><th>金額</th><th>備考</th></tr>
      </thead>
      <tbody>
        <tr><td>基本給</td><td>380,000円</td><td></td></tr>
        <tr><td>交通費（非課税）</td><td>10,000円</td><td>社会保険料・雇用保険の計算には含む</td></tr>
        <tr><td>総支給額</td><td>390,000円</td><td></td></tr>
        <tr><td>健康保険料</td><td>▲ 18,715円</td><td>標準報酬月額38万円の本人負担分</td></tr>
        <tr><td>介護保険料</td><td>▲ 0円</td><td>30歳のため非対象（40歳から）</td></tr>
        <tr><td>子ども・子育て支援金</td><td>▲ 437円</td><td>2026年4月から新設</td></tr>
        <tr><td>厚生年金保険料</td><td>▲ 34,770円</td><td>料率18.3%（労使折半）</td></tr>
        <tr><td>雇用保険料</td><td>▲ 1,950円</td><td>料率0.5%（交通費込み390,000円で計算）</td></tr>
        <tr><td>所得税</td><td>▲ 9,530円</td><td>源泉徴収（甲欄・扶養0人）</td></tr>
        <tr><td>住民税</td><td>▲ 15,000円</td><td>前年所得から計算</td></tr>
        <tr class="total-row"><td>控除合計</td><td>▲ 80,402円</td><td></td></tr>
        <tr class="net-row"><td>💰 手取り（差引支給額）</td><td>309,598円</td><td></td></tr>
      </tbody>
    </table>
  </div>

  <div class="highlight-box green">
    <div class="box-title">✅ ポイント</div>
    月収38万円（総支給39万円）で、手取りは約31万円。控除率は約21%。住民税が加わる30代は、新卒より天引き額が多くなります。
  </div>

  <div class="cta-box">
    <p>あなたの月収・年齢・住民税で正確にシミュレーション</p>
    <a href="../index.php?salary=380000&age=30&resident_tax=15000" class="cta-btn">この条件で計算する →</a>
    <a href="../reverse.php?target_net=300000&age=30&resident_tax=15000" class="cta-btn secondary">手取り30万の月収を逆算 →</a>
  </div>

  <!-- ② 逆算 -->
  <h2 id="reverse">② 手取り30万円に必要な月収の逆算</h2>

  <p>「手取り30万円」を達成するために必要な月収は、年齢・扶養・住民税によって変わります。</p>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>条件</th><th>必要な月収の目安</th></tr>
      </thead>
      <tbody>
        <tr><td>25歳・扶養なし・住民税0円（入社1年目）</td><td>約 362,000円</td></tr>
        <tr><td>30歳・扶養なし・住民税15,000円</td><td>約 381,000円</td></tr>
        <tr><td>35歳・扶養1人・住民税20,000円</td><td>約 374,000円</td></tr>
        <tr><td>42歳・扶養1人・住民税20,000円（介護保険あり）</td><td>約 395,000円</td></tr>
      </tbody>
    </table>
  </div>

  <p>住民税・扶養・介護保険の有無によって、必要な月収は3〜5万円ほど変わります。<strong>転職先の年収提示を受けたら、まず手取りに換算して確認</strong>することが重要です。</p>

  <div class="related-link-box">
    <a href="../reverse.php?target_net=300000&age=30&resident_tax=15000">🔄 手取り30万円になる月収を逆算シミュレーターで確認する →</a>
  </div>

  <!-- ③ 転職交渉 -->
  <h2 id="negotiation">③ 転職・年収交渉での活用法</h2>

  <h3>求人票の「月収◯万円」は手取りではない</h3>
  <p>求人票に記載されている月収は「額面（税込み）」です。そこから社会保険料・所得税・住民税が引かれた金額が実際に受け取れる手取りです。<strong>「月収40万円」の求人なら、手取りは約32〜33万円</strong>が目安です。</p>

  <h3>年収交渉時の目安月収を計算する</h3>
  <p>「手取りでいくら欲しいか」を決めてから逆算シミュレーターで必要な月収を出し、それを基に希望年収を提示するのが交渉を有利に進めるコツです。</p>

  <div class="highlight-box">
    <div class="box-title">💡 交渉時の計算例</div>
    手取り35万円が目標 → 逆算で月収約45万円が必要 → 年収交渉目標は540万円（賞与別）
  </div>

  <h3>転職後の住民税の空白期間に注意</h3>
  <p>前職の住民税は特別徴収（給与天引き）されていますが、転職すると一時的に普通徴収（自分で納付）に切り替わる場合があります。転職後数ヶ月間は住民税の通知書が自宅に届き、自分で支払う必要があるケースがあります。</p>

  <!-- ④ 年代別比較 -->
  <h2 id="compare">④ 20代・30代・40代の手取り比較</h2>

  <p>同じ月収38万円でも、年代によって手取りが変わります。</p>

  <div class="table-wrap">
    <table>
      <thead>
        <tr><th>年代・条件</th><th>健康保険</th><th>介護保険</th><th>厚生年金</th><th>手取り目安</th></tr>
      </thead>
      <tbody>
        <tr><td>25歳・住民税なし</td><td>18,715円</td><td>0円</td><td>34,770円</td><td>約 321,000円</td></tr>
        <tr><td>30歳・住民税15,000円</td><td>18,715円</td><td>0円</td><td>34,770円</td><td>約 309,000円</td></tr>
        <tr><td>42歳・住民税20,000円</td><td>18,715円</td><td>3,080円</td><td>34,770円</td><td>約 297,000円</td></tr>
      </tbody>
    </table>
  </div>

  <p>40歳を超えると介護保険料が加わるため、同じ月収でも手取りが約3,000円減ります。年収交渉の際は自分の年齢・扶養状況を必ず加味してください。</p>

  <!-- ⑤ FAQ -->
  <h2 id="faq">⑤ よくある質問</h2>

  <h3>Q. 転職すると手取りが下がることはある？</h3>
  <p>あります。月収が上がっても所得税・住民税が増えるため、手取りの増加幅は期待より小さいことが多いです。また前職の会社が負担していた手当（家賃補助等）がなくなるケースも注意が必要です。</p>

  <h3>Q. 手取り30万円の年収換算は？</h3>
  <p>月の手取り30万円なら年間約360万円。ただし賞与も手取りに換算すると（賞与は所得税の計算方法が異なります）、額面年収600〜700万円が手取り年収450〜500万円程度の目安です。</p>

  <h3>Q. 交通費は手取りに含まれる？</h3>
  <p>交通費（通勤手当）は非課税枠（月15万円まで）の範囲であれば所得税の計算には含まれませんが、<strong>社会保険料・雇用保険の計算には含まれます</strong>。そのため「月収38万円＋交通費1万円」の場合、社保は39万円で計算します。</p>

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
    <a href="../reverse.php?target_net=300000&age=30&resident_tax=15000" class="cta-btn">手取り30万の月収を逆算 →</a>
    <a href="../index.php?salary=380000&age=30&resident_tax=15000" class="cta-btn secondary">月収38万の手取りを計算 →</a>
  </div>

  <div class="related-articles">
    <h2>関連記事</h2>
    <div class="related-grid">
      <a href="./teguchi-20man.php" class="related-card">
        <div class="related-card__label">給与明細・実例</div>
        <div class="related-card__title">手取り20万円の給与明細を公開｜初任給・新卒の天引き額はいくら？【2026年版】</div>
      </a>
      <a href="./nenshu-1000man.php" class="related-card">
        <div class="related-card__label">給与明細・実例</div>
        <div class="related-card__title">年収1000万円の手取りはいくら？給与明細の内訳と税負担を公開【2026年版】</div>
      </a>
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <div class="related-card__label">社会保険</div>
        <div class="related-card__title">社会保険料の計算方法とは？健康保険・厚生年金・雇用保険の仕組みをわかりやすく解説【2026年版】</div>
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
