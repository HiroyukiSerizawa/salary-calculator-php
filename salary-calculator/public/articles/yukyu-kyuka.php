<?php
$page_title = "有給休暇とは？付与日数・取得義務・給与への影響をわかりやすく解説【2026年版】";
$page_description = "有給休暇の付与日数（勤続年数別）・年5日取得義務・パートタイムの比例付与・取得時の給与計算方法まで詳しく解説。有給を取ると給与はどうなるかもわかります。";
$canonical_url = "https://calc.pfp.tokyo/articles/yukyu-kyuka.php";
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
    "headline": "<?= htmlspecialchars($page_title) ?>",
    "description": "<?= htmlspecialchars($page_description) ?>",
    "author": {
      "@type": "Organization",
      "name": "給与手取り計算ツール"
    },
    "datePublished": "2026-05-15",
    "dateModified": "2026-05-15",
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
    .header-nav {
      font-size: 13px;
    }
    .header-nav a { color: #555; text-decoration: none; margin-left: 16px; }
    .header-nav a:hover { color: #153987; }
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

    .formula-box {
      background: #1a1a2e;
      color: #e8f0fb;
      border-radius: 8px;
      padding: 18px 22px;
      margin: 20px 0;
      font-family: monospace;
      font-size: 15px;
      line-height: 2;
    }
    .formula-box .comment { color: #7ab3e0; font-size: 13px; }

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

    .ad-area {
      background: #f5f7fa;
      border: 1px solid #e0e7ef;
      border-radius: 8px;
      padding: 12px;
      margin: 32px 0;
      text-align: center;
      min-height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

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
      color: inherit;
      transition: background 0.2s;
    }
    .related-card:hover { background: #e8f0fb; }
    .related-card__label { font-size: 11px; color: #fe8d27; font-weight: 700; margin-bottom: 4px; }
    .related-card__title { font-size: 14px; font-weight: 700; color: #1a1a2e; }

    footer {
      background: #1a1a2e;
      color: #aaa;
      text-align: center;
      padding: 24px;
      font-size: 13px;
      margin-top: 0;
    }
    footer a { color: #aaa; text-decoration: none; }
    footer a:hover { color: #fff; }

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
  有給休暇
</div>

<main>
  <article>
    <div class="article-header">
      <span class="article-label">給与・休暇</span>
      <h1>有給休暇とは？付与日数・取得義務・給与への影響をわかりやすく解説【2026年版】</h1>
      <p class="article-meta">2026年5月掲載 ｜ 給与手取り計算ツール編集部</p>
    </div>

    <div class="toc">
      <div class="toc-title">📋 この記事の目次</div>
      <ol>
        <li><a href="#what">有給休暇とは</a></li>
        <li><a href="#days">有給休暇の付与日数（勤続年数別）</a></li>
        <li><a href="#part-time">パートタイム・アルバイトの比例付与</a></li>
        <li><a href="#obligation">年5日の取得義務（2019年4月〜）</a></li>
        <li><a href="#salary">有給を取ったときの給与はどうなる？</a></li>
        <li><a href="#expiry">有給休暇の消滅時効と買取</a></li>
        <li><a href="#faq">よくある質問</a></li>
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

    <h2 id="what">1. 有給休暇とは</h2>

    <p>有給休暇（正式名称：<strong>年次有給休暇</strong>）とは、<strong>給与が支払われたまま取得できる休暇</strong>のことです。労働基準法第39条に基づく労働者の権利であり、雇用形態（正社員・パート・アルバイト）を問わず、一定の要件を満たした労働者に付与されます。</p>

    <p>有給休暇が発生する条件は以下の2つです。</p>

    <div class="highlight-box blue">
      <div class="box-title">📌 有給休暇が発生する条件（労働基準法第39条）</div>
      <ul style="padding-left:18px;">
        <li style="margin-bottom:6px;">雇入れの日から <strong>6ヶ月以上継続して勤務</strong> していること</li>
        <li style="margin-bottom:6px;">全労働日の <strong>8割以上出勤</strong> していること</li>
      </ul>
    </div>

    <p>この2つの条件を満たすと、最初の有給休暇（10日）が付与されます。その後は1年ごとに出勤率を確認しながら日数が増えていきます。有給休暇は正社員だけでなく、パートタイム・アルバイト・派遣社員・契約社員にも適用されます。</p>

    <h2 id="days">2. 有給休暇の付与日数（勤続年数別）</h2>

    <p>週5日以上勤務している正社員・フルタイム労働者の場合、勤続年数に応じて以下の日数が付与されます。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>勤続年数</th>
            <th>付与日数</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>0年6ヶ月</td><td>10日</td></tr>
          <tr><td>1年6ヶ月</td><td>11日</td></tr>
          <tr><td>2年6ヶ月</td><td>12日</td></tr>
          <tr><td>3年6ヶ月</td><td>14日</td></tr>
          <tr><td>4年6ヶ月</td><td>16日</td></tr>
          <tr><td>5年6ヶ月</td><td>18日</td></tr>
          <tr><td>6年6ヶ月以上</td><td>20日（上限）</td></tr>
        </tbody>
      </table>
    </div>

    <p>付与日数の上限は<strong>年間20日</strong>です。翌年に繰り越せるため、最大で一度に40日分を保有できます（繰越分20日＋新規付与20日）。</p>

    <h2 id="part-time">3. パートタイム・アルバイトの比例付与</h2>

    <p>週の所定労働日数が4日以下、または年間所定労働日数が216日以下のパートタイム・アルバイトには、<strong>労働日数に比例した日数</strong>が付与されます（比例付与）。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>週労働日数</th>
            <th>0.5年</th>
            <th>1.5年</th>
            <th>2.5年</th>
            <th>3.5年</th>
            <th>4.5年</th>
            <th>5.5年</th>
            <th>6.5年〜</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>4日</td><td>7日</td><td>8日</td><td>9日</td><td>10日</td><td>12日</td><td>13日</td><td>15日</td></tr>
          <tr><td>3日</td><td>5日</td><td>6日</td><td>6日</td><td>8日</td><td>9日</td><td>10日</td><td>11日</td></tr>
          <tr><td>2日</td><td>3日</td><td>4日</td><td>4日</td><td>5日</td><td>6日</td><td>6日</td><td>7日</td></tr>
          <tr><td>1日</td><td>1日</td><td>2日</td><td>2日</td><td>2日</td><td>3日</td><td>3日</td><td>3日</td></tr>
        </tbody>
      </table>
    </div>

    <p style="font-size:13px; color:#888;">※ 週の所定労働日数が4日以下であっても、週30時間以上勤務している場合はフルタイム扱いとなり、上記の比例付与ではなく通常の付与日数が適用されます。</p>

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

    <h2 id="obligation">4. 年5日の取得義務（2019年4月〜）</h2>

    <div class="highlight-box blue">
      <div class="box-title">📌 年5日取得義務のポイント（2019年4月施行）</div>
      <ul style="padding-left:18px;">
        <li style="margin-bottom:6px;">有給休暇が<strong>10日以上付与された労働者</strong>は、年間5日の取得が義務</li>
        <li style="margin-bottom:6px;">会社は取得できていない社員に対して<strong>「時季指定」</strong>して取得させなければならない</li>
        <li style="margin-bottom:6px;">違反した会社には<strong>30万円以下の罰金</strong>（労働基準法第120条）</li>
      </ul>
    </div>

    <p>2019年4月の労働基準法改正により、年10日以上の有給休暇が付与されているすべての労働者（管理職・有期雇用者も含む）に対して、会社が年5日の有給取得を確実に実施させることが義務付けられました。</p>

    <p>労働者が自分で5日以上取得した場合は問題ありませんが、取得できていない場合、会社が取得日を指定（時季指定）しなければなりません。この制度により、有給休暇を取りにくい職場環境の改善が促進されています。</p>

    <h2 id="salary">5. 有給を取ったときの給与はどうなる？</h2>

    <p>有給休暇を取得した日の賃金は、以下の3つの方法のいずれかで支払われます。どの方法を採用するかは、就業規則または労使協定で定められています。</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>方法</th>
            <th>内容</th>
            <th>一般的な使用</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>通常賃金</strong></td>
            <td>働いた日と同じ賃金を支払う</td>
            <td>最も一般的</td>
          </tr>
          <tr>
            <td><strong>平均賃金</strong></td>
            <td>直近3ヶ月の賃金総額を総暦日数で割った平均日額</td>
            <td>賃金変動が大きい場合</td>
          </tr>
          <tr>
            <td><strong>標準報酬日額</strong></td>
            <td>健康保険の標準報酬月額 ÷ 30</td>
            <td>労使協定が必要</td>
          </tr>
        </tbody>
      </table>
    </div>

    <p>多くの会社では<strong>「通常賃金」</strong>が採用されており、有給を取得した日も通常出勤した日と同じ給与が支払われます。つまり、有給休暇を取得しても<strong>その月の給与は基本的に変わりません</strong>。</p>

    <div class="formula-box">
      <span class="comment">── 通常賃金での計算例 ──</span><br>
      月給：250,000円 ／ 月の所定労働日数：22日<br>
      1日あたりの賃金：250,000円 ÷ 22日 ≈ <strong>約11,364円</strong><br>
      <br>
      <span class="comment">── 有給取得日もこの金額が支払われる ──</span><br>
      有給を2日取得 → 通常出勤20日分 + 有給2日分 = 22日分の賃金
    </div>

    <p>ただし、<strong>時間外手当（残業代）や皆勤手当</strong>は有給取得の影響を受ける場合があります。就業規則で皆勤手当の扱いが定められている場合は確認しておきましょう。</p>

    <h2 id="expiry">6. 有給休暇の消滅時効と買取</h2>

    <h3>消滅時効は2年</h3>
    <p>有給休暇には<strong>2年間の時効</strong>があります（労働基準法第115条）。付与日から2年間使用しなかった有給休暇は消滅します。たとえば入社6ヶ月後に付与された10日分は、2年後（入社2年6ヶ月後）に消滅します。</p>

    <h3>買取は原則禁止</h3>
    <p>有給休暇の金銭買取は<strong>原則として禁止</strong>されています。買取を認めると「有給を使わずにお金をもらう方が得」という状況が生まれ、有給取得が阻害されるためです。</p>

    <div class="highlight-box">
      <div class="box-title">💡 退職時は残有給を買い取ってもらえる可能性がある</div>
      <p style="margin:0;">退職時に残っている有給休暇と、時効消滅が確定した有給休暇については、<strong>例外的に買取が認められています</strong>。法的な義務はありませんが、退職交渉の中で会社に買取を依頼することは可能です。退職前に残有給日数を確認しておくことをおすすめします。</p>
    </div>

    <div class="cta-block">
      <h3>有給取得で月収・手取りがどう変わるか確認</h3>
      <p>月給や控除の条件を変えて、実際の手取り額をシミュレーションできます。</p>
      <a href="<?= htmlspecialchars($calc_url) ?>" class="cta-btn">給与手取り計算ツールを使う</a>
      <p class="cta-sub">東京・協会けんぽ前提。無料でご利用いただけます。</p>
    </div>

    <h2 id="faq">7. よくある質問</h2>

    <div class="faq-item">
      <div class="faq-q">入社してすぐに有給は使える？</div>
      <div class="faq-a">法的には<strong>入社から6ヶ月後</strong>に初めて有給休暇が付与されます。ただし、会社の裁量で入社日から有給を付与したり、試用期間終了後に付与するケースもあります。就業規則を確認してください。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">有給を拒否されたら？</div>
      <div class="faq-a">会社には<strong>時季変更権</strong>（業務が著しく繁忙な場合などに、別の日への変更を依頼する権利）がありますが、<strong>有給取得そのものを拒否することは原則として違法</strong>です。取得を拒否された場合は、労働基準監督署への相談も選択肢です。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">有給休暇は何日まで繰り越せる？</div>
      <div class="faq-a">有給休暇は<strong>最大2年間繰り越し</strong>できます。付与された年に使い切れなかった分は翌年に繰り越されますが、付与から2年が経過した分は時効消滅します。最大保有日数は新規付与20日＋繰越20日＝40日となります。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">退職前に有給を全部使っていい？</div>
      <div class="faq-a">法的には問題ありません。会社の時季変更権は「別の日に取得させる」ことが前提のため、退職後には行使できず、<strong>退職前の有給消化を会社が拒否することはできません</strong>。残有給日数を確認し、退職日を逆算して申請しましょう。</div>
    </div>

    <div class="faq-item">
      <div class="faq-q">有給消化中も社会保険料はかかる？</div>
      <div class="faq-a">かかります。有給休暇中は<strong>在籍扱い</strong>となるため、健康保険・厚生年金・雇用保険の保険料は通常通り発生します。給与から天引きされる金額に変化はありません。</div>
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

    <div class="related-articles">
      <h2>関連記事</h2>
      <div class="related-grid">
        <a href="./zangyo-dai.php" class="related-card">
          <div class="related-card__label">給与・労働時間</div>
          <div class="related-card__title">残業代の計算方法とは？割増賃金の仕組みをわかりやすく解説【2026年版】</div>
        </a>
        <a href="./kyuyo-meisai-mikata.php" class="related-card">
          <div class="related-card__label">給与・基礎知識</div>
          <div class="related-card__title">給与明細の見方とは？各項目の意味と手取りの計算方法をわかりやすく解説【2026年版】</div>
        </a>
        <a href="./nenshu-no-kabe.php" class="related-card">
          <div class="related-card__label">扶養・年収</div>
          <div class="related-card__title">年収の壁とは？103万・130万・150万円の壁をわかりやすく解説【2026年最新】</div>
        </a>
        <a href="./shakai-hoken-keisan.php" class="related-card">
          <div class="related-card__label">社会保険</div>
          <div class="related-card__title">社会保険料の計算方法とは？健康保険・厚生年金の仕組みをわかりやすく解説【2026年版】</div>
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
