<?php
declare(strict_types=1);

// KimiQuotes SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

KimiQuotesUtility::setRegistrar(function (KimiQuotesUtility $u): void {
    $u->clean = [KimiQuotesClean::class, 'call'];
    $u->done = [KimiQuotesDone::class, 'call'];
    $u->make_error = [KimiQuotesMakeError::class, 'call'];
    $u->feature_add = [KimiQuotesFeatureAdd::class, 'call'];
    $u->feature_hook = [KimiQuotesFeatureHook::class, 'call'];
    $u->feature_init = [KimiQuotesFeatureInit::class, 'call'];
    $u->fetcher = [KimiQuotesFetcher::class, 'call'];
    $u->make_fetch_def = [KimiQuotesMakeFetchDef::class, 'call'];
    $u->make_context = [KimiQuotesMakeContext::class, 'call'];
    $u->make_options = [KimiQuotesMakeOptions::class, 'call'];
    $u->make_request = [KimiQuotesMakeRequest::class, 'call'];
    $u->make_response = [KimiQuotesMakeResponse::class, 'call'];
    $u->make_result = [KimiQuotesMakeResult::class, 'call'];
    $u->make_point = [KimiQuotesMakePoint::class, 'call'];
    $u->make_spec = [KimiQuotesMakeSpec::class, 'call'];
    $u->make_url = [KimiQuotesMakeUrl::class, 'call'];
    $u->param = [KimiQuotesParam::class, 'call'];
    $u->prepare_auth = [KimiQuotesPrepareAuth::class, 'call'];
    $u->prepare_body = [KimiQuotesPrepareBody::class, 'call'];
    $u->prepare_headers = [KimiQuotesPrepareHeaders::class, 'call'];
    $u->prepare_method = [KimiQuotesPrepareMethod::class, 'call'];
    $u->prepare_params = [KimiQuotesPrepareParams::class, 'call'];
    $u->prepare_path = [KimiQuotesPreparePath::class, 'call'];
    $u->prepare_query = [KimiQuotesPrepareQuery::class, 'call'];
    $u->result_basic = [KimiQuotesResultBasic::class, 'call'];
    $u->result_body = [KimiQuotesResultBody::class, 'call'];
    $u->result_headers = [KimiQuotesResultHeaders::class, 'call'];
    $u->transform_request = [KimiQuotesTransformRequest::class, 'call'];
    $u->transform_response = [KimiQuotesTransformResponse::class, 'call'];
});
