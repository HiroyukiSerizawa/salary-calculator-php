<?php
declare(strict_types=1);

use App\Helpers\FormatHelper;
?>

<div class="section-head">
    <h2 class="section-title">結果</h2>
    <p class="section-text">東京・協会けんぽ前提の概算結果です。</p>
</div>

<?php if ($result === null): ?>
    <div class="empty-state">
        <p class="empty-state__title">まだ計算されていません</p>
        <p class="empty-state__text">左のフォームに入力して「手取り額を計算する」を押してください。</p>
    </div>
<?php else: ?>
    <div class="result-hero">
        <p class="result-hero__label">手取り額</p>
        <p class="result-hero__value"><?= FormatHelper::yen($result['net_salary']) ?></p>
        <p class="result-hero__sub">総支給額 <?= FormatHelper::yen($result['gross_salary']) ?></p>
    </div>

    <div class="result-list">
        <div class="result-row">
            <span>健康保険料</span>
            <strong><?= FormatHelper::yen($result['health_insurance']) ?></strong>
        </div>

        <div class="result-row">
            <span>介護保険料</span>
            <strong><?= FormatHelper::yen($result['care_insurance']) ?></strong>
        </div>

        <div class="result-row">
            <span>子ども・子育て支援金</span>
            <strong><?= FormatHelper::yen($result['child_support']) ?></strong>
        </div>

        <div class="result-row">
            <span>厚生年金保険料</span>
            <strong><?= FormatHelper::yen($result['pension']) ?></strong>
        </div>

        <div class="result-row">
            <span>雇用保険料</span>
            <strong><?= FormatHelper::yen($result['employment_insurance']) ?></strong>
        </div>

        <div class="result-row">
            <span>所得税</span>
            <strong><?= FormatHelper::yen($result['income_tax']) ?></strong>
        </div>

        <div class="result-row">
            <span>住民税</span>
            <strong><?= FormatHelper::yen($result['resident_tax']) ?></strong>
        </div>

        <div class="result-row result-row--total">
            <span>控除合計</span>
            <strong><?= FormatHelper::yen($result['total_deductions']) ?></strong>
        </div>
    </div>

    <div class="note-box">
        <p><strong>課税対象給与:</strong> <?= FormatHelper::yen($result['taxable_salary']) ?></p>
        <p><strong>非課税交通費:</strong> <?= FormatHelper::yen($result['transportation']) ?></p>

        <?php if (isset($result['social_insurance_target_salary'])): ?>
            <p><strong>社会保険判定用給与:</strong> <?= FormatHelper::yen($result['social_insurance_target_salary']) ?></p>
        <?php endif; ?>

        <p><strong>標準報酬月額:</strong> <?= FormatHelper::yen($result['standard_monthly_remuneration']) ?></p>
        <hr>
        <p>・東京版固定です。</p>
        <p>・健康保険は協会けんぽ前提です。</p>
        <p>・交通費は社会保険・雇用保険の判定に含め、所得税の課税対象からは除外しています。</p>
        <p>・子ども・子育て支援金を控除欄に含めています。</p>
        <p>・所得税は令和8年分の月額表JSONをもとに計算しています。</p>
        <p>・実際の給与明細とは端数処理などで差が出る場合があります。</p>
    </div>
<?php endif; ?>