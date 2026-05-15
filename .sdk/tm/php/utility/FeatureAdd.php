<?php
declare(strict_types=1);

// KimiQuotes SDK utility: feature_add

class KimiQuotesFeatureAdd
{
    public static function call(KimiQuotesContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
