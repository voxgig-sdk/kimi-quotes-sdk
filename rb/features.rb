# KimiQuotes SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module KimiQuotesFeatures
  def self.make_feature(name)
    case name
    when "base"
      KimiQuotesBaseFeature.new
    when "ratelimit"
      KimiQuotesRatelimitFeature.new
    when "retry"
      KimiQuotesRetryFeature.new
    when "test"
      KimiQuotesTestFeature.new
    when "timeout"
      KimiQuotesTimeoutFeature.new
    else
      KimiQuotesBaseFeature.new
    end
  end
end
