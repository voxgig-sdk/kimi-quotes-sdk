-- KimiQuotes SDK exists test

local sdk = require("kimi-quotes_sdk")

describe("KimiQuotesSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
