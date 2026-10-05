<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyColumnDataTypeEnumObject extends EnumObject
{
    const UNSPECIFIED = "UNSPECIFIED";
    const MONEY = "MONEY";
    const PERCENT = "PERCENT";
    const INTEGER = "INTEGER";
    const FLOAT = "FLOAT";
    const DECIMAL = "DECIMAL";
    const STRING = "STRING";
    const BOOLEAN = "BOOLEAN";
    const TIMESTAMP = "TIMESTAMP";
    const MINUTE_TIMESTAMP = "MINUTE_TIMESTAMP";
    const HOUR_TIMESTAMP = "HOUR_TIMESTAMP";
    const DAY_TIMESTAMP = "DAY_TIMESTAMP";
    const WEEK_TIMESTAMP = "WEEK_TIMESTAMP";
    const MONTH_TIMESTAMP = "MONTH_TIMESTAMP";
    const QUARTER_TIMESTAMP = "QUARTER_TIMESTAMP";
    const YEAR_TIMESTAMP = "YEAR_TIMESTAMP";
    const DAY_OF_WEEK = "DAY_OF_WEEK";
    const HOUR_OF_DAY = "HOUR_OF_DAY";
    const IDENTITY = "IDENTITY";
    const MONTH_OF_YEAR = "MONTH_OF_YEAR";
    const WEEK_OF_YEAR = "WEEK_OF_YEAR";
    const SECOND_TIMESTAMP = "SECOND_TIMESTAMP";
    const ARRAY = "ARRAY";
    const MILLISECOND_DURATION = "MILLISECOND_DURATION";
    const SECOND_DURATION = "SECOND_DURATION";
    const MINUTE_DURATION = "MINUTE_DURATION";
    const HOUR_DURATION = "HOUR_DURATION";
    const DAY_DURATION = "DAY_DURATION";
    const CUMULATIVE = "CUMULATIVE";
    const GEO_COORDINATE = "GEO_COORDINATE";
    const ENTITY = "ENTITY";
    const COLOR = "COLOR";
    const STRING_IDENTITY = "STRING_IDENTITY";
    const RATING = "RATING";
    const UNITLESS_SCALAR = "UNITLESS_SCALAR";
    const MULTIPLIER = "MULTIPLIER";
}
