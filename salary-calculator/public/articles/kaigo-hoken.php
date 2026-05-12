<?php
$page_title = "介護保険料とは？給与から天引きされる仕組みと計算方法【2026年最新】";
$page_description = "40歳から給与天引きが始まる介護保険料の計算方法・料率・年齢別の負担額をわかりやすく解説。2026年の協会けんぽ料率1.60%をもとにした具体的な計算例と、65歳以降の変化も説明します。";
$canonical_url = "https://pfp.tokyo/calc/articles/kaigo-hoken.php";
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
    "headline": "介護保険料とは？給与から天引きされる仕組みと計算方法【2026年最新】",
    "description": "40歳から始まる介護保険料の計算方法・料率・負担額をわかりやすく解説。2026年の協会けんぽ料率と年齢別の具体的な計算例を紹介します。",
    "author": { "@type": "Organization", "name": "給与手取り計算ツール" },
    "datePublished": "2026-05-12",
    "dateModified": "2026-05-12",
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

    /* 警告ボックス */
    .warn-box {
      background: #fef9ec;
      border: 1px solid #fde68a;
      border-radius: 10px;
      padding: 20px 24px;
      margin: 20px 0;
    }
    .warn-box__title { font-size: 14px; font-weight: 700; color: #92400e; margin-bottom: 10px; }
    .warn-box p { font-size: 14px; }

    /* 計算式ボックス */
    .formula-box {
      background: #eef2ff;
      border: 2px solid #153987;
      border-radius: 10px;
      padding: 20px 24px;
      margin: 20px 0;
      text-align: center;
    }
    .formula-box__title { font-size: 13px; font-weight: 700; color: #153987; margin-bottom: 10px; }
    .formula-box__formula { font-size: 17px; font-weight: 800; color: #153987; line-height: 1.7; }

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
    .cta-section h2 {
      font-size: 20px;
      font-weight: 800;
      margin-bottom: 10px;
      color: #fff;
      border-bottom: none;
    }
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
      .formula-box__formula { font-size: 14px; }
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
    <span class="header-nav" style="color:#333;">介護保険料とは</span>
  </div>
</header>

<div class="container">

  <div class="article-header">
    <span class="article-label">社会保険</span>
    <h1>介護保険料とは？給与から天引きされる<br>仕組みと計算方法【2026年最新】</h1>
    <div class="article-meta">2026年5月12日掲載 ｜ 令和8年（2026年）版</div>
    <div class="article-lead">
      40歳を迎えると給与から自動的に天引きが始まる「介護保険料」。本記事では、<strong>2026年の料率・計算方法・年齢別の負担額</strong>をわかりやすく解説します。65歳以降に年金天引きへ切り替わる仕組みや、手取りへの影響も説明します。
    </div>
  </div>

  <!-- 目次 -->
  <div class="toc">
    <div class="toc__title">この記事の目次</div>
    <ol>
      <li><a href="#what">介護保険とは</a></li>
      <li><a href="#hihokensha">第1号・第2号被保険者の違い</a></li>
      <li><a href="#calc">給与天引き介護保険料の計算方法</a></li>
      <li><a href="#rate">2026年の介護保険料率</a></li>
      <li><a href="#table">年齢別・給与別の介護保険料一覧表</a></li>
      <li><a href="#timing">40歳の誕生月から天引き開始の仕組み</a></li>
      <li><a href="#after65">65歳以降は年金天引きに変わる</a></li>
      <li><a href="#effect">介護保険料が手取りに与える影響</a></li>
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

  <!-- 1. 介護保険とは -->
  <div class="section" id="what">
    <h2>1. 介護保険とは</h2>
    <p>介護保険は、<strong>高齢者などが介護サービスを受けられるよう、社会全体で費用を支え合う公的保険制度</strong>です。2000年に創設され、40歳以上のすべての人が加入します。</p>
    <p>要介護・要支援認定を受けると、訪問介護・デイサービス・施設入所などのサービスを自己負担1〜3割で利用できます。その費用を賄うために、加入者が毎月保険料を納めます。</p>

    <div class="point-box">
      <div class="point-box__title">介護保険料の財源構成</div>
      <p>介護保険の費用は「公費（国・自治体）50%」と「保険料50%」で賄われています。保険料のうち、65歳以上（第1号）が27%、40〜64歳（第2号）が23%を負担します。</p>
    </div>
  </div>

  <!-- 2. 第1号・第2号 -->
  <div class="section" id="hihokensha">
    <h2>2. 第1号被保険者（65歳以上）と第2号被保険者（40〜64歳）の違い</h2>

    <table class="data-table">
      <thead>
        <tr>
          <th>区分</th>
          <th>対象年齢</th>
          <th>保険料の徴収方法</th>
          <th>保険給付の対象</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>第1号被保険者</strong></td>
          <td>65歳以上</td>
          <td>年金から天引き（特別徴収）<br>または市区町村への直接納付</td>
          <td>要介護・要支援と認定された場合</td>
        </tr>
        <tr>
          <td><strong>第2号被保険者</strong></td>
          <td>40歳〜64歳</td>
          <td>健康保険料と一緒に給与天引き</td>
          <td>特定疾病（16種類）が原因で要介護状態になった場合</td>
        </tr>
      </tbody>
    </table>

    <p>第2号被保険者（会社員）が介護保険の給付を受けられるのは、加齢に伴う特定の疾病（初老期の認知症・脳血管疾患・関節リウマチなど16種類）が原因の場合に限られます。交通事故など特定疾病以外の要因では給付されません。</p>
  </div>

  <!-- 3. 計算方法 -->
  <div class="section" id="calc">
    <h2>3. 給与から天引きされる介護保険料の計算方法</h2>

    <div class="formula-box">
      <div class="formula-box__title">介護保険料（従業員負担分）の計算式</div>
      <div class="formula-box__formula">
        標準報酬月額 × 1.60% ÷ 2<br>
        <span style="font-size:13px; font-weight:400;">（会社が半額を負担するため、本人負担は÷2）</span>
      </div>
    </div>

    <h3>計算例：月給30万円（標準報酬月額30万円）の場合</h3>
    <p>介護保険料（従業員負担）= 300,000円 × 1.60% ÷ 2 = <strong>2,400円/月</strong></p>
    <p>会社負担分も同額（2,400円）なので、合計で4,800円/月が納付されます。</p>

    <div class="point-box">
      <div class="point-box__title">健康保険料と一体で徴収される</div>
      <p>給与明細では「介護保険料」として独立した項目で記載されるか、「健康保険料（介護含む）」としてまとめて記載される場合があります。40歳未満の方は介護保険料の欄が0円または表示なしになります。</p>
    </div>
  </div>

  <!-- 4. 2026年料率 -->
  <div class="section" id="rate">
    <h2>4. 2026年の介護保険料率</h2>
    <p>協会けんぽの介護保険料率は全国一律で設定されます。2026年度（令和8年度）の料率は<strong>1.60%</strong>です。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>年度</th>
          <th>介護保険料率（全体）</th>
          <th>従業員負担（÷2）</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2024年度（令和6年）</td>
          <td>1.60%</td>
          <td>0.80%</td>
        </tr>
        <tr>
          <td>2025年度（令和7年）</td>
          <td>1.60%</td>
          <td>0.80%</td>
        </tr>
        <tr>
          <td><strong>2026年度（令和8年）</strong></td>
          <td><strong>1.60%</strong></td>
          <td><strong>0.80%</strong></td>
        </tr>
      </tbody>
    </table>

    <div class="note-box">
      <div class="note-box__title">健康保険組合によって料率が異なる場合あり</div>
      <p>大企業の健康保険組合は組合独自の介護保険料率を設定している場合があります。協会けんぽ加入者は一律1.60%ですが、組合健保に加入している場合は組合の料率を確認してください。</p>
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

  <!-- 5. 一覧表 -->
  <div class="section" id="table">
    <h2>5. 年齢別・給与別の介護保険料一覧表</h2>
    <p>協会けんぽ2026年度料率（1.60%）をもとにした、月給別の介護保険料（従業員負担）の目安です。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>月給（標準報酬月額）</th>
          <th>40歳未満</th>
          <th>40〜64歳（第2号）</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>20万円</td>
          <td>0円</td>
          <td>1,600円</td>
        </tr>
        <tr>
          <td>25万円</td>
          <td>0円</td>
          <td>2,000円</td>
        </tr>
        <tr>
          <td>30万円</td>
          <td>0円</td>
          <td>2,400円</td>
        </tr>
        <tr>
          <td>40万円</td>
          <td>0円</td>
          <td>3,200円</td>
        </tr>
        <tr>
          <td>50万円</td>
          <td>0円</td>
          <td>4,000円</td>
        </tr>
        <tr>
          <td>65万円（上限）</td>
          <td>0円</td>
          <td>5,200円</td>
        </tr>
      </tbody>
    </table>

    <p style="font-size:13px; color:#666;">※ 標準報酬月額は実際の月収を等級に当てはめた額です。上記は等級の代表値を使用した参考値です。65歳以上は給与天引きではなく年金天引きに切り替わります。</p>
  </div>

  <!-- 6. 誕生月から開始 -->
  <div class="section" id="timing">
    <h2>6. 40歳の誕生月から天引き開始される仕組み</h2>
    <p>介護保険の第2号被保険者資格は、<strong>40歳の誕生日の前日</strong>に取得します。そのため、誕生日が属する月から介護保険料の天引きが始まります。</p>

    <div class="point-box">
      <div class="point-box__title">誕生日が1日の場合は前月から</div>
      <p>日本の法律では、誕生日の前日に年齢が加算されます。誕生日が5月1日の方は4月30日（前日）に40歳になるため、4月分の保険料から介護保険料が徴収されます。</p>
      <p>誕生日が5月2日以降の方は5月分（5月の給与支払い時）から天引きが始まります。</p>
    </div>

    <h3>給与明細で確認するタイミング</h3>
    <p>社会保険料は「当月分を翌月控除」の会社が多いため、実際に給与明細に反映されるのは資格取得月の翌月支払い分からです。会社によって当月控除・翌月控除の扱いが異なるため、給与担当部署に確認してください。</p>
  </div>

  <!-- 7. 65歳以降 -->
  <div class="section" id="after65">
    <h2>7. 65歳以降は年金から天引きに変わる</h2>
    <p>65歳を迎えると第1号被保険者になり、介護保険料の徴収方法が給与天引きから<strong>年金天引き（特別徴収）</strong>に切り替わります。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>項目</th>
          <th>第2号（40〜64歳）</th>
          <th>第1号（65歳以上）</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>徴収方法</td>
          <td>健康保険料と一緒に給与天引き</td>
          <td>年金から天引き（年金が少ない場合は口座振替）</td>
        </tr>
        <tr>
          <td>料率・金額</td>
          <td>協会けんぽ全国一律1.60%</td>
          <td>市区町村ごとに設定（3年ごとに改定）</td>
        </tr>
        <tr>
          <td>扶養の扱い</td>
          <td>被扶養者は保険料負担なし</td>
          <td>全員が個別に保険料を納付</td>
        </tr>
      </tbody>
    </table>

    <div class="warn-box">
      <div class="warn-box__title">65歳以降の保険料は市区町村ごとに異なる</div>
      <p>第1号被保険者の保険料は、各市区町村の介護サービス費用の見込みに基づいて3年ごとに見直されます。居住する自治体によって保険料が大きく異なるため、自治体の窓口またはウェブサイトで確認してください。</p>
    </div>
  </div>

  <!-- 8. 手取りへの影響 -->
  <div class="section" id="effect">
    <h2>8. 介護保険料が手取りに与える影響</h2>
    <p>39歳と40歳で月給が同じ場合、介護保険料の追加分だけ手取りが減少します。月給30万円の例で確認してみましょう。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>年齢</th>
          <th>健康保険料（本人負担）</th>
          <th>介護保険料（本人負担）</th>
          <th>合計</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>39歳（月給30万円）</td>
          <td>14,970円（9.98% ÷ 2）</td>
          <td>0円</td>
          <td>14,970円</td>
        </tr>
        <tr>
          <td>40歳（月給30万円）</td>
          <td>14,970円</td>
          <td>2,400円（1.60% ÷ 2）</td>
          <td>17,370円</td>
        </tr>
      </tbody>
    </table>

    <p>月給30万円の場合、40歳になると介護保険料として毎月<strong>約2,400円</strong>の追加負担が発生し、年間で<strong>約28,800円</strong>手取りが減少します。</p>

    <div class="note-box">
      <div class="note-box__title">所得税・住民税の計算にも影響する</div>
      <p>介護保険料は社会保険料控除の対象です。介護保険料が増えた分だけ社会保険料控除額が増加するため、所得税・住民税の計算上は課税所得が若干減少します。ただし手取りの純増効果はわずかで、実質的には介護保険料負担が増える方が大きいです。</p>
    </div>
  </div>

  <!-- CTA -->
  <div class="cta-section">
    <h2>40歳前後の手取り変化を今すぐ確認</h2>
    <p>年齢・月給を入力するだけ。介護保険料を含む社会保険料を考慮した手取りシミュレーターです。</p>
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

  <!-- 9. FAQ -->
  <div class="section" id="faq">
    <h2>9. よくある疑問</h2>

    <h3>40歳になったら手取りはいくら減りますか？</h3>
    <p>月給（標準報酬月額）に0.80%（1.60% ÷ 2）をかけた金額が毎月追加で天引きされます。月給25万円なら約2,000円、30万円なら約2,400円、40万円なら約3,200円の手取り減です。年間では約2.4万〜3.8万円の影響です。</p>

    <h3>育児休業中の介護保険料はどうなりますか？</h3>
    <p>育児休業中は健康保険料・厚生年金保険料が免除（申請必要）されますが、<strong>介護保険料も同様に免除</strong>されます。健康保険料の免除申請をすれば介護保険料も含めて自動的に免除対象となります。</p>

    <h3>介護保険料の控除（所得控除）はありますか？</h3>
    <p>介護保険料は<strong>社会保険料控除の対象</strong>です。給与から天引きされている場合は年末調整で自動的に控除されます。自分で納付した場合（第1号被保険者の直接納付など）は確定申告で社会保険料控除として申告できます。</p>
  </div>

  <!-- 関連記事 -->
  <div class="related">
    <div class="related__title">関連記事</div>
    <div class="related-grid">
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <div class="related-card__label">社会保険</div>
        <div class="related-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</div>
      </a>
      <a href="./kyuyo-meisai-mikata.php" class="related-card">
        <div class="related-card__label">給与・基礎知識</div>
        <div class="related-card__title">給与明細の見方・読み方【完全ガイド】各項目の意味を徹底解説</div>
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
