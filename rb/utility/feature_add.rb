# KimiQuotes SDK utility: feature_add
module KimiQuotesUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
