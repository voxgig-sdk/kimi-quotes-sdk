-- Typed models for the KimiQuotes SDK (LuaLS annotations).
--
-- GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
-- params (op.<name>.points[].args.params[]). Field/param types come from the
-- canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
-- @voxgig/apidef VALID_CANON). Annotations only — no runtime effect. Do not
-- edit by hand.

---@class Quote
---@field context? string
---@field id? number
---@field quote string
---@field year? number

---@class QuoteLoadMatch

---@class QuoteListMatch

local M = {}

return M
