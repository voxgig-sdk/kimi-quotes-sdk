<?php
declare(strict_types=1);

// KimiQuotes SDK utility: result_headers

class KimiQuotesResultHeaders
{
    public static function call(KimiQuotesContext $ctx): ?KimiQuotesResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
