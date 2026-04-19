<?php
declare(strict_types=1);

namespace App\Config;

const APP_TITLE = '給与手取り計算（東京版）';
const REGION_LABEL = '東京';
const HEALTH_INSURANCE_LABEL = '協会けんぽ（東京）';

/*
|--------------------------------------------------------------------------
| JSONテーブル参照化後に残す定数
|--------------------------------------------------------------------------
*/
const EMPLOYMENT_RATE = 0.00500;   // 本人負担側の想定暫定値
const CARE_INSURANCE_AGE = 40;

/*
|--------------------------------------------------------------------------
| 所得税近似式用の暫定パラメータ
|--------------------------------------------------------------------------
| 本番では月額表ベースへ寄せる余地あり
*/
const BASIC_DEDUCTION_MONTHLY = 5000;
const DEPENDENT_DEDUCTION_MONTHLY = 3000;
const INCOME_TAX_RATE_LOW = 0.05;
const INCOME_TAX_RATE_MIDDLE = 0.08;
const INCOME_TAX_THRESHOLD = 150000;