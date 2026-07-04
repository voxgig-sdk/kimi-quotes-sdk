# frozen_string_literal: true

# Typed models for the KimiQuotes SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# Quote entity data model.
#
# @!attribute [rw] context
#   @return [String, nil]
#
# @!attribute [rw] id
#   @return [Integer, nil]
#
# @!attribute [rw] quote
#   @return [String]
#
# @!attribute [rw] year
#   @return [Integer, nil]
Quote = Struct.new(
  :context,
  :id,
  :quote,
  :year,
  keyword_init: true
)

# Match filter for Quote#load (any subset of Quote fields).
#
# @!attribute [rw] context
#   @return [String, nil]
#
# @!attribute [rw] id
#   @return [Integer, nil]
#
# @!attribute [rw] quote
#   @return [String, nil]
#
# @!attribute [rw] year
#   @return [Integer, nil]
QuoteLoadMatch = Struct.new(
  :context,
  :id,
  :quote,
  :year,
  keyword_init: true
)

# Match filter for Quote#list (any subset of Quote fields).
#
# @!attribute [rw] context
#   @return [String, nil]
#
# @!attribute [rw] id
#   @return [Integer, nil]
#
# @!attribute [rw] quote
#   @return [String, nil]
#
# @!attribute [rw] year
#   @return [Integer, nil]
QuoteListMatch = Struct.new(
  :context,
  :id,
  :quote,
  :year,
  keyword_init: true
)

