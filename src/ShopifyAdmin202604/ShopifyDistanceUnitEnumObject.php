<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Units of measurement for distance.
 */
class ShopifyDistanceUnitEnumObject extends EnumObject
{
    /**
     * Metric system unit of distance.
     */
    const KILOMETERS = "KILOMETERS";
    /**
     * Imperial system unit of distance.
     */
    const MILES = "MILES";
}
