// Typed models for the KimiQuotes SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.

export interface Quote {
  context?: string
  id?: number
  quote: string
  year?: number
}

export type QuoteLoadMatch = Partial<Quote>

export type QuoteListMatch = Partial<Quote>

