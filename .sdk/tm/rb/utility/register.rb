# KimiQuotes SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

KimiQuotesUtility.registrar = ->(u) {
  u.clean = KimiQuotesUtilities::Clean
  u.done = KimiQuotesUtilities::Done
  u.make_error = KimiQuotesUtilities::MakeError
  u.feature_add = KimiQuotesUtilities::FeatureAdd
  u.feature_hook = KimiQuotesUtilities::FeatureHook
  u.feature_init = KimiQuotesUtilities::FeatureInit
  u.fetcher = KimiQuotesUtilities::Fetcher
  u.make_fetch_def = KimiQuotesUtilities::MakeFetchDef
  u.make_context = KimiQuotesUtilities::MakeContext
  u.make_options = KimiQuotesUtilities::MakeOptions
  u.make_request = KimiQuotesUtilities::MakeRequest
  u.make_response = KimiQuotesUtilities::MakeResponse
  u.make_result = KimiQuotesUtilities::MakeResult
  u.make_point = KimiQuotesUtilities::MakePoint
  u.make_spec = KimiQuotesUtilities::MakeSpec
  u.make_url = KimiQuotesUtilities::MakeUrl
  u.param = KimiQuotesUtilities::Param
  u.prepare_auth = KimiQuotesUtilities::PrepareAuth
  u.prepare_body = KimiQuotesUtilities::PrepareBody
  u.prepare_headers = KimiQuotesUtilities::PrepareHeaders
  u.prepare_method = KimiQuotesUtilities::PrepareMethod
  u.prepare_params = KimiQuotesUtilities::PrepareParams
  u.prepare_path = KimiQuotesUtilities::PreparePath
  u.prepare_query = KimiQuotesUtilities::PrepareQuery
  u.result_basic = KimiQuotesUtilities::ResultBasic
  u.result_body = KimiQuotesUtilities::ResultBody
  u.result_headers = KimiQuotesUtilities::ResultHeaders
  u.transform_request = KimiQuotesUtilities::TransformRequest
  u.transform_response = KimiQuotesUtilities::TransformResponse
}
