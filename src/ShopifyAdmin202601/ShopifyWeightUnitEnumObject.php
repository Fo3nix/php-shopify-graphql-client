<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Units of measurement for weight.
 */
class ShopifyWeightUnitEnumObject extends EnumObject
{
    /**
     * 1 kilogram equals 1000 grams.
     */
    const KILOGRAMS = "KILOGRAMS";
    /**
     * Metric system unit of mass.
     */
    const GRAMS = "GRAMS";
    /**
     * 1 pound equals 16 ounces.
     */
    const POUNDS = "POUNDS";
    /**
     * Imperial system unit of mass.
     */
    const OUNCES = "OUNCES";
}
