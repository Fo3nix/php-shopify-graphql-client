<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The accepted types of unit of measurement.
 */
class ShopifyUnitPriceMeasurementMeasuredTypeEnumObject extends EnumObject
{
    /**
     * Unit of measurements representing volumes.
     */
    const VOLUME = "VOLUME";
    /**
     * Unit of measurements representing weights.
     */
    const WEIGHT = "WEIGHT";
    /**
     * Unit of measurements representing lengths.
     */
    const LENGTH = "LENGTH";
    /**
     * Unit of measurements representing areas.
     */
    const AREA = "AREA";
    /**
     * Unit of measurements representing counts.
     */
    const COUNT = "COUNT";
    /**
     * The type of measurement is unknown. Upgrade to the latest version of the API to resolve this type.
     */
    const UNKNOWN = "UNKNOWN";
}
