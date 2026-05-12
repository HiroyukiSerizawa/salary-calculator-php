<?php
$page_title = "給与明細の見方・読み方【完全ガイド】各項目の意味を徹底解説";
$page_description = "給与明細の支給・控除・差引支給額の各項目をわかりやすく解説。基本給・残業代・社会保険料・所得税・住民税など、毎月の給与明細を正しく読むための完全ガイドです。";
$canonical_url = "https://pfp.tokyo/calc/articles/kyuyo-meisai-mikata.php";
$calc_url = "https://pfp.tokyo/calc/";
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
    "headline": "給与明細の見方・読み方【完全ガイド】各項目の意味を徹底解説",
    "description": "給与明細の支給・控除・差引支給額の各項目をわかりやすく解説。",
    "author": { "@type": "Organization", "name": "給与手取り計算ツール" },
    "datePublished": "2026-05-11",
    "dateModified": "2026-05-11",
    "publisher": { "@type": "Organization", "name": "pfp.tokyo" }
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
      gap: 12px;
      flex-wrap: wrap;
    }
    .header-logo { font-size: 18px; font-weight: 700; color: #153987; text-decoration: none; }
    .header-sep { color: #bbb; }
    .header-nav a { font-size: 13px; color: #555; text-decoration: none; }
    .header-nav a:hover { color: #153987; }

    .container { max-width: 860px; margin: 0 auto; padding: 40px 20px 80px; }

    .article-header { margin-bottom: 36px; }
    .article-label {
      display: inline-block;
      background: #153987;
      color: #fff;
      font-size: 12px;
      font-weight: 600;
      padding: 3px 10px;
      border-radius: 4px;
      margin-bottom: 14px;
    }
    .article-header h1 {
      font-size: 28px;
      font-weight: 800;
      color: #153987;
      line-height: 1.4;
      margin-bottom: 12px;
    }
    .article-meta { font-size: 13px; color: #888; margin-bottom: 16px; }
    .article-lead {
      background: #eef2ff;
      border-left: 4px solid #153987;
      padding: 16px 20px;
      border-radius: 0 8px 8px 0;
      font-size: 15px;
      color: #333;
    }

    /* 目次 */
    .toc {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      padding: 24px 28px;
      margin: 32px 0;
    }
    .toc__title { font-size: 15px; font-weight: 700; color: #153987; margin-bottom: 12px; }
    .toc ol { padding-left: 20px; }
    .toc li { margin-bottom: 6px; }
    .toc a { color: #153987; font-size: 14px; text-decoration: none; }
    .toc a:hover { text-decoration: underline; }

    /* セクション */
    .section { margin-bottom: 48px; }
    .section h2 {
      font-size: 22px;
      font-weight: 800;
      color: #153987;
      border-bottom: 2px solid #153987;
      padding-bottom: 8px;
      margin-bottom: 20px;
    }
    .section h3 {
      font-size: 17px;
      font-weight: 700;
      color: #1e3a6e;
      margin: 24px 0 10px;
      padding-left: 10px;
      border-left: 3px solid #fe8d27;
    }
    .section p { margin-bottom: 14px; font-size: 15px; }

    /* 給与明細サンプル */
    .payslip {
      background: #fff;
      border: 2px solid #153987;
      border-radius: 12px;
      overflow: hidden;
      margin: 24px 0;
      box-shadow: 0 4px 16px rgba(21,57,135,0.08);
    }
    .payslip__header {
      background: #153987;
      color: #fff;
      padding: 14px 20px;
      font-weight: 700;
      font-size: 16px;
    }
    .payslip__body { padding: 20px; }
    .payslip__section-title {
      font-size: 13px;
      font-weight: 700;
      color: #153987;
      background: #eef2ff;
      padding: 6px 12px;
      border-radius: 4px;
      margin-bottom: 10px;
      margin-top: 16px;
    }
    .payslip__section-title:first-child { margin-top: 0; }
    .payslip__row {
      display: flex;
      justify-content: space-between;
      padding: 8px 4px;
      border-bottom: 1px solid #f0f0f0;
      font-size: 14px;
    }
    .payslip__row:last-child { border-bottom: none; }
    .payslip__label { color: #555; }
    .payslip__value { font-weight: 600; color: #333; }
    .payslip__value.deduction { color: #e53e3e; }
    .payslip__total {
      background: #153987;
      color: #fff;
      padding: 14px 20px;
      display: flex;
      justify-content: space-between;
      font-weight: 700;
      font-size: 16px;
    }

    /* テーブル */
    .data-table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      font-size: 14px;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }
    .data-table th {
      background: #153987;
      color: #fff;
      padding: 12px 14px;
      text-align: left;
      font-weight: 600;
    }
    .data-table td { padding: 11px 14px; border-bottom: 1px solid #e5e7eb; }
    .data-table tr:last-child td { border-bottom: none; }
    .data-table tr:nth-child(even) td { background: #f8f9fe; }

    /* ポイントボックス */
    .point-box {
      background: #fff7ed;
      border: 1px solid #fed7aa;
      border-radius: 10px;
      padding: 20px 24px;
      margin: 20px 0;
    }
    .point-box__title {
      font-size: 14px;
      font-weight: 700;
      color: #c05621;
      margin-bottom: 10px;
    }
    .point-box p { font-size: 14px; margin-bottom: 8px; }
    .point-box p:last-child { margin-bottom: 0; }

    /* 注意ボックス */
    .note-box {
      background: #f0fdf4;
      border: 1px solid #86efac;
      border-radius: 10px;
      padding: 20px 24px;
      margin: 20px 0;
    }
    .note-box__title { font-size: 14px; font-weight: 700; color: #166534; margin-bottom: 10px; }
    .note-box p { font-size: 14px; }

    /* 広告 */
    .ad-area {
      background: #fff;
      border-radius: 10px;
      padding: 16px;
      margin: 32px 0;
      text-align: center;
      min-height: 90px;
      border: 1px solid #e5e7eb;
    }

    /* CTAボタン */
    .cta-section {
      background: linear-gradient(135deg, #153987 0%, #1e4db7 100%);
      border-radius: 16px;
      padding: 36px 32px;
      color: #fff;
      text-align: center;
      margin: 48px 0;
    }
    .cta-section h2 { font-size: 20px; font-weight: 800; margin-bottom: 10px; }
    .cta-section p { font-size: 14px; opacity: 0.85; margin-bottom: 24px; }
    .cta-btn {
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
    .cta-btn:hover { opacity: 0.9; }

    /* 関連記事 */
    .related { margin-top: 48px; }
    .related__title { font-size: 18px; font-weight: 700; color: #153987; margin-bottom: 20px; }
    .related-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 16px; }
    .related-card {
      background: #fff;
      border-radius: 10px;
      border: 1px solid #e5e7eb;
      padding: 20px;
      text-decoration: none;
      color: inherit;
      transition: box-shadow 0.2s;
    }
    .related-card:hover { box-shadow: 0 4px 16px rgba(21,57,135,0.1); }
    .related-card__label { font-size: 11px; font-weight: 700; color: #fe8d27; margin-bottom: 6px; }
    .related-card__title { font-size: 14px; font-weight: 700; color: #153987; line-height: 1.5; }

    footer {
      background: #1a1a2e;
      color: #aaa;
      text-align: center;
      padding: 24px;
      font-size: 13px;
    }
    footer a { color: #aaa; text-decoration: none; }
    footer a:hover { color: #fff; }

    @media (max-width: 600px) {
      .article-header h1 { font-size: 21px; }
      .section h2 { font-size: 19px; }
      .related-grid { grid-template-columns: 1fr; }
      .cta-section { padding: 28px 20px; }
    }
  </style>
</head>
<body>

<header>
  <div class="header-inner">
    <a class="header-logo" href="https://pfp.tokyo/calc/">給与手取り計算</a>
    <span class="header-sep">›</span>
    <span class="header-nav"><a href="https://pfp.tokyo/calc/articles/">解説記事</a></span>
    <span class="header-sep">›</span>
    <span class="header-nav" style="color:#333;">給与明細の見方</span>
  </div>
</header>

<div class="container">

  <div class="article-header">
    <span class="article-label">給与・基礎知識</span>
    <h1>給与明細の見方・読み方【完全ガイド】<br>各項目の意味を徹底解説</h1>
    <div class="article-meta">2026年5月11日掲載 ｜ 令和8年（2026年）版</div>
    <div class="article-lead">
      毎月受け取る給与明細、「なぜこの金額が引かれているのか」を正確に把握していますか？本記事では、給与明細の<strong>支給・控除・差引支給額</strong>の各項目について、具体的な金額例を交えながらわかりやすく解説します。
    </div>
  </div>

  <!-- 目次 -->
  <div class="toc">
    <div class="toc__title">📋 この記事の目次</div>
    <ol>
      <li><a href="#structure">給与明細の基本構成</a></li>
      <li><a href="#kyuyo">支給欄の各項目</a></li>
      <li><a href="#kojo">控除欄の各項目</a></li>
      <li><a href="#sample">給与明細のサンプルと計算例</a></li>
      <li><a href="#check">確認すべき重要ポイント</a></li>
      <li><a href="#faq">よくある疑問</a></li>
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

  <!-- 1. 基本構成 -->
  <div class="section" id="structure">
    <h2>1. 給与明細の基本構成</h2>
    <p>給与明細は大きく3つのブロックで構成されています。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>ブロック</th>
          <th>内容</th>
          <th>代表的な項目</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>支給欄</strong></td>
          <td>会社から支払われる金額</td>
          <td>基本給、残業代、交通費、各種手当</td>
        </tr>
        <tr>
          <td><strong>控除欄</strong></td>
          <td>給与から差し引かれる金額</td>
          <td>健康保険料、厚生年金、所得税、住民税</td>
        </tr>
        <tr>
          <td><strong>差引支給額</strong></td>
          <td>実際に受け取る金額（手取り）</td>
          <td>支給合計 − 控除合計</td>
        </tr>
      </tbody>
    </table>

    <div class="point-box">
      <div class="point-box__title">💡 ポイント</div>
      <p>「額面給与（総支給額）」とは支給欄の合計のことです。一般的に手取りは額面の75〜85%程度になります。控除の内訳を理解することで、なぜ手取りが少なくなるかがわかります。</p>
    </div>
  </div>

  <!-- 2. 支給欄 -->
  <div class="section" id="kyuyo">
    <h2>2. 支給欄の各項目</h2>
    <p>支給欄には、会社が従業員に支払うすべての金額が記載されています。</p>

    <h3>基本給</h3>
    <p>労働契約で定められた基本的な賃金です。残業代や各種手当の計算基礎となる重要な数字で、昇給はこの基本給が上がることを指します。</p>

    <h3>残業手当（時間外手当）</h3>
    <p>法定労働時間（1日8時間・週40時間）を超えて働いた場合に支給される手当です。通常の賃金の<strong>25%増し以上</strong>が義務付けられています。深夜（22時〜5時）は50%増し、休日出勤は35%増しが原則です。</p>

    <h3>通勤手当（交通費）</h3>
    <p>通勤にかかる交通費の実費または定期代を支給する手当です。月額<strong>15万円以内</strong>であれば所得税が非課税となりますが、社会保険料と雇用保険料の計算には含まれます。</p>

    <h3>その他の手当</h3>
    <table class="data-table">
      <thead>
        <tr><th>手当の種類</th><th>内容</th></tr>
      </thead>
      <tbody>
        <tr><td>役職手当</td><td>管理職・リーダー職に支給される手当</td></tr>
        <tr><td>住宅手当</td><td>家賃補助として支給される手当（課税対象）</td></tr>
        <tr><td>家族手当</td><td>配偶者・子どもがいる場合に支給される手当</td></tr>
        <tr><td>資格手当</td><td>特定の資格保有者に支給される手当</td></tr>
        <tr><td>皆勤手当</td><td>無欠勤の月に支給される手当</td></tr>
        <tr><td>インセンティブ</td><td>営業成績などに応じた変動報酬</td></tr>
      </tbody>
    </table>

    <div class="note-box">
      <div class="note-box__title">✅ 確認のポイント</div>
      <p>通勤手当と住宅手当は税制上の扱いが異なります。通勤手当は一定額まで非課税ですが、住宅手当は全額課税対象です。</p>
    </div>
  </div>

  <!-- 3. 控除欄 -->
  <div class="section" id="kojo">
    <h2>3. 控除欄の各項目</h2>
    <p>控除欄は「社会保険料」「税金」「その他の控除」に分類できます。</p>

    <h3>① 健康保険料</h3>
    <p>病気・けがの際の医療費補助や、傷病手当金などをカバーする保険です。保険料は<strong>標準報酬月額 × 保険料率</strong>で計算され、会社と従業員で折半します。</p>
    <p>東京・協会けんぽの場合（2026年3月改定）、40歳未満の料率は<strong>9.98%</strong>（従業員負担4.99%）です。</p>

    <h3>② 介護保険料</h3>
    <p><strong>40歳以上65歳未満</strong>の方に適用される保険料です。老後の介護サービスの費用をカバーします。協会けんぽの全国一律料率は<strong>1.60%</strong>（従業員負担0.80%）です。40歳未満の方は¥0になります。</p>

    <h3>③ 子ども・子育て支援金（2026年4月〜）</h3>
    <p>2026年4月から新たに始まった制度です。健康保険料に上乗せされる形で徴収されます。従業員負担は<strong>標準報酬月額 × 0.115%</strong>です。月給30万円の場合、約345円/月の負担増となります。</p>

    <h3>④ 厚生年金保険料</h3>
    <p>老齢・障害・遺族年金の財源となる保険料です。保険料率は<strong>18.30%</strong>（労使折半で従業員負担9.15%）。標準報酬月額の上限は<strong>65万円</strong>で、上限以上の給与でも保険料は変わりません。</p>

    <h3>⑤ 雇用保険料</h3>
    <p>失業した際の失業給付や育児休業給付などをカバーする保険です。一般の事業の場合、令和7年度の従業員負担率は<strong>6/1000（0.6%）</strong>です。月給30万円なら毎月1,800円が控除されます。</p>

    <h3>⑥ 所得税（源泉徴収税）</h3>
    <p>給与から自動的に天引きされる国税です。月々の給与から社会保険料を差し引いた金額と扶養人数をもとに、源泉徴収税額表（甲欄）を適用して計算されます。<strong>年末調整</strong>で過不足が精算されます。</p>

    <table class="data-table">
      <thead>
        <tr><th>課税所得（目安）</th><th>税率</th></tr>
      </thead>
      <tbody>
        <tr><td>〜195万円</td><td>5%</td></tr>
        <tr><td>195万〜330万円</td><td>10%</td></tr>
        <tr><td>330万〜695万円</td><td>20%</td></tr>
        <tr><td>695万〜900万円</td><td>23%</td></tr>
        <tr><td>900万〜1,800万円</td><td>33%</td></tr>
        <tr><td>1,800万〜4,000万円</td><td>40%</td></tr>
        <tr><td>4,000万円〜</td><td>45%</td></tr>
      </tbody>
    </table>

    <h3>⑦ 住民税</h3>
    <p>前年の所得をもとに計算される地方税（都道府県民税＋市区町村民税）です。翌年6月〜翌々年5月の12ヶ月で分割して給与天引きされます。新入社員は入社1年目に住民税がかからない場合が多いのはこの仕組みのためです。</p>

    <div class="point-box">
      <div class="point-box__title">💡 所得税と住民税の違い</div>
      <p><strong>所得税</strong>：当年の所得に対して課税（その都度源泉徴収・年末調整で精算）</p>
      <p><strong>住民税</strong>：前年の所得に対して翌年に課税（6月〜翌年5月に分割天引き）</p>
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

  <!-- 4. サンプル -->
  <div class="section" id="sample">
    <h2>4. 給与明細のサンプルと計算例</h2>
    <p>月給30万円（35歳・扶養なし・東京在住・協会けんぽ）の場合の給与明細サンプルです。</p>

    <div class="payslip">
      <div class="payslip__header">📄 給与明細書 ― 2026年5月分</div>
      <div class="payslip__body">
        <div class="payslip__section-title">【支給】</div>
        <div class="payslip__row">
          <span class="payslip__label">基本給</span>
          <span class="payslip__value">270,000円</span>
        </div>
        <div class="payslip__row">
          <span class="payslip__label">通勤手当</span>
          <span class="payslip__value">15,000円</span>
        </div>
        <div class="payslip__row">
          <span class="payslip__label">役職手当</span>
          <span class="payslip__value">15,000円</span>
        </div>
        <div class="payslip__row" style="font-weight:700;">
          <span class="payslip__label">支給合計（額面）</span>
          <span class="payslip__value">300,000円</span>
        </div>

        <div class="payslip__section-title">【控除】</div>
        <div class="payslip__row">
          <span class="payslip__label">健康保険料</span>
          <span class="payslip__value deduction">−14,970円</span>
        </div>
        <div class="payslip__row">
          <span class="payslip__label">子ども・子育て支援金</span>
          <span class="payslip__value deduction">−345円</span>
        </div>
        <div class="payslip__row">
          <span class="payslip__label">厚生年金保険料</span>
          <span class="payslip__value deduction">−27,450円</span>
        </div>
        <div class="payslip__row">
          <span class="payslip__label">雇用保険料</span>
          <span class="payslip__value deduction">−1,800円</span>
        </div>
        <div class="payslip__row">
          <span class="payslip__label">所得税</span>
          <span class="payslip__value deduction">−6,270円</span>
        </div>
        <div class="payslip__row">
          <span class="payslip__label">住民税</span>
          <span class="payslip__value deduction">−10,000円</span>
        </div>
        <div class="payslip__row" style="font-weight:700;">
          <span class="payslip__label">控除合計</span>
          <span class="payslip__value deduction">−60,835円</span>
        </div>
      </div>
      <div class="payslip__total">
        <span>差引支給額（手取り）</span>
        <span>239,165円</span>
      </div>
    </div>

    <p>この例では、額面30万円に対して手取りは約23.9万円（約79.7%）となります。控除の中で最も大きいのは厚生年金保険料（約27,450円）で、次いで健康保険料（約14,970円）です。</p>

    <table class="data-table">
      <thead>
        <tr><th>控除項目</th><th>金額</th><th>割合（対額面）</th></tr>
      </thead>
      <tbody>
        <tr><td>健康保険料</td><td>14,970円</td><td>4.99%</td></tr>
        <tr><td>子ども・子育て支援金</td><td>345円</td><td>0.115%</td></tr>
        <tr><td>厚生年金保険料</td><td>27,450円</td><td>9.15%</td></tr>
        <tr><td>雇用保険料</td><td>1,800円</td><td>0.60%</td></tr>
        <tr><td>所得税</td><td>6,270円</td><td>2.09%</td></tr>
        <tr><td>住民税</td><td>10,000円</td><td>3.33%</td></tr>
        <tr><td><strong>合計</strong></td><td><strong>60,835円</strong></td><td><strong>20.28%</strong></td></tr>
      </tbody>
    </table>
  </div>

  <!-- 5. 確認ポイント -->
  <div class="section" id="check">
    <h2>5. 給与明細で必ず確認すべき重要ポイント</h2>

    <h3>① 標準報酬月額が正しいか</h3>
    <p>社会保険料の計算に使われる「標準報酬月額」は、毎年4〜6月の平均給与をもとに決定され、9月に改定されます。昇給や手当変更があったのに保険料が変わっていない場合は、会社の担当部署に確認しましょう。</p>

    <h3>② 扶養人数が反映されているか</h3>
    <p>配偶者や子どもを扶養に入れると所得税の源泉徴収額が少なくなります。結婚・出産・離婚などのライフイベント後は、会社への扶養控除等申告書の提出を忘れずに行いましょう。</p>

    <h3>③ 残業代が正しく計算されているか</h3>
    <p>残業代の計算基礎となる「1時間あたりの賃金」に、固定残業代（みなし残業）が正しく反映されているかを確認しましょう。基本給のみで計算している会社は違法となる場合があります。</p>

    <h3>④ 年末調整の結果を確認</h3>
    <p>12月（または1月）の給与明細には年末調整の結果が反映されます。源泉徴収税の過払い分は還付（差引支給額が増える）、不足分は追加徴収されます。生命保険料や住宅ローン控除などの控除が反映されているか確認しましょう。</p>

    <div class="note-box">
      <div class="note-box__title">✅ 給与明細は3〜5年間保管を</div>
      <p>給与明細は確定申告や社会保険の手続きに必要になる場合があります。特に転職・退職時は必要になることが多いため、最低でも直近3年分は保管しておくことをおすすめします。</p>
    </div>
  </div>

  <!-- CTA -->
  <div class="cta-section">
    <h2>自分の手取りを今すぐ計算してみよう</h2>
    <p>月給・年齢・扶養人数を入力するだけ。東京・協会けんぽ前提の手取りシミュレーターです。</p>
    <a class="cta-btn" href="<?= htmlspecialchars($calc_url) ?>">無料で手取りを計算する →</a>
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

  <!-- 6. FAQ -->
  <div class="section" id="faq">
    <h2>6. よくある疑問</h2>

    <h3>給与明細をもらえない会社は違法ですか？</h3>
    <p>はい、違法です。所得税法では給与支払者に「給与等の支払明細書」の交付が義務付けられています（所得税法第231条）。電子交付も可能ですが、交付自体は必須です。</p>

    <h3>給与明細の金額が計算と合わない場合は？</h3>
    <p>端数処理の方法（切り捨て・切り上げ・四捨五入）は会社によって異なります。また、標準報酬月額の等級や前月との調整が入る場合もあります。大きく異なる場合は会社の給与担当部署に確認しましょう。</p>

    <h3>社会保険料は毎月同じ金額ですか？</h3>
    <p>基本的には9月改定まで同じ金額が続きます。ただし、昇給・降給が大きい場合は「随時改定（月額変更届）」の対象となり、変更から4ヶ月後に新しい保険料が適用されます。</p>

    <h3>住民税が突然上がったのはなぜですか？</h3>
    <p>住民税は前年の所得をもとに計算されるため、昨年の収入が増えた場合に今年の住民税が上がります。また、副業収入や株の譲渡益なども住民税の計算対象になります。</p>

    <h3>育児休業中は社会保険料がかかりますか？</h3>
    <p>育児休業期間中は、申請することで健康保険料・厚生年金保険料が免除されます（会社負担分も免除）。雇用保険料は休業中は給与が発生しないため徴収されません。</p>
  </div>

  <!-- 関連記事 -->
  <div class="related">
    <div class="related__title">関連記事</div>
    <div class="related-grid">
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <div class="related-card__label">社会保険</div>
        <div class="related-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</div>
      </a>
      <a href="./nenshu-no-kabe.php" class="related-card">
        <div class="related-card__label">扶養・年収</div>
        <div class="related-card__title">年収の壁とは？103万・130万・150万円の壁をわかりやすく解説</div>
      </a>
      <a href="./kodomo-shienkin.php" class="related-card">
        <div class="related-card__label">新制度</div>
        <div class="related-card__title">子ども・子育て支援金とは？2026年4月から始まる新たな給与天引き</div>
      </a>
    </div>
  </div>

</div>

<footer>
  <p><a href="https://pfp.tokyo/calc/">給与手取り計算トップ</a> | <a href="https://pfp.tokyo/calc/articles/">解説記事一覧</a> | <a href="https://pfp.tokyo">株式会社PFP</a></p>
  <p style="margin-top:8px;">© 2026 pfp.tokyo — 掲載内容は概算・解説目的です。正確な金額は給与明細または担当部署にご確認ください。</p>
</footer>

</body>
</html>
