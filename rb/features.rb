# KimiQuotes SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module KimiQuotesFeatures
  def self.make_feature(name)
    case name
    when "base"
      KimiQuotesBaseFeature.new
    when "test"
      KimiQuotesTestFeature.new
    else
      KimiQuotesBaseFeature.new
    end
  end
end
