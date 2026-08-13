# KimiQuotes SDK utility: make_context

from kimiquotes_sdk.core.context import KimiQuotesContext


def make_context_util(ctxmap, basectx):
    return KimiQuotesContext(ctxmap, basectx)
