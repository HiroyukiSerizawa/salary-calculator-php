<?php
declare(strict_types=1);

use App\Helpers\FormatHelper;
?>

<div class="section-head">
    <h2 class="section-title">入力</h2>
    <p class="section-text">必要な項目だけ入力して、サーバー側で計算します。</p>
</div>

<form method="post" action="./index.php" novalidate>
    <div class="form-grid">
        <div class="field">
            <label for="salary">月給額 <span class="required">必須</span></label>
            <input
                type="number"
                id="salary"
                name="salary"
                min="1"
                step="1"
                value="<?= FormatHelper::h($input['salary']) ?>"
                placeholder="300000"
            >
            <?php if (isset($errors['salary'])): ?>
                <p class="error"><?= FormatHelper::h($errors['salary']) ?></p>
            <?php endif; ?>
        </div>

        <div class="field">
            <label for="transportation">交通費</label>
            <input
                type="number"
                id="transportation"
                name="transportation"
                min="0"
                step="1"
                value="<?= FormatHelper::h($input['transportation']) ?>"
                placeholder="10000"
            >
            <?php if (isset($errors['transportation'])): ?>
                <p class="error"><?= FormatHelper::h($errors['transportation']) ?></p>
            <?php endif; ?>
        </div>

        <div class="field">
            <label for="age">年齢 <span class="required">必須</span></label>
            <input
                type="number"
                id="age"
                name="age"
                min="15"
                max="100"
                step="1"
                value="<?= FormatHelper::h($input['age']) ?>"
                placeholder="35"
            >
            <?php if (isset($errors['age'])): ?>
                <p class="error"><?= FormatHelper::h($errors['age']) ?></p>
            <?php endif; ?>
        </div>

        <div class="field">
            <label for="dependents">扶養人数</label>
            <input
                type="number"
                id="dependents"
                name="dependents"
                min="0"
                step="1"
                value="<?= FormatHelper::h($input['dependents']) ?>"
                placeholder="0"
            >
            <?php if (isset($errors['dependents'])): ?>
                <p class="error"><?= FormatHelper::h($errors['dependents']) ?></p>
            <?php endif; ?>
        </div>

        <div class="field">
            <label for="resident_tax">住民税</label>
            <input
                type="number"
                id="resident_tax"
                name="resident_tax"
                min="0"
                step="1"
                value="<?= FormatHelper::h($input['resident_tax']) ?>"
                placeholder="12000"
            >
            <?php if (isset($errors['resident_tax'])): ?>
                <p class="error"><?= FormatHelper::h($errors['resident_tax']) ?></p>
            <?php endif; ?>
        </div>

        <div class="field">
            <label for="employment_insurance">雇用保険</label>
            <select id="employment_insurance" name="employment_insurance">
                <option value="1" <?= $input['employment_insurance'] === '1' ? 'selected' : '' ?>>加入あり</option>
                <option value="0" <?= $input['employment_insurance'] === '0' ? 'selected' : '' ?>>加入なし</option>
            </select>
            <?php if (isset($errors['employment_insurance'])): ?>
                <p class="error"><?= FormatHelper::h($errors['employment_insurance']) ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="actions">
        <button type="submit" class="button button--primary">手取り額を計算する</button>
        <a href="./index.php" class="button button--secondary">入力をクリア</a>
    </div>
</form>