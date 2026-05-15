# KimiQuotes SDK exists test

require "minitest/autorun"
require_relative "../KimiQuotes_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = KimiQuotesSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
