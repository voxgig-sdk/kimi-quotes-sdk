<?php
declare(strict_types=1);

// Typed models for the KimiQuotes SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.
//
// These are documentation-grade value objects (PHP 8 typed properties),
// registered on the composer classmap autoload. The SDK boundary exchanges
// assoc-arrays; these classes name the shapes for tooling and typed callers.

/** Quote entity data model. */
class Quote
{
    public ?string $context = null;
    public ?int $id = null;
    public string $quote;
    public ?int $year = null;
}

/** Match filter for Quote#load (any subset of Quote fields). */
class QuoteLoadMatch
{
    public ?string $context = null;
    public ?int $id = null;
    public ?string $quote = null;
    public ?int $year = null;
}

/** Match filter for Quote#list (any subset of Quote fields). */
class QuoteListMatch
{
    public ?string $context = null;
    public ?int $id = null;
    public ?string $quote = null;
    public ?int $year = null;
}

