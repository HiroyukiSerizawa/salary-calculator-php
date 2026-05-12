<?php
$page_title = "年末調整とは？確定申告との違い・手続き方法をわかりやすく解説【2026年版】";
$page_description = "年末調整とは何か、なぜ必要かを徹底解説。確定申告との違い、申告できる控除の一覧、手続きの流れ、還付・追加徴収のケース、よくある申告漏れまでわかりやすく紹介します。";
$canonical_url = "https://pfp.tokyo/calc/articles/nenmatsu-chosei.php";
$calc_url = "https://pfp.tokyo/calc/index.php";
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
    "datePublished": "2026-05-12",
    "dateModified": "2026-05-12",
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

    header {
      background: #fff;
      border-bottom: 1px solid #e0e7ef;
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
      color: #153987;
    }
    .header-cta {
      background: #fe8d27;
      color: #fff;
      padding: 8px 18px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 700;
      text-decoration: none;
      white-space: nowrap;
      transition: background 0.2s;
    }
    .header-cta:hover { background: #e07820; }

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
    .article-meta { font-size: 13px; color: #888; }

    .toc {
      background: #f0f4f8;
      border-left: 4px solid #1a6fb3;
      border-radius: 0 8px 8px 0;
      padding: 20px 24px;
      margin: 28px 0;
    }
    .toc-title { font-size: 14px; font-weight: 700; color: #1a6fb3; margin-bottom: 10px; }
    .toc ol { padding-left: 20px; }
    .toc li { font-size: 14px; margin-bottom: 5px; }
    .toc a { color: #333; text-decoration: none; }
    .toc a:hover { color: #1a6fb3; text-decoration: underline; }

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

    .highlight-box {
      background: #fff8e1;
      border: 1px solid #ffc107;
      border-radius: 8px;
      padding: 18px 22px;
      margin: 20px 0;
    }
    .highlight-box.blue { background: #e8f0fb; border-color: #1a6fb3; }
    .highlight-box.green { background: #f0fff4; border-color: #38a169; }
    .highlight-box.red { background: #fff5f5; border-color: #e53e3e; }
    .highlight-box .box-title { font-weight: 700; font-size: 15px; margin-bottom: 8px; color: #7b5800; }
    .highlight-box.blue .box-title { color: #1a6fb3; }
    .highlight-box.green .box-title { color: #276749; }
    .highlight-box.red .box-title { color: #c53030; }

    .table-wrap { overflow-x: auto; margin: 20px 0; }
    table { width: 100%; border-collapse: collapse; font-size: 15px; }
    thead th { background: #1a6fb3; color: #fff; padding: 12px 16px; text-align: left; }
    tbody td { padding: 11px 16px; border-bottom: 1px solid #e8edf2; }
    tbody tr:nth-child(even) td { background: #f5f8fc; }
    tbody tr:hover td { background: #eaf2ff; }

    .step-flow {
      counter-reset: step;
      margin: 20px 0;
    }
    .step-item {
      display: flex;
      gap: 16px;
      align-items: flex-start;
      margin-bottom: 14px;
    }
    .step-num {
      background: #1a6fb3;
      color: #fff;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 14px;
      flex-shrink: 0;
      margin-top: 2px;
    }
    .step-content { flex: 1; }
    .step-content strong { display: block; margin-bottom: 4px; }

    .two-col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin: 20px 0;
    }
    @media (max-width: 600px) { .two-col { grid-template-columns: 1fr; } }

    .col-box {
      border-radius: 8px;
      padding: 18px 20px;
    }
    .col-box.ok { background: #f0fff4; border: 1px solid #38a169; }
    .col-box.ng { background: #fff5f5; border: 1px solid #e53e3e; }
    .col-box h4 { font-size: 15px; font-weight: 700; margin-bottom: 10px; }
    .col-box.ok h4 { color: #276749; }
    .col-box.ng h4 { color: #c53030; }
    .col-box ul { padding-left: 18px; margin: 0; }
    .col-box li { font-size: 14px; margin-bottom: 5px; }

    .checklist { list-style: none; padding: 0; margin: 12px 0; }
    .checklist li {
      padding: 8px 0 8px 28px;
      border-bottom: 1px solid #e8edf2;
      font-size: 15px;
      position: relative;
    }
    .checklist li::before {
      content: "⚠️";
      position: absolute;
      left: 0;
    }

    .cta-block {
      background: linear-gradient(135deg, #1a6fb3 0%, #0d4e8a 100%);
      border-radius: 12px;
      padding: 30px 32px;
      text-align: center;
      margin: 36px 0;
      color: #fff;
    }
    .cta-block h3 { font-size: 20px; color: #fff; border-left: none; padding-left: 0; margin: 0 0 10px; }
    .cta-block p { font-size: 15px; margin-bottom: 20px; opacity: 0.9; }
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
    .related-card {
      display: block;
      background: #f5f8fc;
      border: 1px solid #d0dcea;
      border-radius: 8px;
      padding: 16px 20px;
      text-decoration: none;
      color: #1a1a2e;
      transition: background 0.15s;
    }
    .related-card:hover { background: #e8f0fb; }
    .related-card__title { font-size: 14px; font-weight: 700; margin-bottom: 4px; }
    .related-card__desc { font-size: 13px; color: #666; margin: 0; }

    footer { background: #1a1a2e; color: #aaa; text-align: center; padding: 24px 20px; font-size: 13px; }
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
  年末調整とは
</div>

<main>
<article>

  <header class="article-header">
    <span class="article-label">年末調整・税金解説</span>
    <h1>年末調整とは？確定申告との違い・手続き方法をわかりやすく解説【2026年版】</h1>
    <p class="article-meta">公開日：2026年5月12日　情報源：国税庁</p>
  </header>

  <div class="highlight-box">
    <div class="box-title">📌 この記事のポイント</div>
    <ul style="padding-left: 18px; margin: 0;">
      <li>年末調整は毎月の<strong>源泉徴収（概算）を精算する</strong>手続き</li>
      <li>多くの会社員は<strong>確定申告が不要</strong>で年末調整だけで完結する</li>
      <li><strong>医療費控除・寄附金控除・住宅ローン控除初年度</strong>は年末調整ではできず確定申告が必要</li>
      <li>書類提出の締め切りは会社ごとに異なるが、一般的に<strong>11月〜12月上旬</strong></li>
    </ul>
  </div>

  <nav class="toc">
    <div class="toc-title">📋 目次</div>
    <ol>
      <li><a href="#what">年末調整とは</a></li>
      <li><a href="#why">なぜ年末調整が必要か</a></li>
      <li><a href="#vs-kakutei">年末調整と確定申告の違い</a></li>
      <li><a href="#koujyo">年末調整で申告できる控除一覧</a></li>
      <li><a href="#flow">年末調整の手続きの流れ</a></li>
      <li><a href="#kanfu">還付される場合 vs 追加徴収される場合</a></li>
      <li><a href="#dekinai">年末調整でできないこと</a></li>
      <li><a href="#morerashi">よくある申告漏れ</a></li>
      <li><a href="#faq">よくある疑問（FAQ）</a></li>
    </ol>
  </nav>

  <!-- AdSense -->
  <ins class="adsbygoogle"
       style="display:block; text-align:center; margin: 24px 0;"
       data-ad-layout="in-article"
       data-ad-format="fluid"
       data-ad-client="ca-pub-3745259041113437"
       data-ad-slot=""></ins>
  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>

  <!-- ① 年末調整とは -->
  <section id="what">
    <h2>① 年末調整とは（毎月の源泉徴収の精算）</h2>
    <p>
      年末調整とは、1年間に給与から源泉徴収（天引き）された所得税の合計と、
      <strong>正確に計算した年間の所得税との差額を精算する手続き</strong>です。
      会社が従業員に代わって計算・精算を行います。
    </p>
    <p>
      年末調整は原則として<strong>12月の給与または賞与</strong>で精算されます。
      還付（払い過ぎていた場合）の場合は12月の給与に上乗せされ、
      不足（払い不足だった場合）は追加で差し引かれます。
    </p>
    <div class="highlight-box blue">
      <div class="box-title">💡 年末調整の対象者</div>
      年末調整の対象は、<strong>12月31日時点でその会社に在籍している給与所得者</strong>（正社員・パート・派遣社員など）です。
      年収2,000万円超の方や、複数の会社から給与をもらっている場合は対象外で確定申告が必要です。
    </div>
  </section>

  <!-- ② なぜ必要か -->
  <section id="why">
    <h2>② なぜ年末調整が必要か（概算で天引きされているため）</h2>
    <p>
      毎月の給与から引かれる所得税は、<strong>年収が確定していない段階での概算（暫定額）</strong>です。
      国税庁が定める「源泉徴収税額表」をもとに計算されますが、
      以下の理由から実際の税額とずれが生じます。
    </p>
    <ul style="padding-left: 20px; margin-bottom: 16px;">
      <li style="margin-bottom: 8px;">年の途中で扶養家族が増減した</li>
      <li style="margin-bottom: 8px;">生命保険料・地震保険料を支払った（控除を申告していなかった）</li>
      <li style="margin-bottom: 8px;">配偶者控除・配偶者特別控除の金額が変わった</li>
      <li style="margin-bottom: 8px;">住宅ローン控除（2年目以降）を適用する</li>
    </ul>
    <p>
      年末に1年間の所得が確定した段階で正確に再計算し、差額を精算するのが年末調整です。
      多くの給与所得者にとって<strong>確定申告の代わりになる制度</strong>です。
    </p>
  </section>

  <!-- ③ 確定申告との違い -->
  <section id="vs-kakutei">
    <h2>③ 年末調整と確定申告の違い</h2>
    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>項目</th><th>年末調整</th><th>確定申告</th></tr>
        </thead>
        <tbody>
          <tr><td>手続きの主体</td><td>会社（雇用主）が代行</td><td>本人が自分で行う</td></tr>
          <tr><td>時期</td><td>毎年11〜12月（精算は12月給与）</td><td>翌年2月16日〜3月15日</td></tr>
          <tr><td>対象者</td><td>12月末在籍の給与所得者</td><td>年収2,000万円超・副業あり・医療費控除希望者など</td></tr>
          <tr><td>申告できる控除</td><td>配偶者・扶養・生命保険料・住宅ローン（2年目以降）など</td><td>医療費・寄附金（ふるさと納税）・雑損控除・住宅ローン（初年度）など</td></tr>
          <tr><td>書類の提出先</td><td>会社</td><td>税務署（または電子申告）</td></tr>
          <tr><td>自分での計算</td><td>不要（会社が計算）</td><td>必要</td></tr>
        </tbody>
      </table>
    </div>
    <p>
      多くの会社員は年末調整のみで税務手続きが完結します。
      ただし、医療費控除やふるさと納税（ワンストップ特例を使わない場合）など
      <strong>一部の控除は年末調整では申告できず、確定申告が必要</strong>です。
    </p>
  </section>

  <!-- ④ 申告できる控除 -->
  <section id="koujyo">
    <h2>④ 年末調整で申告できる控除一覧</h2>
    <p>
      年末調整では以下の所得控除・税額控除を申告できます。
      それぞれ会社に提出する書類が異なります。
    </p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>控除の種類</th><th>控除額の目安</th><th>必要な書類・条件</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>基礎控除</td>
            <td>48万円（所得2,400万円以下）</td>
            <td>「基礎控除申告書」に記入</td>
          </tr>
          <tr>
            <td>配偶者控除</td>
            <td>最大38万円</td>
            <td>配偶者の所得95万円以下、「配偶者控除等申告書」に記入</td>
          </tr>
          <tr>
            <td>配偶者特別控除</td>
            <td>最大38万円（配偶者の所得に応じて逓減）</td>
            <td>配偶者の所得95万超〜133万以下、同上</td>
          </tr>
          <tr>
            <td>扶養控除</td>
            <td>38〜63万円/人（年齢・種別による）</td>
            <td>「扶養控除等申告書」に扶養親族を記入</td>
          </tr>
          <tr>
            <td>生命保険料控除</td>
            <td>最大12万円（3種合計）</td>
            <td>保険会社発行の「控除証明書」を添付</td>
          </tr>
          <tr>
            <td>地震保険料控除</td>
            <td>最大5万円</td>
            <td>保険会社発行の「控除証明書」を添付</td>
          </tr>
          <tr>
            <td>社会保険料控除</td>
            <td>支払額全額</td>
            <td>国民健康保険・国民年金を自分で支払った場合に申告</td>
          </tr>
          <tr>
            <td>小規模企業共済等掛金控除</td>
            <td>支払額全額</td>
            <td>iDeCo（個人型確定拠出年金）の掛金など、証明書を添付</td>
          </tr>
          <tr>
            <td>住宅借入金等特別控除</td>
            <td>借入残高×0.7%（上限あり）</td>
            <td><strong>2年目以降のみ年末調整可</strong>。「住宅借入金等特別控除申告書」と残高証明書を添付</td>
          </tr>
          <tr>
            <td>ひとり親控除・寡婦控除</td>
            <td>27〜35万円</td>
            <td>「扶養控除等申告書」に記入</td>
          </tr>
          <tr>
            <td>障害者控除</td>
            <td>27〜75万円</td>
            <td>「扶養控除等申告書」に記入</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- CTA（中間） -->
  <div class="cta-block">
    <h3>各種控除を反映した手取りを確認したい方へ</h3>
    <p>月給・年齢・扶養人数・住民税額を入れるだけで手取りを自動計算します。</p>
    <a class="cta-btn" href="<?= htmlspecialchars($calc_url) ?>">→ 無料で手取りを計算する</a>
    <p class="cta-sub">登録不要・東京・協会けんぽ基準</p>
  </div>

  <!-- ⑤ 手続きの流れ -->
  <section id="flow">
    <h2>⑤ 年末調整の手続きの流れ（11月〜12月）</h2>

    <div class="step-flow">
      <div class="step-item">
        <div class="step-num">1</div>
        <div class="step-content">
          <strong>10〜11月：会社から書類が配布される</strong>
          「給与所得者の扶養控除等申告書」「基礎控除申告書兼配偶者控除等申告書兼所得金額調整控除申告書」
          「保険料控除申告書」などが配布されます。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">2</div>
        <div class="step-content">
          <strong>11月〜12月上旬：書類を記入して提出</strong>
          各申告書に必要事項を記入し、生命保険料控除証明書・住宅ローン残高証明書などを添付して会社へ提出します。
          提出期限は会社によって異なりますが、多くは12月上旬です。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">3</div>
        <div class="step-content">
          <strong>12月：会社が年税額を計算・精算</strong>
          会社の経理・人事担当が提出書類をもとに年間の所得税を計算し、
          源泉徴収済みの税額との差額を求めます。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">4</div>
        <div class="step-content">
          <strong>12月給与（または賞与）で精算</strong>
          還付（払い過ぎ）の場合は12月給与に上乗せ、不足の場合は差し引かれます。
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">5</div>
        <div class="step-content">
          <strong>翌年1月：源泉徴収票が交付される</strong>
          1月末までに「給与所得の源泉徴収票」が交付されます。
          確定申告が必要な場合や住宅ローン申込みなどで必要になるので保管しましょう。
        </div>
      </div>
    </div>
  </section>

  <!-- ⑥ 還付 vs 追加徴収 -->
  <section id="kanfu">
    <h2>⑥ 還付される場合 vs 追加徴収される場合</h2>
    <div class="two-col">
      <div class="col-box ok">
        <h4>還付される（払い過ぎ）ケース</h4>
        <ul>
          <li>年の途中に扶養家族が増えた</li>
          <li>生命保険料・地震保険料控除を申告した</li>
          <li>住宅ローン控除（2年目以降）を適用した</li>
          <li>iDeCoの掛金が増えた</li>
          <li>年の途中に給与が下がった</li>
          <li>結婚して配偶者控除が適用になった</li>
        </ul>
      </div>
      <div class="col-box ng">
        <h4>追加徴収される（払い不足）ケース</h4>
        <ul>
          <li>年の途中に扶養家族が減った（子どもが成人など）</li>
          <li>配偶者が働いて配偶者控除が使えなくなった</li>
          <li>年の途中に昇給・昇格した</li>
          <li>賞与が多かったため源泉徴収税額がずれた</li>
        </ul>
      </div>
    </div>
    <p>
      多くの会社員は控除申告をしっかり行っていれば<strong>還付（受け取り）</strong>になるケースが多いです。
      還付額の平均は数千円〜数万円程度とされています。
    </p>
  </section>

  <!-- ⑦ 年末調整でできないこと -->
  <section id="dekinai">
    <h2>⑦ 年末調整でできないこと（確定申告が必要）</h2>
    <p>
      以下の控除は年末調整では申告できません。これらに該当する方は
      翌年2月16日〜3月15日に<strong>確定申告</strong>が必要です。
    </p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr><th>控除・手続き</th><th>理由・備考</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>医療費控除</td>
            <td>年間の医療費が10万円（または所得の5%）を超えた場合に申告可能</td>
          </tr>
          <tr>
            <td>セルフメディケーション税制</td>
            <td>特定の市販薬の購入費用が年間1.2万円超の場合（医療費控除の特例）</td>
          </tr>
          <tr>
            <td>寄附金控除（ふるさと納税）</td>
            <td>ワンストップ特例（5自治体以内）を利用した場合は不要。6自治体以上は確定申告必須</td>
          </tr>
          <tr>
            <td>住宅ローン控除（初年度）</td>
            <td>新規購入・入居の最初の年は必ず確定申告。翌年以降は年末調整でOK</td>
          </tr>
          <tr>
            <td>雑損控除</td>
            <td>災害・盗難等による損失の控除</td>
          </tr>
          <tr>
            <td>副業・事業所得の申告</td>
            <td>給与以外の所得が年20万円超の場合は確定申告が必要</td>
          </tr>
          <tr>
            <td>年収2,000万円超</td>
            <td>年末調整の対象外のため、必ず確定申告が必要</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- ⑧ よくある申告漏れ -->
  <section id="morerashi">
    <h2>⑧ よくある申告漏れ</h2>
    <p>
      年末調整で申告し忘れやすい項目をまとめました。
      申告漏れがあっても翌年3月15日までに確定申告で取り戻せる場合があります。
    </p>

    <ul class="checklist">
      <li>生命保険・個人年金・介護医療保険の控除証明書を添付し忘れた</li>
      <li>iDeCo（個人型確定拠出年金）の掛金証明書を出し忘れた</li>
      <li>地震保険に加入したのに申告していなかった</li>
      <li>子どもが16歳になったのに扶養親族として申告していなかった</li>
      <li>配偶者のパート収入が103万円以下（または150万円以下）なのに配偶者控除を申告していなかった</li>
      <li>障害を持つ家族がいるのに障害者控除を申告していなかった</li>
      <li>住宅ローン控除（2年目以降）の書類を会社に提出し忘れた</li>
      <li>学生の子どもへの仕送りがあるが、扶養控除の申告漏れ（同一生計かどうかを確認）</li>
    </ul>

    <div class="highlight-box blue">
      <div class="box-title">💡 申告漏れに気づいたら</div>
      年末調整の締め切りに間に合わなかった場合でも、
      翌年2月16日〜3月15日の確定申告期間中に申告することで、
      控除の適用を受けることができます。
      また、過去5年以内の申告漏れは「更正の請求」で遡って取り戻すことも可能です。
    </div>
  </section>

  <!-- ⑨ FAQ -->
  <section id="faq">
    <h2>⑨ よくある疑問（FAQ）</h2>

    <div class="faq-item">
      <div class="faq-q">転職した年の年末調整はどうなりますか？</div>
      <div class="faq-a">
        転職した年は、<strong>前職の源泉徴収票を新しい会社に提出</strong>することで、
        年末調整を転職先の会社でまとめて行ってもらえます。
        前職の源泉徴収票がないと年末調整ができないため、必ず受け取るようにしましょう。
        転職先が決まらないまま年内に退職し、年末時点で無職の場合は
        自分で確定申告を行う必要があります。
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-q">ダブルワーク（2か所以上から給与）の場合はどうなりますか？</div>
      <div class="faq-a">
        2か所以上から給与をもらっている場合、
        <strong>メインの会社（「扶養控除等申告書」を提出した会社）で年末調整</strong>が行われます。
        副業・サブの会社では年末調整が行われないため、
        給与所得を合算したうえで<strong>確定申告が原則必要</strong>です（副業の給与が年20万円超の場合）。
        なお、複数の会社に「扶養控除等申告書」を提出することは認められていません。
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-q">年末調整の書類を出し忘れたらどうなりますか？</div>
      <div class="faq-a">
        会社の締め切りを過ぎてしまった場合、その年の年末調整で控除が適用されないため、
        源泉徴収税額の還付が受けられない可能性があります。
        ただし、翌年2月16日〜3月15日に自分で確定申告を行うことで
        申告漏れの控除を適用して還付を受けることができます。
        また、過去5年以内の分は「更正の請求」として遡って申告することも可能です。
      </div>
    </div>
  </section>

  <!-- 関連記事 -->
  <div class="related-articles">
    <h2>関連記事</h2>
    <div class="related-grid">
      <a href="./jumin-zei.php" class="related-card">
        <p class="related-card__title">住民税の計算方法とは？給与から天引きされる仕組みをわかりやすく解説</p>
        <p class="related-card__desc">年末調整の結果が翌年の住民税に反映される仕組みを理解しよう</p>
      </a>
      <a href="./shakai-hoken-keisan.php" class="related-card">
        <p class="related-card__title">社会保険料（健康保険・厚生年金）の計算方法【2026年最新】</p>
        <p class="related-card__desc">年末調整で控除申告できる社会保険料の詳細計算方法</p>
      </a>
      <a href="./kyuyo-meisai-mikata.php" class="related-card">
        <p class="related-card__title">給与明細の見方・読み方ガイド</p>
        <p class="related-card__desc">年末調整後の12月給与明細の見方を確認しよう</p>
      </a>
    </div>
  </div>

</article>
</main>

<div style="background: #f0f4f8; padding: 40px 20px; text-align: center; margin-top: 0;">
  <div style="max-width: 600px; margin: 0 auto;">
    <p style="font-size: 15px; color: #555; margin-bottom: 6px;">控除の仕組みがわかったところで、実際の手取りを確認しましょう</p>
    <p style="font-size: 22px; font-weight: 700; color: #1a1a2e; margin-bottom: 20px;">給与手取り計算ツールで今すぐ確認</p>
    <a href="<?= htmlspecialchars($calc_url) ?>"
       style="display: inline-block; background: linear-gradient(135deg, #1a6fb3, #0d4e8a); color: #fff; font-size: 18px; font-weight: 700; padding: 16px 48px; border-radius: 32px; text-decoration: none; box-shadow: 0 4px 16px rgba(26,111,179,.35);">
      → 手取りを無料で計算する
    </a>
    <p style="font-size: 13px; color: #999; margin-top: 12px;">登録不要・無料・東京/協会けんぽ基準</p>
  </div>
</div>

<!-- AdSense -->
<div style="text-align: center; padding: 20px;">
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-3745259041113437"
       data-ad-slot=""
       data-ad-format="auto"
       data-full-width-responsive="true"></ins>
  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>

<footer>
  <p>
    <a href="<?= htmlspecialchars($calc_url) ?>">給与手取り計算ツール</a> |
    <a href="<?= htmlspecialchars($calc_url) ?>">プライバシーポリシー</a>
  </p>
  <p style="margin-top: 8px;">※ 本記事の情報は国税庁の公表情報に基づきますが、制度変更が生じる場合があります。正確な情報は国税庁または税務署にご確認ください。</p>
  <p style="margin-top: 8px;">&copy; 2026 pfp.tokyo</p>
</footer>

</body>
</html>
