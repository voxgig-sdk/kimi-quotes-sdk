<?php
declare(strict_types=1);

// KimiQuotes SDK base feature

class KimiQuotesBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(KimiQuotesContext $ctx, array $options): void {}
    public function PostConstruct(KimiQuotesContext $ctx): void {}
    public function PostConstructEntity(KimiQuotesContext $ctx): void {}
    public function SetData(KimiQuotesContext $ctx): void {}
    public function GetData(KimiQuotesContext $ctx): void {}
    public function GetMatch(KimiQuotesContext $ctx): void {}
    public function SetMatch(KimiQuotesContext $ctx): void {}
    public function PrePoint(KimiQuotesContext $ctx): void {}
    public function PreSpec(KimiQuotesContext $ctx): void {}
    public function PreRequest(KimiQuotesContext $ctx): void {}
    public function PreResponse(KimiQuotesContext $ctx): void {}
    public function PreResult(KimiQuotesContext $ctx): void {}
    public function PreDone(KimiQuotesContext $ctx): void {}
    public function PreUnexpected(KimiQuotesContext $ctx): void {}
}
