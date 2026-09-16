# KimiQuotes SDK feature factory

from kimiquotes_sdk.feature.base_feature import KimiQuotesBaseFeature
from kimiquotes_sdk.feature.ratelimit_feature import KimiQuotesRatelimitFeature
from kimiquotes_sdk.feature.retry_feature import KimiQuotesRetryFeature
from kimiquotes_sdk.feature.test_feature import KimiQuotesTestFeature
from kimiquotes_sdk.feature.timeout_feature import KimiQuotesTimeoutFeature


_FEATURES = {
    "base": lambda: KimiQuotesBaseFeature(),
    "ratelimit": lambda: KimiQuotesRatelimitFeature(),
    "retry": lambda: KimiQuotesRetryFeature(),
    "test": lambda: KimiQuotesTestFeature(),
    "timeout": lambda: KimiQuotesTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
