<?php
// 子ども・子育て支援金 解説記事ページ
$page_title = "子ども・子育て支援金とは？2026年4月から始まる新負担をわかりやすく解説";
$page_description = "2026年4月から始まる子ども・子育て支援金制度を徹底解説。月額負担額の目安、年収別シミュレーション、手取りへの影響、使途まで詳しく説明します。";
$canonical_url = "https://calc.pfp.tokyo/articles/kodomo-shienkin.php";
$calc_url = "https://calc.pfp.tokyo/index.php";
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
    "datePublished": "2026-04-22",
    "dateModified": "2026-04-22",
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

    /* ヘッダー */
    header {
      background: linear-gradient(135deg, #ffffff 0%, #ffffff 100%);
      color: #fff;
      padding: 0;
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
      color: #fff;
      opacity: 0.9;
    }
    .header-cta {
      background: #ff6b35;
      color: #fff;
      padding: 8px 18px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 700;
      text-decoration: none;
      white-space: nowrap;
      transition: background 0.2s;
    }
    .header-cta:hover { background: #e55a24; }

    /* パンくず */
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

    /* メインコンテンツ */
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

    /* 記事ヘッダー */
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
    .article-meta {
      font-size: 13px;
      color: #888;
    }

    /* 目次 */
    .toc {
      background: #f0f4f8;
      border-left: 4px solid #1a6fb3;
      border-radius: 0 8px 8px 0;
      padding: 20px 24px;
      margin: 28px 0;
    }
    .toc-title {
      font-size: 14px;
      font-weight: 700;
      color: #1a6fb3;
      margin-bottom: 10px;
    }
    .toc ol {
      padding-left: 20px;
    }
    .toc li {
      font-size: 14px;
      margin-bottom: 5px;
    }
    .toc a {
      color: #333;
      text-decoration: none;
    }
    .toc a:hover { color: #1a6fb3; text-decoration: underline; }

    /* 見出し */
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

    /* ハイライトボックス */
    .highlight-box {
      background: #fff8e1;
      border: 1px solid #ffc107;
      border-radius: 8px;
      padding: 18px 22px;
      margin: 20px 0;
    }
    .highlight-box.blue {
      background: #e8f0fb;
      border-color: #1a6fb3;
    }
    .highlight-box .box-title {
      font-weight: 700;
      font-size: 15px;
      margin-bottom: 8px;
      color: #7b5800;
    }
    .highlight-box.blue .box-title { color: #1a6fb3; }

    /* テーブル */
    .table-wrap { overflow-x: auto; margin: 20px 0; }
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 15px;
    }
    thead th {
      background: #1a6fb3;
      color: #fff;
      padding: 12px 16px;
      text-align: left;
    }
    tbody td {
      padding: 11px 16px;
      border-bottom: 1px solid #e8edf2;
    }
    tbody tr:nth-child(even) td { background: #f5f8fc; }
    tbody tr:hover td { background: #eaf2ff; }

    /* CTA ブロック */
    .cta-block {
      background: linear-gradient(135deg, #1a6fb3 0%, #0d4e8a 100%);
      border-radius: 12px;
      padding: 30px 32px;
      text-align: center;
      margin: 36px 0;
      color: #fff;
    }
    .cta-block h3 {
      font-size: 20px;
      color: #fff;
      border-left: none;
      padding-left: 0;
      margin: 0 0 10px;
    }
    .cta-block p {
      font-size: 15px;
      margin-bottom: 20px;
      opacity: 0.9;
    }
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
    .cta-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255,107,53,.5);
    }
    .cta-sub {
      font-size: 12px;
      opacity: 0.75;
      margin-top: 10px;
      margin-bottom: 0;
    }

    /* FAQ */
    .faq-item {
      border: 1px solid #e0e7ef;
      border-radius: 8px;
      margin-bottom: 14px;
      overflow: hidden;
    }
    .faq-q {
      background: #f0f4f8;
      padding: 16px 20px;
      font-weight: 700;
      font-size: 15px;
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }
    .faq-q::before {
      content: "Q";
      background: #1a6fb3;
      color: #fff;
      border-radius: 4px;
      padding: 1px 7px;
      font-size: 13px;
      flex-shrink: 0;
    }
    .faq-a {
      padding: 16px 20px;
      font-size: 15px;
      display: flex;
      gap: 10px;
    }
    .faq-a::before {
      content: "A";
      background: #ff6b35;
      color: #fff;
      border-radius: 4px;
      padding: 1px 7px;
      font-size: 13px;
      flex-shrink: 0;
    }

    /* フッター */
    footer {
      background: #1a1a2e;
      color: #aaa;
      text-align: center;
      padding: 24px 20px;
      font-size: 13px;
    }
    footer a { color: #7ab3e0; text-decoration: none; }

    @media (max-width: 600px) {
      article { padding: 24px 18px; }
      h1 { font-size: 20px; }
      h2 { font-size: 18px; }
      .cta-block { padding: 24px 18px; }
      .cta-btn { font-size: 15px; padding: 12px 24px; }
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
  子ども・子育て支援金とは
</div>

<main>
<article>

  <header class="article-header">
    <span class="article-label">社会保険・給与解説</span>
    <h1>子ども・子育て支援金とは？<br>2026年4月から始まる新たな給与天引きをわかりやすく解説</h1>
    <p class="article-meta">公開日：2026年4月22日　情報源：こども家庭庁・厚生労働省</p>
  </header>

  <div class="highlight-box">
    <div class="box-title">📌 この記事のポイント</div>
    <ul style="padding-left: 18px; margin: 0;">
      <li>子ども・子育て支援金は2026年4月から健康保険料に上乗せして徴収開始</li>
      <li>会社員の給与天引きは<strong>2026年5月支給分から</strong>スタート</li>
      <li>月給30万円の人の負担増は約<strong>345円/月</strong>（全国平均は約250円/月）</li>
      <li>子どもの有無・既婚・未婚を問わず、原則全員が対象</li>
    </ul>
  </div>

  <nav class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#what">子ども・子育て支援金とは</a></li>
      <li><a href="#who">誰が・いつから負担するのか</a></li>
      <li><a href="#amount">月額の負担額シミュレーション</a></li>
      <li><a href="#impact">手取りへの影響</a></li>
      <li><a href="#usage">支援金の使われ方</a></li>
      <li><a href="#faq">よくある疑問（FAQ）</a></li>
      <li><a href="#calc">自分の手取りを計算してみる</a></li>
    </ol>
  </nav>

  <!-- ① 制度概要 -->
  <section id="what">
    <h2>① 子ども・子育て支援金とは</h2>
    <p>
      「子ども・子育て支援金」は、2023年12月に閣議決定された<strong>「こども未来戦略」</strong>の一環として創設された新しい公的負担制度です。
      政府が掲げる「こども・子育て支援加速化プラン」（2028年度までに3.6兆円規模）の財源として、医療保険料に上乗せする形で徴収されます。
    </p>
    <p>
      根拠法は<strong>「子ども・子育て支援法等の一部を改正する法律」（令和6年6月成立）</strong>で、制度の主務官庁はこども家庭庁です。
    </p>
    <div class="highlight-box blue">
      <div class="box-title">💡 一言で言うと</div>
      社会全体で子育てを支えるため、健康保険料に新たに上乗せされる負担です。
      税ではなく社会保険料の一種であり、子どもがいない世帯・独身者も負担します。
    </div>
  </section>

  <!-- ② 対象・時期 -->
  <section id="who">
    <h2>② 誰が・いつから負担するのか</h2>

    <h3>徴収開始時期</h3>
    <p>
      <strong>2026年4月分の医療保険料</strong>から徴収が始まります。
      会社員（被用者保険加入者）の場合、給与天引きは翌月払いが一般的なため、
      実質的には<strong>2026年5月支給の給与から天引き</strong>されることになります。
    </p>

    <h3>対象者</h3>
    <p>日本の公的医療保険（健康保険・国民健康保険・後期高齢者医療保険）に加入するすべての人が対象です。</p>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>加入する医療保険</th><th>主な対象者</th><th>徴収方法</th></tr>
        </thead>
        <tbody>
          <tr><td>健康保険（協会けんぽ・組合健保）</td><td>会社員・公務員</td><td>給与天引き（労使折半）</td></tr>
          <tr><td>国民健康保険</td><td>自営業者・フリーランス</td><td>保険料と合算して納付</td></tr>
          <tr><td>後期高齢者医療保険</td><td>75歳以上</td><td>年金天引き等</td></tr>
        </tbody>
      </table>
    </div>

    <div class="highlight-box">
      <div class="box-title">⚠️ 注意：子どもがいても負担あり</div>
      給付を受ける子育て世帯も負担対象です。ただし<strong>国民健康保険加入者</strong>で18歳年度末までの子どもがいる場合、その子ども分の支援金は全額免除されます。
    </div>
  </section>

  <!-- ③ 金額シミュレーション -->
  <section id="amount">
    <h2>③ 月額の負担額シミュレーション</h2>

    <h3>支援金率と計算方法</h3>
    <p>
      支援金率は全国一律で<strong>0.23%</strong>（2026年度）。
      会社員は労使折半のため、<strong>従業員の実質負担率は約0.115%</strong>です。
    </p>
    <p>
      <strong>計算式：</strong>標準報酬月額 × 0.23% ÷ 2（労使折半）= 月額負担額
    </p>

    <h3>年収別の月額負担目安（会社員）</h3>
    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>年収の目安</th>
            <th>標準報酬月額</th>
            <th>月額負担（従業員分）</th>
            <th>年間負担額</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>約240万円</td><td>20万円</td><td>約230円</td><td>約2,760円</td></tr>
          <tr><td>約360万円</td><td>30万円</td><td>約345円</td><td>約4,140円</td></tr>
          <tr><td>約480万円</td><td>40万円</td><td>約460円</td><td>約5,520円</td></tr>
          <tr><td>約600万円</td><td>50万円</td><td>約575円</td><td>約6,900円</td></tr>
          <tr><td>約720万円</td><td>62万円</td><td>約713円</td><td>約8,556円</td></tr>
          <tr><td>約1,000万円</td><td>83万円</td><td>約955円</td><td>約11,460円</td></tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 13px; color: #666;">※ 標準報酬月額は実際の月給に基づき、等級に応じて決定されます。賞与からも同率で徴収されます。全国平均は月約250円（年約3,000円）。</p>
  </section>

  <!-- CTA ブロック（中間） -->
  <div class="cta-block">
    <h3>実際に手取りがいくら減る？</h3>
    <p>月給・年齢・扶養人数を入れるだけで、社保・所得税込みの手取りを自動計算。<br>支援金導入後の手取り変化もかんたんに把握できます。</p>
    <a class="cta-btn" href="<?= htmlspecialchars($calc_url) ?>">→ 無料で手取りを計算する</a>
    <p class="cta-sub">登録不要・東京・協会けんぽ基準</p>
  </div>

  <!-- ④ 手取りへの影響 -->
  <section id="impact">
    <h2>④ 手取りへの影響</h2>

    <p>
      子ども・子育て支援金は<strong>社会保険料控除の対象</strong>となる見込みで、
      所得税・住民税の計算において控除として機能します。
      そのため、額面上の天引き額より実質的な手取り減少は若干少なくなります。
    </p>

    <div class="highlight-box blue">
      <div class="box-title">📊 月給30万円（標準報酬30万円）の場合の例</div>
      <ul style="padding-left: 18px; margin: 8px 0 0;">
        <li>支援金（総額）：300,000円 × 0.23% = <strong>690円</strong></li>
        <li>従業員負担分：690円 ÷ 2 = <strong>345円/月</strong></li>
        <li>年間負担：約<strong>4,140円</strong></li>
        <li>所得控除効果を加味した実質負担：約<strong>270〜310円/月</strong>程度</li>
      </ul>
    </div>

    <p>
      「たった345円」と感じる方も、「毎月の天引きが増えるのは困る」と感じる方もいるでしょう。
      大切なのは、この負担が今後の給与にどう影響するかを把握しておくことです。
    </p>
    <p>
      なお、2027年度以降は段階的に負担率が引き上げられる予定で、
      2028年度には現在の約2倍程度の水準（年間6,000〜7,000円前後）になる見込みです。
    </p>
  </section>

  <!-- ⑤ 使途 -->
  <section id="usage">
    <h2>⑤ 支援金の使われ方</h2>
    <p>徴収した支援金は「こども・子育て支援加速化プラン」の財源として使われます。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>施策</th><th>主な内容</th></tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>児童手当の拡充</strong></td>
            <td>所得制限撤廃・高校卒業まで延長・第3子以降3万円・年6回払いに変更（2024年10月〜）</td>
          </tr>
          <tr>
            <td><strong>出産・子育て応援</strong></td>
            <td>妊娠・出産時に計10万円の支援給付（2025年4月〜）</td>
          </tr>
          <tr>
            <td><strong>こども誰でも通園制度</strong></td>
            <td>保育園未利用の乳幼児も月10時間まで保育施設を利用可能に</td>
          </tr>
          <tr>
            <td><strong>育児休業給付の拡充</strong></td>
            <td>育休中の給付率引き上げ・育児時短就業給付の新設</td>
          </tr>
          <tr>
            <td><strong>児童発達支援等</strong></td>
            <td>障害のある子どもへの支援体制の強化</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- ⑥ FAQ -->
  <section id="faq">
    <h2>⑥ よくある疑問（FAQ）</h2>

    <div class="faq-item">
      <div class="faq-q">「独身税」と呼ばれているのはなぜですか？</div>
      <div class="faq-a">子どもの有無・既婚・未婚を問わず全員が負担するため、一部でそう呼ばれています。ただし正式名称は「子ども・子育て支援金」であり、税ではなく社会保険料の上乗せです。社会連帯の理念に基づく制度で、少子化対策の財源として国全体で支える仕組みです。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">給与明細のどこに表示されますか？</div>
      <div class="faq-a">法令上の義務はありませんが、健康保険料とは別に「子ども・子育て支援金」として表示する企業も増えています。健康保険料の合計欄に含まれる場合もあります。勤務先の給与担当部署にご確認ください。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">社会保険料控除の対象になりますか？</div>
      <div class="faq-a">健康保険料の一部として徴収されるため、社会保険料控除の対象となる見込みです。これにより、所得税・住民税の計算上は負担分が控除され、実質的な手取り減少は天引き額より少なくなります。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">賞与からも引かれますか？</div>
      <div class="faq-a">はい。月給だけでなく、賞与（ボーナス）からも同じ料率（従業員負担0.115%）で徴収されます。そのため、賞与が多い人ほど年間の実質負担額は増えます。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">今後さらに増える予定ですか？</div>
      <div class="faq-a">2026年度は0.23%（従業員0.115%）ですが、2028年度に向けて段階的に引き上げられる予定です。2028年度の最終規模は3.6兆円となる見込みで、それに応じて負担率も上昇します。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">自営業者・フリーランスはどう支払いますか？</div>
      <div class="faq-a">国民健康保険に加入している場合は、保険料と合算して市区町村に納付します。なお、18歳年度末までの子どもがいる世帯は、その子ども分の支援金が免除されます。</div>
    </div>
  </section>

  <!-- ⑦ CTA -->
  <section id="calc">
    <h2>⑦ 自分の手取りを計算してみよう</h2>
    <p>
      子ども・子育て支援金が始まると、給与の手取りは少し変わります。
      月給・年齢・交通費・扶養人数などを入れると、
      社会保険料・雇用保険・所得税を含めた<strong>手取り額の概算</strong>をすぐに確認できます。
    </p>
  </section>

</article>
</main>

<!-- 大きめCTA -->
<div style="background: #f0f4f8; padding: 40px 20px; text-align: center;">
  <div style="max-width: 600px; margin: 0 auto;">
    <p style="font-size: 15px; color: #555; margin-bottom: 6px;">支援金導入後の手取りが気になる方へ</p>
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
  <p style="margin-top: 8px;">※ 本記事の情報はこども家庭庁・厚生労働省の公表情報に基づきますが、制度変更が生じる場合があります。正確な情報は公式機関にご確認ください。</p>
  <p style="margin-top: 8px;">&copy; 2026 pfp.tokyo</p>
</footer>

</body>
</html>
