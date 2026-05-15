<?php
declare(strict_types=1);

// KimiQuotes SDK utility: result_body

class KimiQuotesResultBody
{
    public static function call(KimiQuotesContext $ctx): ?KimiQuotesResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
