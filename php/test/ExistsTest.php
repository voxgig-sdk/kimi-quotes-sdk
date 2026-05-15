<?php
declare(strict_types=1);

// KimiQuotes SDK exists test

require_once __DIR__ . '/../kimiquotes_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = KimiQuotesSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
