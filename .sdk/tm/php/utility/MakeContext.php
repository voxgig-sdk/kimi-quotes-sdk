<?php
declare(strict_types=1);

// KimiQuotes SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class KimiQuotesMakeContext
{
    public static function call(array $ctxmap, ?KimiQuotesContext $basectx): KimiQuotesContext
    {
        return new KimiQuotesContext($ctxmap, $basectx);
    }
}
