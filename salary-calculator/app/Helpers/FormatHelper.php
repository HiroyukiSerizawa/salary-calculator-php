<?php
declare(strict_types=1);

namespace App\Helpers;

final class FormatHelper
{
    public static function yen(int|float $value): string
    {
        return '¥' . number_format((int)round($value));
    }

    public static function h(?string $value): string
    {
        return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
    }
}
