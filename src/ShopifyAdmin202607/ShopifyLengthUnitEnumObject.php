<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Units of measurement for length.
 */
class ShopifyLengthUnitEnumObject extends EnumObject
{
    /**
     * 1000 millimeters equals 1 meter.
     */
    const MILLIMETERS = "MILLIMETERS";
    /**
     * 100 centimeters equals 1 meter.
     */
    const CENTIMETERS = "CENTIMETERS";
    /**
     * Metric system unit of length.
     */
    const METERS = "METERS";
    /**
     * 12 inches equals 1 foot.
     */
    const INCHES = "INCHES";
    /**
     * Imperial system unit of length.
     */
    const FEET = "FEET";
    /**
     * 1 yard equals 3 feet.
     */
    const YARDS = "YARDS";
}
