# KimiQuotes SDK utility: make_context
require_relative '../core/context'
module KimiQuotesUtilities
  MakeContext = ->(ctxmap, basectx) {
    KimiQuotesContext.new(ctxmap, basectx)
  }
end
