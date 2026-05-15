-- KimiQuotes SDK error

local KimiQuotesError = {}
KimiQuotesError.__index = KimiQuotesError


function KimiQuotesError.new(code, msg, ctx)
  local self = setmetatable({}, KimiQuotesError)
  self.is_sdk_error = true
  self.sdk = "KimiQuotes"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function KimiQuotesError:error()
  return self.msg
end


function KimiQuotesError:__tostring()
  return self.msg
end


return KimiQuotesError
