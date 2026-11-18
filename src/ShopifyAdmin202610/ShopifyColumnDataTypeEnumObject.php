<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The data type of a column.
 */
class ShopifyColumnDataTypeEnumObject extends EnumObject
{
    /**
     * Represents an unspecified data type.
     */
    const UNSPECIFIED = "UNSPECIFIED";
    /**
     * Represents a monetary value.
     */
    const MONEY = "MONEY";
    /**
     * Represents a percentage value.
     */
    const PERCENT = "PERCENT";
    /**
     * Represents an integer value.
     */
    const INTEGER = "INTEGER";
    /**
     * Represents a floating point value.
     */
    const FLOAT = "FLOAT";
    /**
     * Represents a decimal value.
     */
    const DECIMAL = "DECIMAL";
    /**
     * Represents a string value.
     */
    const STRING = "STRING";
    /**
     * Represents a boolean value.
     */
    const BOOLEAN = "BOOLEAN";
    /**
     * Represents a timestamp value in seconds.
     */
    const TIMESTAMP = "TIMESTAMP";
    /**
     * Represents a minute-level timestamp value.
     */
    const MINUTE_TIMESTAMP = "MINUTE_TIMESTAMP";
    /**
     * Represents a hour-level timestamp value.
     */
    const HOUR_TIMESTAMP = "HOUR_TIMESTAMP";
    /**
     * Represents a day-level timestamp value.
     */
    const DAY_TIMESTAMP = "DAY_TIMESTAMP";
    /**
     * Represents a week-level timestamp value.
     */
    const WEEK_TIMESTAMP = "WEEK_TIMESTAMP";
    /**
     * Represents a month-level timestamp value.
     */
    const MONTH_TIMESTAMP = "MONTH_TIMESTAMP";
    /**
     * Represents a quarter-level timestamp value.
     */
    const QUARTER_TIMESTAMP = "QUARTER_TIMESTAMP";
    /**
     * Represents a year-level timestamp value.
     */
    const YEAR_TIMESTAMP = "YEAR_TIMESTAMP";
    /**
     * Represents a day of week value.
     */
    const DAY_OF_WEEK = "DAY_OF_WEEK";
    /**
     * Represents an hour of day value.
     */
    const HOUR_OF_DAY = "HOUR_OF_DAY";
    /**
     * Represents an identity value.
     */
    const IDENTITY = "IDENTITY";
    /**
     * Represents a month of year value.
     */
    const MONTH_OF_YEAR = "MONTH_OF_YEAR";
    /**
     * Represents a week of year value.
     */
    const WEEK_OF_YEAR = "WEEK_OF_YEAR";
    /**
     * Represents a second-level timestamp value.
     */
    const SECOND_TIMESTAMP = "SECOND_TIMESTAMP";
    /**
     * Represents an array of values.
     */
    const ARRAY = "ARRAY";
    /**
     * Represents a duration in milliseconds.
     */
    const MILLISECOND_DURATION = "MILLISECOND_DURATION";
    /**
     * Represents a duration in seconds.
     */
    const SECOND_DURATION = "SECOND_DURATION";
    /**
     * Represents a duration in minutes.
     */
    const MINUTE_DURATION = "MINUTE_DURATION";
    /**
     * Represents a duration in hours.
     */
    const HOUR_DURATION = "HOUR_DURATION";
    /**
     * Represents a duration in days.
     */
    const DAY_DURATION = "DAY_DURATION";
    /**
     * Represents a cumulative value.
     */
    const CUMULATIVE = "CUMULATIVE";
    /**
     * Represents a geographic coordinate value.
     */
    const GEO_COORDINATE = "GEO_COORDINATE";
    /**
     * Represents an entity reference value.
     */
    const ENTITY = "ENTITY";
    /**
     * Represents a hex color value.
     */
    const COLOR = "COLOR";
    /**
     * Represents a string identity value.
     */
    const STRING_IDENTITY = "STRING_IDENTITY";
    /**
     * Represents a rating value.
     */
    const RATING = "RATING";
    /**
     * Represents a unitless scalar value.
     */
    const UNITLESS_SCALAR = "UNITLESS_SCALAR";
    /**
     * Represents a multiplier value.
     */
    const MULTIPLIER = "MULTIPLIER";
}
