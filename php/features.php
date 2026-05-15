<?php
declare(strict_types=1);

// KimiQuotes SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class KimiQuotesFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new KimiQuotesBaseFeature();
            case "test":
                return new KimiQuotesTestFeature();
            default:
                return new KimiQuotesBaseFeature();
        }
    }
}
