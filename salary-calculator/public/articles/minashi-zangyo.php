<?php
$page_title = "みなし残業代（固定残業代）とは？違法なケース・超過分の請求方法【2026年版】";
$page_description = "みなし残業代（固定残業代）の仕組み・有効条件・違法になるケースを解説。超過分の計算方法・請求手順、自分の固定残業代が適正かチェックできるリスト付き。";
$canonical_url = "https://calc.pfp.tokyo/articles/minashi-zangyo.php";
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

  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3745259041113437"
      crossorigin="anonymous"></script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "<?= htmlspecialchars($page_title) ?>",
    "description": "<?= htmlspecialchars($page_description) ?>",
    "url": "<?= htmlspecialchars($canonical_url) ?>",
    "publisher": { "@type": "Organization", "name": "株式会社PFP", "url": "https://pfp.co.jp" }
  }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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

    .article-label { display: inline-block; background: #e8f0fb; color: #1a6fb3; font-size: 12px; font-weight: 700; padding: 3px 10px; border-radius: 4px; margin-bottom: 12px; }
    h1 { font-size: 26px; line-height: 1.5; color: #1a1a2e; margin-bottom: 14px; }
    .article-lead { font-size: 16px; color: #555; margin-bottom: 24px; }

    .toc { background: #f0f4f8; border-left: 4px solid #1a6fb3; border-radius: 0 8px 8px 0; padding: 20px 24px; margin: 28px 0; }
    .toc__title { font-size: 14px; font-weight: 700; color: #1a6fb3; margin-bottom: 10px; }
    .toc ol { padding-left: 20px; }
    .toc li { font-size: 14px; margin-bottom: 5px; }
    .toc a { color: #333; text-decoration: none; }
    .toc a:hover { color: #1a6fb3; text-decoration: underline; }

    h2 { font-size: 21px; color: #1a1a2e; border-bottom: 3px solid #1a6fb3; padding-bottom: 8px; margin: 40px 0 18px; }
    h3 { font-size: 18px; color: #1a3a5c; margin: 28px 0 12px; padding-left: 12px; border-left: 3px solid #4a9fd4; }
    p { margin-bottom: 16px; }

    .highlight-box { background: #fff8e1; border: 1px solid #ffc107; border-radius: 8px; padding: 18px 22px; margin: 20px 0; }
    .highlight-box--warning { background: #fff0f0; border-color: #f87171; }
    .highlight-box--warning .box-title { color: #b91c1c; }
    .box-title { font-weight: 700; font-size: 15px; margin-bottom: 8px; color: #7b5800; }

    .table-wrap { overflow-x: auto; margin: 20px 0; }
    table { width: 100%; border-collapse: collapse; font-size: 15px; }
    thead th { background: #1a6fb3; color: #fff; padding: 12px 16px; text-align: left; }
    tbody td { padding: 11px 16px; border-bottom: 1px solid #e8edf2; }
    tbody tr:nth-child(even) td { background: #f5f8fc; }
    tbody tr:hover td { background: #eaf2ff; }

    .formula-box { background: #1a1a2e; color: #e8f0fb; border-radius: 8px; padding: 18px 22px; margin: 20px 0; font-family: monospace; font-size: 15px; line-height: 2; }
    .example-box { background: #f0f9ff; border: 1px solid #bae6fd; border-radius: 8px; padding: 18px 22px; margin: 20px 0; }
    .example-box .box-title { color: #0369a1; }

    .checklist { margin: 20px 0; }
    .checklist__item { display: flex; align-items: flex-start; gap: 12px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 16px; margin-bottom: 10px; cursor: pointer; font-size: 15px; }
    .checklist__item input[type="checkbox"] { margin-top: 3px; width: 18px; height: 18px; accent-color: #153987; flex-shrink: 0; cursor: pointer; }
    .checklist__item:has(input:checked) { background: #e8f5e9; border-color: #a5d6a7; }

    .cta-block { background: linear-gradient(135deg, #1a6fb3 0%, #0d4e8a 100%); border-radius: 12px; padding: 30px 32px; text-align: center; margin: 36px 0; color: #fff; }
    .cta-block h3 { font-size: 20px; color: #fff; border-left: none; padding-left: 0; margin: 0 0 10px; }
    .cta-block p { font-size: 15px; margin-bottom: 20px; opacity: 0.9; }
    .cta-btn { display: inline-block; background: #ff6b35; color: #fff; font-size: 17px; font-weight: 700; padding: 14px 36px; border-radius: 30px; text-decoration: none; box-shadow: 0 4px 14px rgba(255,107,53,.4); transition: transform 0.15s, box-shadow 0.15s; }
    .cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255,107,53,.5); }
    .cta-sub { font-size: 12px; opacity: 0.75; margin-top: 10px; margin-bottom: 0; }

    .faq-item { border: 1px solid #e0e7ef; border-radius: 8px; margin-bottom: 14px; overflow: hidden; }
    .faq-q { background: #f0f4f8; padding: 16px 20px; font-weight: 700; font-size: 15px; display: flex; align-items: flex-start; gap: 10px; }
    .faq-q::before { content: "Q"; background: #1a6fb3; color: #fff; border-radius: 4px; padding: 1px 7px; font-size: 13px; flex-shrink: 0; }
    .faq-a { padding: 16px 20px; font-size: 15px; display: flex; gap: 10px; }
    .faq-a::before { content: "A"; background: #ff6b35; color: #fff; border-radius: 4px; padding: 1px 7px; font-size: 13px; flex-shrink: 0; }

    .related-articles { margin-top: 40px; border-top: 2px solid #e0e7ef; padding-top: 28px; }
    .related-articles h2 { font-size: 18px; border-bottom: none; padding-bottom: 0; margin-top: 0; margin-bottom: 16px; }
    .related-grid { display: grid; gap: 12px; }
    .related-card { display: block; background: #f5f8fc; border: 1px solid #d0dcea; border-radius: 8px; padding: 16px 20px; text-decoration: none; color: inherit; transition: background 0.2s; }
    .related-card:hover { background: #e8f0fb; }
    .related-card__label { font-size: 11px; color: #fe8d27; font-weight: 700; margin-bottom: 4px; display: block; }
    .related-card__title { font-size: 14px; font-weight: 700; color: #1a1a2e; display: block; margin-bottom: 6px; }
    .related-card__arrow { font-size: 13px; color: #1a6fb3; }

    footer { background: #1a1a2e; color: #aaa; text-align: center; padding: 24px; font-size: 13px; }
    footer a { color: #aaa; text-decoration: none; }
    footer a:hover { color: #fff; }

    ol, ul { padding-left: 1.4em; margin-bottom: 16px; }
    li { margin-bottom: 6px; }

    @media (max-width: 640px) {
      article { padding: 24px 18px; }
      h1 { font-size: 21px; }
      h2 { font-size: 18px; }
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
  みなし残業代（固定残業代）とは
</div>

<main>
  <article>
    <span class="article-label">給与・労働時間</span>
    <h1><?= htmlspecialchars($page_title) ?></h1>
    <p class="article-lead">
      「月給に残業代込み」「固定残業代40時間分含む」——求人票や雇用契約でよく目にする表現ですが、
      その仕組みや落とし穴を正しく理解している人は多くありません。
      超過分の請求権、違法になるケース、自分の契約が適正かどうかの確認方法を解説します。
    </p>

    <nav class="toc">
      <p class="toc__title">目次</p>
      <ol>
        <li><a href="#what">みなし残業代（固定残業代）とは？</a></li>
        <li><a href="#valid">有効とされる3つの条件</a></li>
        <li><a href="#illegal">違法・無効になるケース</a></li>
        <li><a href="#excess">超過分の計算方法と請求手順</a></li>
        <li><a href="#simulation">固定残業時間・年収別シミュレーション</a></li>
        <li><a href="#checklist">自分の固定残業代は適正か？チェックリスト</a></li>
        <li><a href="#faq">よくある質問（FAQ）</a></li>
      </ol>
    </nav>

    <h2 id="what">1. みなし残業代（固定残業代）とは？</h2>
    <p>
      <strong>みなし残業代（固定残業代）</strong>とは、あらかじめ一定時間分の残業代を月給に組み込んでおく賃金制度です。
      「月給30万円（固定残業代40時間分含む）」のような形で求人票や雇用契約書に記載されます。
    </p>
    <p>
      制度の目的は給与計算の簡略化です。毎月の残業時間が変動しても、設定した時間内であれば追加計算不要で支払いが完了します。
      労働基準法上は「定額残業代」とも呼ばれ、一定の要件を満たせば適法な制度です。
    </p>

    <div class="highlight-box">
      <div class="box-title">📌 「残業代込み」と「固定残業代」の違い</div>
      <p style="margin:0;">
        「残業代込み」という表現は曖昧で、何時間分がいくら含まれているか不明な場合は<strong>法律上無効</strong>になりえます。
        適法な固定残業代には「〇時間分として△△円」という明示が必要です。
      </p>
    </div>

    <h2 id="valid">2. 有効とされる3つの条件</h2>
    <p>最高裁の判例（テックジャパン事件 2012年など）や厚生労働省の指針をもとに、固定残業代が有効とされるには以下の3条件が必要です。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>条件</th><th>具体的な要件</th></tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>① 時間数の明示</strong></td>
            <td>何時間分の残業代として支払うか、契約書・就業規則・給与明細に明示されている</td>
          </tr>
          <tr>
            <td><strong>② 金額の明示</strong></td>
            <td>固定残業代として支払う金額が明確に分かる（月給全体と別に区別できる）</td>
          </tr>
          <tr>
            <td><strong>③ 超過分の支払い約束</strong></td>
            <td>設定時間を超えた残業分は別途計算して支払う旨が明示されている</td>
          </tr>
        </tbody>
      </table>
    </div>

    <p>3条件すべてを満たさない場合、固定残業代部分は「基本給の一部」とみなされ、改めて残業代を計算・支払う義務が生じることがあります。</p>

    <h2 id="illegal">3. 違法・無効になるケース</h2>

    <h3>❌ 時間数・金額が明示されていない</h3>
    <p>
      「残業代込み」「諸手当含む」などの曖昧な表現だけで、何時間分がいくらかを示さない場合は無効です。
      この場合、固定残業代として支払われてきた金額は基本給扱いとなり、改めて残業代を計算した差額を請求できる可能性があります。
    </p>

    <h3>❌ 超過分を「固定残業代の範囲内」として支払わない</h3>
    <p>
      「40時間分を超えても追加払いはしない」という運用は明確な労働基準法違反です（37条）。
      固定残業代はあくまで「設定時間内の前払い」であり、超過分の支払い義務はなくなりません。
    </p>

    <h3>❌ 設定時間が著しく長い（過大なみなし残業）</h3>
    <p>
      80時間・100時間といった過大な固定残業時間の設定は、時間外労働の上限規制（原則月45時間・年360時間）に違反する可能性があります。
      また、実際に長時間労働が常態化している場合は過労死ラインとの関係でも問題になります。
    </p>

    <h3>❌ 最低賃金を下回る</h3>
    <p>
      固定残業代を除いた基本給部分が最低賃金を下回る場合は違法です。
      東京都の最低賃金（2024年度：1,163円/時）を基準に確認が必要です。
    </p>

    <div class="highlight-box highlight-box--warning">
      <div class="box-title">⚠ 合法・違法の判断基準まとめ</div>
      <ul style="margin:0; padding-left:1.2em;">
        <li>時間数・金額が書面で明示されている → 合法の可能性あり</li>
        <li>超過分を別途払うと明記されている → 合法の可能性あり</li>
        <li>固定残業時間が月45時間超 → 上限規制との整合性を要確認</li>
        <li>時間数・金額が不明 → 無効の可能性大</li>
        <li>超過分を払わない → 労基法37条違反</li>
      </ul>
    </div>

    <h2 id="excess">4. 超過分の計算方法と請求手順</h2>

    <h3>超過分残業代の計算式</h3>
    <p>固定残業時間を超えた分の残業代は、通常の残業代計算と同じ方法で求めます。</p>

    <div class="formula-box">
      <p><strong>時給 ＝ 月給（固定残業代を除く基本給） ÷ 月の所定労働時間</strong></p>
      <p><strong>超過残業代 ＝ 時給 × 割増率 × 超過時間数</strong></p>
    </div>

    <div class="example-box">
      <div class="box-title">【計算例】月給30万円・固定残業40時間・実残業55時間の場合</div>
      <ul>
        <li>月給：30万円（うち固定残業代4万円・40時間分）</li>
        <li>基本給：26万円 ／ 月所定労働時間：160時間</li>
        <li>実際の残業：55時間（固定40時間超の<strong>15時間が未払い</strong>）</li>
      </ul>
      <p style="margin-top:12px;">
        <strong>時給</strong> ＝ 260,000 ÷ 160 ＝ 1,625円<br>
        <strong>超過分（15時間）</strong> ＝ 1,625 × 1.25 × 15 ＝ <strong>30,469円</strong>
      </p>
      <p style="margin:0; color:#666; font-size:13px;">※月45時間超の残業は割増率1.5倍（大企業は60時間超から適用）</p>
    </div>

    <h3>超過分を請求する手順</h3>
    <ol>
      <li><strong>タイムカード・勤怠記録を取得</strong>する（証拠保全が最優先）</li>
      <li>固定残業時間との差分を計算し、<strong>未払い額を算出</strong>する</li>
      <li>会社の<strong>給与担当・人事部に書面で請求</strong>する</li>
      <li>応じない場合は<strong>労働基準監督署に申告</strong>または<strong>労働審判・訴訟</strong>へ</li>
    </ol>
    <p>未払い残業代の時効は<strong>3年</strong>（2020年4月以降発生分）。過去3年分を遡って請求できます。</p>

    <h2 id="simulation">5. 固定残業時間・年収別シミュレーション</h2>
    <p>月給に含まれる固定残業代の適正額の目安です。契約書の金額と照合してください。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>月給（基本給）</th>
            <th>時給換算<br><small>（÷160時間）</small></th>
            <th>固定20時間分<br>（×1.25）</th>
            <th>固定40時間分<br>（×1.25）</th>
            <th>固定60時間分<br>（×1.25）</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>20万円</td><td>1,250円</td><td>31,250円</td><td>62,500円</td><td>93,750円</td></tr>
          <tr><td>25万円</td><td>1,563円</td><td>39,063円</td><td>78,125円</td><td>117,188円</td></tr>
          <tr><td>30万円</td><td>1,875円</td><td>46,875円</td><td>93,750円</td><td>140,625円</td></tr>
          <tr><td>35万円</td><td>2,188円</td><td>54,688円</td><td>109,375円</td><td>164,063円</td></tr>
          <tr><td>40万円</td><td>2,500円</td><td>62,500円</td><td>125,000円</td><td>187,500円</td></tr>
          <tr><td>50万円</td><td>3,125円</td><td>78,125円</td><td>156,250円</td><td>234,375円</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size:13px; color:#666;">※所定労働時間160時間・割増率1.25倍（法定時間外）で計算。深夜・休日割増は含みません。</p>

    <div class="cta-block">
      <h3>残業代が増えると手取りはどう変わる？</h3>
      <p>残業代が増えると社会保険料や所得税も変わります。給与手取り計算ツールでシミュレーションできます。</p>
      <a href="<?= htmlspecialchars($calc_url) ?>" class="cta-btn">給与手取り計算ツール →</a>
      <p class="cta-sub">東京・協会けんぽ前提。無料でご利用いただけます。</p>
    </div>

    <h2 id="checklist">6. 自分の固定残業代は適正か？チェックリスト</h2>
    <p>以下の項目をすべて確認しましょう。ひとつでも「×」があれば要注意です。</p>

    <div class="checklist">
      <label class="checklist__item">
        <input type="checkbox">
        <span>雇用契約書・労働条件通知書に「固定残業〇時間分・△△円」と明記されている</span>
      </label>
      <label class="checklist__item">
        <input type="checkbox">
        <span>給与明細で固定残業代の金額が基本給と区別して記載されている</span>
      </label>
      <label class="checklist__item">
        <input type="checkbox">
        <span>固定残業時間を超えた月は、超過分が別途支払われている（または支払うと明記されている）</span>
      </label>
      <label class="checklist__item">
        <input type="checkbox">
        <span>固定残業時間が月45時間以下である（超える場合は特別条項の有無を確認）</span>
      </label>
      <label class="checklist__item">
        <input type="checkbox">
        <span>固定残業代を除いた基本給が、東京都の最低賃金（1,163円×月所定労働時間）を上回っている</span>
      </label>
      <label class="checklist__item">
        <input type="checkbox">
        <span>上記シミュレーション表と比較して、固定残業代の金額が著しく低くない</span>
      </label>
    </div>

    <h2 id="faq">7. よくある質問（FAQ）</h2>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q">「基本給＋諸手当」と書いてあるだけで時間数が不明です</div>
        <div class="faq-a">固定残業代として有効とは認められない可能性が高いです。「諸手当」の内訳・時間数・金額を会社に書面で確認しましょう。明示がなければ、給与全額を基に残業代を計算した差額を請求できる場合があります。</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">固定残業代40時間分なのに毎月60〜70時間残業しています</div>
        <div class="faq-a">超過した20〜30時間分は別途支払い義務があります。タイムカードや勤怠記録を保存し、差額を計算した上で会社に請求してください。応じない場合は労働基準監督署への申告が有効です。60時間超の残業が恒常化している場合は上限規制との関係も問題になります。</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">固定残業代40時間分・5万円と書いてあるが計算が合わない気がします</div>
        <div class="faq-a">基本給25万円・所定160時間なら40時間分の適正額は約7.8万円です（25万÷160×1.25×40時間）。5万円では不足している可能性があります。差額分は未払い残業代として請求できる場合があります。</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">転職先の求人に「月給30万円（固定残業代含む）」とあります。確認すべきですか？</div>
        <div class="faq-a">必ず確認すべきです。何時間分がいくら含まれているかで実質的な基本給が大きく変わります。内定前・内定後のいずれの段階でも、書面での確認を求めることは適切な行動です。</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">管理職でもみなし残業の仕組みは適用されますか？</div>
        <div class="faq-a">労働基準法上の「管理監督者」に該当する場合は時間外割増賃金の規定が適用外のため、固定残業代の概念そのものが当てはまりません。ただし「管理職」という肩書きだけでは管理監督者に当たらないケースが多く、実態（経営参画・労働時間の裁量・高い待遇）で判断されます。</div>
      </div>
    </div>

    <div class="related-articles">
      <h2>関連記事</h2>
      <div class="related-grid">
        <a href="./zangyo-dai.php" class="related-card">
          <span class="related-card__label">給与・労働時間</span>
          <span class="related-card__title">残業代（時間外手当）の計算方法とは？割増賃金率・計算式をわかりやすく解説</span>
          <span class="related-card__arrow">続きを読む →</span>
        </a>
        <a href="./kyuyo-meisai-mikata.php" class="related-card">
          <span class="related-card__label">給与・基礎知識</span>
          <span class="related-card__title">給与明細の見方・読み方【完全ガイド】各項目の意味を徹底解説</span>
          <span class="related-card__arrow">続きを読む →</span>
        </a>
      </div>
    </div>

  </article>
</main>

<footer>
  <p>© 株式会社PFP ｜ <a href="https://pfp.co.jp">pfp.co.jp</a></p>
</footer>

</body>
</html>
