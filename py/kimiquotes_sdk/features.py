# KimiQuotes SDK feature factory

from kimiquotes_sdk.feature.base_feature import KimiQuotesBaseFeature
from kimiquotes_sdk.feature.test_feature import KimiQuotesTestFeature


def _make_feature(name):
    features = {
        "base": lambda: KimiQuotesBaseFeature(),
        "test": lambda: KimiQuotesTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
