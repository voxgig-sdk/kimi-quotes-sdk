# ProjectName SDK exists test

import pytest
from kimiquotes_sdk import KimiQuotesSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = KimiQuotesSDK.test(None, None)
        assert testsdk is not None
