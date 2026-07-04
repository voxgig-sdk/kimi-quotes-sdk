# Typed models for the KimiQuotes SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.

from __future__ import annotations

from dataclasses import dataclass
from typing import Optional, Any


@dataclass
class Quote:
    quote: str
    context: Optional[str] = None
    id: Optional[int] = None
    year: Optional[int] = None


@dataclass
class QuoteLoadMatch:
    context: Optional[str] = None
    id: Optional[int] = None
    quote: Optional[str] = None
    year: Optional[int] = None


@dataclass
class QuoteListMatch:
    context: Optional[str] = None
    id: Optional[int] = None
    quote: Optional[str] = None
    year: Optional[int] = None

