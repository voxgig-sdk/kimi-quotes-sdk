<?php
declare(strict_types=1);

// KimiQuotes SDK utility: prepare_body

class KimiQuotesPrepareBody
{
    public static function call(KimiQuotesContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
