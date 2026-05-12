<?php
$page_title = "傷病手当金とは？計算方法・受給条件・期間をわかりやすく解説【2026年版】";
$page_description = "傷病手当金の受給条件・支給額の計算方法・支給期間を解説。年収別の目安表や退職後も受け取れる条件、有給休暇との関係、税金の扱いもわかりやすく説明します。";
$canonical_url = "https://pfp.tokyo/calc/articles/shobyo-teatekin.php";
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
    "headline": "傷病手当金とは？計算方法・受給条件・期間をわかりやすく解説【2026年版】",
    "description": "傷病手当金の受給条件・計算方法・支給期間を解説。退職後も受け取れる条件や税金の扱いも説明します。",
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
    <span class="header-nav" style="color:#333;">傷病手当金とは</span>
  </div>
</header>

<div class="container">

  <div class="article-header">
    <span class="article-label">健康保険・給付</span>
    <h1>傷病手当金とは？計算方法・受給条件・<br>期間をわかりやすく解説【2026年版】</h1>
    <div class="article-meta">2026年5月12日掲載 ｜ 令和8年（2026年）版</div>
    <div class="article-lead">
      病気やけがで働けなくなったとき、給与の約2/3を最長1年6ヶ月保障してくれる「傷病手当金」。本記事では、<strong>受給条件・支給額の計算方法・申請手順</strong>を具体的に解説します。退職後の受給条件や税金の扱いについても説明します。
    </div>
  </div>

  <!-- 目次 -->
  <div class="toc">
    <div class="toc__title">この記事の目次</div>
    <ol>
      <li><a href="#what">傷病手当金とは</a></li>
      <li><a href="#conditions">受給条件4つ</a></li>
      <li><a href="#calc">支給額の計算方法</a></li>
      <li><a href="#table">年収別 傷病手当金の目安表</a></li>
      <li><a href="#period">支給期間（通算1年6ヶ月）</a></li>
      <li><a href="#apply">申請方法・タイミング</a></li>
      <li><a href="#tax">税金はかかる？</a></li>
      <li><a href="#retirement">退職後も受け取れる条件</a></li>
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

  <!-- 1. 傷病手当金とは -->
  <div class="section" id="what">
    <h2>1. 傷病手当金とは</h2>
    <p>傷病手当金とは、<strong>健康保険の被保険者（会社員・公務員など）が病気やけがで働けなくなり、給与が支払われない場合に支給される給付金</strong>です。</p>
    <p>自分では収入が得られない療養中の生活を経済的に支えるための制度で、給与の約2/3相当額が最長1年6ヶ月支給されます。健康保険組合または協会けんぽへの加入が前提です。</p>

    <div class="point-box">
      <div class="point-box__title">傷病手当金の3つの特徴</div>
      <p>1. 支給額：直近12ヶ月の平均月給の約2/3</p>
      <p>2. 支給期間：通算最大1年6ヶ月</p>
      <p>3. 課税：所得税・住民税の課税対象外（非課税）</p>
    </div>
  </div>

  <!-- 2. 受給条件 -->
  <div class="section" id="conditions">
    <h2>2. 受給条件4つ</h2>
    <p>傷病手当金を受け取るには、以下の4つの条件をすべて満たす必要があります。</p>

    <h3>条件①：健康保険の被保険者であること</h3>
    <p>協会けんぽや健康保険組合に加入している会社員・公務員が対象です。国民健康保険には傷病手当金の制度がないため、<strong>自営業者・フリーランスは原則対象外</strong>です（一部の国民健康保険組合を除く）。</p>

    <h3>条件②：業務外の病気やけがによる療養であること</h3>
    <p>業務上の病気・けがは労災保険の対象となるため、傷病手当金の対象外です。私生活上の病気・けが（風邪・うつ病・骨折など）が対象となります。</p>

    <h3>条件③：連続する3日間の待機期間を満たしていること</h3>
    <p>仕事を休み始めた日から起算して、<strong>連続する3日間（待機期間）</strong>を経過した後、4日目以降の休業から支給されます。待機期間は有給休暇・公休・土日でもカウントされます。</p>

    <h3>条件④：休業した日に給与の支払いがないこと</h3>
    <p>傷病手当金の支給対象日に、会社から給与が支払われている場合は支給されません。ただし、給与が傷病手当金より少ない場合は差額が支給されます。</p>

    <div class="note-box">
      <div class="note-box__title">有給休暇を使っている期間は？</div>
      <p>待機期間（連続3日）のカウントには有給取得日も含まれます。ただし有給休暇中は給与が支払われるため、有給休暇日は傷病手当金の支給対象外です。有給が終わって無給になった日から実際の支給が始まります。</p>
    </div>
  </div>

  <!-- 3. 計算方法 -->
  <div class="section" id="calc">
    <h2>3. 支給額の計算方法</h2>

    <div class="formula-box">
      <div class="formula-box__title">傷病手当金の計算式</div>
      <div class="formula-box__formula">
        支給開始日以前12ヶ月の<br>標準報酬月額の平均 ÷ 30日 × 2/3<br>
        <span style="font-size:13px; font-weight:400;">（= 1日あたりの支給額）</span>
      </div>
    </div>

    <h3>計算例：月給30万円（標準報酬月額30万円）の場合</h3>
    <p>1日あたりの支給額 = 300,000円 ÷ 30日 × 2/3 = <strong>約6,667円/日</strong></p>
    <p>30日間の休業で受け取れる額（待機3日除く27日分）= 6,667円 × 27日 = <strong>約180,000円</strong></p>

    <div class="point-box">
      <div class="point-box__title">「標準報酬月額」とは</div>
      <p>実際の月給を一定の等級に当てはめた金額です。社会保険料の計算にも使われます。交通費など含む月収から算定され、実際の月給と多少異なる場合があります。</p>
      <p>支給開始日前12ヶ月に被保険者期間が満たない場合は、①支給開始日以前の被保険者期間の平均 ②標準報酬月額の全被保険者平均（30万円程度）のいずれか低い額を使用します。</p>
    </div>
  </div>

  <!-- 4. 年収別目安表 -->
  <div class="section" id="table">
    <h2>4. 年収別 傷病手当金の目安表</h2>
    <p>標準報酬月額をもとにした1日あたりの支給額と、30日・90日・180日休業した場合の合計支給額の目安です。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>年収（目安）</th>
          <th>標準報酬月額</th>
          <th>1日の支給額</th>
          <th>30日分</th>
          <th>90日分</th>
          <th>180日分</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>年収300万円</td>
          <td>25万円</td>
          <td>約5,556円</td>
          <td>約16.7万円</td>
          <td>約50.0万円</td>
          <td>約100.0万円</td>
        </tr>
        <tr>
          <td>年収400万円</td>
          <td>34万円</td>
          <td>約7,556円</td>
          <td>約22.7万円</td>
          <td>約68.0万円</td>
          <td>約136.0万円</td>
        </tr>
        <tr>
          <td>年収500万円</td>
          <td>41万円</td>
          <td>約9,111円</td>
          <td>約27.3万円</td>
          <td>約82.0万円</td>
          <td>約164.0万円</td>
        </tr>
        <tr>
          <td>年収600万円</td>
          <td>50万円</td>
          <td>約11,111円</td>
          <td>約33.3万円</td>
          <td>約100.0万円</td>
          <td>約200.0万円</td>
        </tr>
      </tbody>
    </table>

    <p style="font-size:13px; color:#666;">※ 待機期間3日を除いた日数で計算。実際の支給額は標準報酬月額の等級・端数処理により異なります。</p>
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

  <!-- 5. 支給期間 -->
  <div class="section" id="period">
    <h2>5. 支給期間（通算1年6ヶ月）</h2>
    <p>傷病手当金の支給期間は、<strong>支給を開始した日から通算して最大1年6ヶ月（548日）</strong>です。2022年1月の改正により、途中で職場復帰して再び休業した場合でも、通算1年6ヶ月まで受給できるようになりました。</p>

    <div class="point-box">
      <div class="point-box__title">「通算」で最大1年6ヶ月</div>
      <p>たとえば、休業6ヶ月 → 職場復帰2ヶ月 → 再休業の場合、残り1年（12ヶ月）分の傷病手当金を受け取れます。復帰して働いた期間はカウントされません。</p>
    </div>

    <p>支給期間が終了しても回復していない場合は、障害厚生年金・傷病手当の延長制度などへの移行を検討する必要があります。</p>
  </div>

  <!-- 6. 申請方法 -->
  <div class="section" id="apply">
    <h2>6. 申請方法・タイミング</h2>

    <h3>申請先</h3>
    <p>勤務先の会社（総務・人事部門）を通じて、協会けんぽまたは加入している健康保険組合へ申請します。</p>

    <h3>申請書類</h3>
    <p>「健康保険傷病手当金支給申請書」に以下の内容を記入します。</p>
    <table class="data-table">
      <thead>
        <tr>
          <th>記入者</th>
          <th>記入内容</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>被保険者本人</td>
          <td>傷病名・療養期間・給与の有無など</td>
        </tr>
        <tr>
          <td>医師（担当医）</td>
          <td>療養が必要な状態である旨の意見欄</td>
        </tr>
        <tr>
          <td>事業主（会社）</td>
          <td>休業・欠勤期間・給与支払い状況の証明</td>
        </tr>
      </tbody>
    </table>

    <h3>申請タイミング</h3>
    <p>1ヶ月ごとにまとめて申請するのが一般的です。申請から支給まで約2週間〜1ヶ月程度かかります。<strong>申請期限は支給開始日から2年間</strong>（時効）のため、遡って請求することも可能です。</p>
  </div>

  <!-- 7. 税金 -->
  <div class="section" id="tax">
    <h2>7. 税金はかかる？</h2>
    <p>傷病手当金は<strong>所得税・住民税の課税対象外（非課税）</strong>です。確定申告の必要もありません。</p>

    <div class="warn-box">
      <div class="warn-box__title">社会保険料は状況により徴収される</div>
      <p>在職中に傷病手当金を受け取っている場合、健康保険料・厚生年金保険料は引き続き徴収されます。傷病手当金から直接天引きされることはありませんが、別途支払いが必要です。育児休業中と異なり、休業中の社会保険料免除は適用されません。</p>
    </div>
  </div>

  <!-- 8. 退職後の受給 -->
  <div class="section" id="retirement">
    <h2>8. 退職後も受け取れる条件</h2>
    <p>退職後も引き続き傷病手当金を受け取るには、以下の条件をすべて満たす必要があります。</p>

    <table class="data-table">
      <thead>
        <tr>
          <th>条件</th>
          <th>内容</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>資格喪失要件</td>
          <td>退職日まで継続して1年以上の被保険者期間がある</td>
        </tr>
        <tr>
          <td>受給開始要件</td>
          <td>退職日時点で既に傷病手当金を受給中、または受給できる状態にある</td>
        </tr>
        <tr>
          <td>労務不能要件</td>
          <td>退職後も引き続き働けない状態が続いている</td>
        </tr>
      </tbody>
    </table>

    <div class="note-box">
      <div class="note-box__title">退職日に出勤すると受給資格を失う</div>
      <p>有給消化中に退職する場合、退職日当日に出勤（または出勤扱い）していると、継続給付の条件を満たせなくなります。退職日も欠勤・休業として処理されるよう会社に確認しておきましょう。</p>
    </div>
  </div>

  <!-- CTA -->
  <div class="cta-section">
    <h2>普段の手取りをあらかじめ把握しておこう</h2>
    <p>月給・年齢・扶養人数を入力するだけ。傷病手当金の計算基礎となる給与手取りを確認できます。</p>
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

    <h3>有給休暇中は傷病手当金をもらえますか？</h3>
    <p>有給休暇中は会社から給与が支払われるため、その期間は傷病手当金は支給されません。ただし待機期間（連続3日）のカウントには有給取得日も含まれます。有給休暇が終了し、無給の欠勤に移行した日から傷病手当金の支給対象になります。</p>

    <h3>うつ病・精神疾患でも傷病手当金の対象になりますか？</h3>
    <p>はい、対象になります。うつ病・適応障害・パニック障害などの精神疾患も「業務外の傷病」として扱われ、傷病手当金の受給要件を満たせば支給されます。医師の診断書（意見書）が必要です。</p>

    <h3>フリーランス・個人事業主は受け取れますか？</h3>
    <p>国民健康保険には原則として傷病手当金の制度がないため、フリーランス・個人事業主は対象外です。ただし、一部の職業別国民健康保険組合（医師・建築士など）では独自に傷病手当金を設けているケースもあります。</p>
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
      <a href="./nenshu-no-kabe.php" class="related-card">
        <div class="related-card__label">扶養・年収</div>
        <div class="related-card__title">年収の壁とは？103万・130万・150万円の壁をわかりやすく解説</div>
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
