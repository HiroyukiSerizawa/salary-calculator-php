<?php
$page_title = "扶養控除とは？種類・条件・金額をわかりやすく解説【2026年最新】";
$page_description = "扶養控除の種類（一般・特定・老人扶養）・控除額・扶養に入れる条件・申請方法を解説。配偶者控除との違いや社会保険の扶養との違い、扶養人数が増えると手取りがどう変わるかも具体的に説明します。";
$canonical_url = "https://calc.pfp.tokyo/articles/fuyou-kojo.php";
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
    "headline": "扶養控除とは？種類・条件・金額をわかりやすく解説【2026年最新】",
    "description": "扶養控除の種類・控除額・申請方法を解説。配偶者控除との違いや社会保険の扶養との違いも説明します。",
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
    }
  </style>
</head>
<body>

<header>
  <div class="header-inner">
    <a class="header-logo" href="https://calc.pfp.tokyo/">給与手取り計算</a>
    <span class="header-sep">›</span>
    <span class="header-nav"><a href="https://calc.pfp.tokyo/articles/">解説記事</a></span>
    <span class="header-sep">›</span>
    <span class="header-nav" style="color:#333;">扶養控除とは</span>
  </div>
</header>

<div class="container">

  <div class="article-header">
    <span class="article-label">控除・税金</span>
    <h1>扶養控除とは？種類・条件・金額を<br>わかりやすく解説【2026年最新】</h1>
    <div class="article-meta">2026年5月12日掲載 ｜ 令和8年（2026年）版</div>
    <div class="article-lead">
      扶養家族がいると、所得税・住民税が軽減される「扶養控除」が適用されます。本記事では、扶養控除の<strong>種類・控除額・申請方法</strong>をわかりやすく解説。配偶者控除との違いや、社会保険の扶養（130万円の壁）との違いも整理します。
    </div>
  </div>

  <!-- 目次 -->
  <div class="toc">
    <div class="toc__title">この記事の目次</div>
    <ol>
      <li><a href="#what">扶養控除とは</a></li>
      <li><a href="#types">扶養控除の種類と控除額一覧</a></li>
      <li><a href="#conditions">扶養に入れる条件</a></li>
      <li><a href="#vs-haigusha">配偶者控除・配偶者特別控除との違い</a></li>
      <li><a href="#effect">扶養人数が増えると手取りはどう変わる？</a></li>
      <li><a href="#shakai">社会保険の扶養（130万円の壁）との違い</a></li>
      <li><a href="#apply">扶養控除の申請方法</a></li>
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

  <!-- 1. 扶養控除とは -->
  <div class="section" id="what">
    <h2>1. 扶養控除とは</h2>
    <p>扶養控除とは、<strong>所得税法上の扶養親族がいる場合に、課税所得から一定額を差し引ける制度</strong>です。課税所得が減ることで、所得税・住民税の負担が軽くなります。</p>
    <p>たとえば、子どもや親など、生計を一にする家族を扶養に入れると、その人数・年齢に応じた金額が所得から控除されます。その分だけ税金が少なくなるため、手取り額が増える仕組みです。</p>

    <div class="point-box">
      <div class="point-box__title">ポイント：扶養控除が適用されると</div>
      <p>所得税：課税所得が減るため、適用される税率によって節税額が変わります。</p>
      <p>住民税：翌年の住民税計算でも別途控除が適用されます（住民税の控除額は所得税より少ない）。</p>
    </div>
  </div>

  <!-- 2. 種類と控除額 -->
  <div class="section" id="types">
    <h2>2. 扶養控除の種類と控除額一覧</h2>
    <p>扶養控除は扶養親族の年齢や同居状況によって、所得税・住民税それぞれの控除額が異なります。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>区分</th>
          <th>対象となる扶養親族</th>
          <th>所得税控除額</th>
          <th>住民税控除額</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>一般扶養控除</strong></td>
          <td>16歳以上19歳未満・23歳以上70歳未満</td>
          <td>38万円</td>
          <td>33万円</td>
        </tr>
        <tr>
          <td><strong>特定扶養控除</strong></td>
          <td>19歳以上23歳未満（大学生相当）</td>
          <td>63万円</td>
          <td>45万円</td>
        </tr>
        <tr>
          <td><strong>老人扶養控除</strong></td>
          <td>70歳以上（同居以外）</td>
          <td>48万円</td>
          <td>38万円</td>
        </tr>
        <tr>
          <td><strong>同居老親等控除</strong></td>
          <td>70歳以上（同居の親・祖父母等）</td>
          <td>58万円</td>
          <td>45万円</td>
        </tr>
      </tbody>
    </table>

    <div class="note-box">
      <div class="note-box__title">16歳未満の子どもについて</div>
      <p>16歳未満の子ども（年少扶養親族）は扶養控除の対象外です。代わりに「児童手当」などの支援が充てられる制度設計となっています。</p>
    </div>

    <h3>節税額の目安（所得税率20%の場合）</h3>
    <p>課税所得が330万〜695万円のゾーン（所得税率20%）にある方が一般扶養控除（38万円）を受けた場合の節税額を計算すると、所得税で<strong>7.6万円</strong>、住民税（税率10%）で<strong>3.3万円</strong>、合計<strong>10.9万円/年</strong>の節税になります。</p>
  </div>

  <!-- 3. 扶養に入れる条件 -->
  <div class="section" id="conditions">
    <h2>3. 扶養に入れる条件</h2>
    <p>所得税法上の扶養親族として認められるには、以下の4つの条件をすべて満たす必要があります。</p>

    <h3>条件①：6親等内の血族または3親等内の姻族</h3>
    <p>子・親・祖父母・兄弟姉妹などが対象です。配偶者は「配偶者控除」で別途扱われるため、扶養控除の対象外です。</p>

    <h3>条件②：生計を一にしていること</h3>
    <p>同居が原則ですが、離れて暮らしていても仕送りなど生活費を負担している場合は「生計を一にしている」と認められます。大学進学で別居している子どもなどが典型例です。</p>

    <h3>条件③：年間の合計所得金額が48万円以下</h3>
    <p>給与収入のみの場合、<strong>年収103万円以下</strong>が目安です（給与所得控除55万円＋基礎控除48万円）。年金収入のみの場合は65歳未満で年収108万円以下、65歳以上で年収158万円以下が目安です。</p>

    <h3>条件④：16歳以上であること</h3>
    <p>前述のとおり、16歳未満の子どもは扶養控除の対象外です。</p>

    <div class="point-box">
      <div class="point-box__title">年齢の判定タイミング</div>
      <p>年齢は<strong>その年の12月31日時点</strong>で判定します。たとえば、12月31日に19歳になる場合、その年は「特定扶養親族」として63万円の控除が適用されます。</p>
    </div>
  </div>

  <!-- 4. 配偶者控除との違い -->
  <div class="section" id="vs-haigusha">
    <h2>4. 配偶者控除・配偶者特別控除との違い</h2>
    <p>配偶者（夫・妻）は扶養控除ではなく、<strong>配偶者控除</strong>または<strong>配偶者特別控除</strong>の対象となります。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>控除の種類</th>
          <th>対象</th>
          <th>控除額（所得税）</th>
          <th>所得制限</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>扶養控除</td>
          <td>16歳以上の扶養親族（配偶者以外）</td>
          <td>38万〜58万円</td>
          <td>扶養親族の所得48万円以下</td>
        </tr>
        <tr>
          <td>配偶者控除</td>
          <td>合計所得48万円以下の配偶者</td>
          <td>38万円（納税者所得900万円以下）</td>
          <td>納税者の所得1,000万円以下</td>
        </tr>
        <tr>
          <td>配偶者特別控除</td>
          <td>合計所得48万〜133万円の配偶者</td>
          <td>1万〜38万円（段階的に減少）</td>
          <td>納税者の所得1,000万円以下</td>
        </tr>
      </tbody>
    </table>

    <p>配偶者の年収が103万円を超えても、150万円以下であれば配偶者特別控除が満額（38万円）適用されます。150万円を超えると段階的に控除額が減り、201.6万円以上になると控除がゼロになります。</p>
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

  <!-- 5. 手取りへの影響 -->
  <div class="section" id="effect">
    <h2>5. 扶養人数が増えると手取りはどう変わる？</h2>
    <p>扶養人数は、毎月の給与から天引きされる<strong>源泉徴収税額</strong>に直接影響します。扶養が増えるほど源泉徴収額が少なくなり、月々の手取りが増えます。</p>

    <h3>月給30万円・40歳・東京の場合の源泉徴収税額の変化</h3>
    <p>社会保険料控除後の課税対象額（標準的な計算）に基づく目安です。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>扶養人数</th>
          <th>源泉徴収税額（月額）</th>
          <th>扶養0人との差</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>0人</td>
          <td>約6,270円</td>
          <td>—</td>
        </tr>
        <tr>
          <td>1人（配偶者等）</td>
          <td>約4,770円</td>
          <td>約1,500円/月 減</td>
        </tr>
        <tr>
          <td>2人</td>
          <td>約3,270円</td>
          <td>約3,000円/月 減</td>
        </tr>
        <tr>
          <td>3人</td>
          <td>約1,770円</td>
          <td>約4,500円/月 減</td>
        </tr>
      </tbody>
    </table>

    <div class="point-box">
      <div class="point-box__title">源泉徴収はあくまで概算</div>
      <p>月々の源泉徴収は「仮の税額」です。年末調整で実際の年間所得・控除額に基づき精算されます。年末調整で還付を受けるケースが多いのはこのためです。</p>
    </div>
  </div>

  <!-- 6. 社会保険の扶養との違い -->
  <div class="section" id="shakai">
    <h2>6. 社会保険の扶養（130万円の壁）と税法上の扶養の違い</h2>
    <p>「扶養」には<strong>税法上の扶養</strong>と<strong>社会保険上の扶養</strong>の2種類があり、条件・基準が異なります。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>比較項目</th>
          <th>税法上の扶養</th>
          <th>社会保険上の扶養</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>目的</td>
          <td>所得税・住民税の軽減</td>
          <td>健康保険・年金の保険料免除</td>
        </tr>
        <tr>
          <td>収入上限</td>
          <td>年収103万円以下（給与のみ）</td>
          <td>年収130万円未満（将来の見込み額）</td>
        </tr>
        <tr>
          <td>対象</td>
          <td>16歳以上の親族</td>
          <td>主に75歳未満の親族（年齢制限あり）</td>
        </tr>
        <tr>
          <td>判定時期</td>
          <td>年間の確定額（12月31日時点）</td>
          <td>現時点の収入見込み（随時判定）</td>
        </tr>
      </tbody>
    </table>

    <div class="warn-box">
      <div class="warn-box__title">注意：103万円超でも社会保険の扶養に入れる</div>
      <p>税法上の扶養（103万円の壁）を超えても、年収130万円未満であれば社会保険の扶養（被扶養者）に入れます。ただし大手企業（106万円の壁の対象）では異なる場合があります。</p>
    </div>
  </div>

  <!-- 7. 申請方法 -->
  <div class="section" id="apply">
    <h2>7. 扶養控除の申請方法</h2>
    <p>扶養控除の適用を受けるには、会社に<strong>「給与所得者の扶養控除等（異動）申告書」</strong>を提出します。</p>

    <h3>申告書の提出タイミング</h3>
    <p>毎年<strong>最初の給与支払日の前日まで</strong>に、翌年分を提出するのが一般的です。多くの会社では11〜12月に翌年分の申告書を配布します。</p>

    <h3>記載が必要な内容</h3>
    <p>控除対象扶養親族の「氏名・生年月日・続柄・居住地（別居の場合）」を記入します。マイナンバーの記載も必要です。</p>

    <h3>年中での変更（異動）</h3>
    <p>結婚・出産・就職などで扶養家族の状況が変わった場合は、変更事由が生じたときに「異動申告書」を提出します。提出後、翌月以降の源泉徴収額が修正されます。</p>

    <div class="note-box">
      <div class="note-box__title">確定申告でも手続き可能</div>
      <p>会社への申告を忘れた場合でも、翌年3月15日までに確定申告を行うことで扶養控除を受け、過払い税額の還付を受けることができます。</p>
    </div>
  </div>

  <!-- CTA -->
  <div class="cta-section">
    <h2>扶養人数を反映した手取りを今すぐ計算</h2>
    <p>月給・年齢・扶養人数を入力するだけ。扶養控除を考慮した手取りシミュレーターです。</p>
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

  <!-- 8. FAQ -->
  <div class="section" id="faq">
    <h2>8. よくある疑問</h2>

    <h3>親を扶養に入れられますか？</h3>
    <p>はい、可能です。年収が103万円以下（年金のみなら65歳以上で158万円以下）で、生計を一にしていれば扶養控除の対象になります。70歳以上の親と同居している場合は「同居老親等控除」が適用され、控除額が58万円（最大）になります。</p>

    <h3>共働きの場合、子どもはどちらの扶養にすればよいですか？</h3>
    <p>一般的には<strong>収入の多い方</strong>の扶養にする方が税負担の軽減効果が大きいです。ただし、税率の違いや住民税の計算も考慮して判断してください。同じ子どもを夫婦双方の扶養に入れることはできません。</p>

    <h3>扶養を外れたら何が変わりますか？</h3>
    <p>扶養親族が扶養を外れた（年収が103万円を超えた）場合、その年の年末調整または確定申告で扶養控除が適用されなくなります。その結果、扶養者（親・配偶者）の所得税・住民税が増加します。また社会保険の扶養を外れる（130万円超）場合は、自身での国民健康保険加入・保険料負担が生じます。</p>
  </div>

  <!-- 関連記事 -->
  <div class="related">
    <div class="related__title">関連記事</div>
    <div class="related-grid">
      <a href="./nenshu-no-kabe.php" class="related-card">
        <div class="related-card__label">扶養・年収</div>
        <div class="related-card__title">年収の壁とは？103万・130万・150万円の壁をわかりやすく解説</div>
      </a>
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <div class="related-card__label">社会保険</div>
        <div class="related-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</div>
      </a>
      <a href="./kyuyo-meisai-mikata.php" class="related-card">
        <div class="related-card__label">給与・基礎知識</div>
        <div class="related-card__title">給与明細の見方・読み方【完全ガイド】各項目の意味を徹底解説</div>
      </a>
    </div>
  </div>

</div>

<footer>
  <p><a href="https://calc.pfp.tokyo/">給与手取り計算トップ</a> | <a href="https://calc.pfp.tokyo/articles/">解説記事一覧</a> | <a href="https://pfp.tokyo">株式会社PFP</a></p>
  <p style="margin-top:8px;">© 2026 pfp.tokyo — 掲載内容は概算・解説目的です。正確な金額は給与明細または担当部署にご確認ください。</p>
</footer>

</body>
</html>
