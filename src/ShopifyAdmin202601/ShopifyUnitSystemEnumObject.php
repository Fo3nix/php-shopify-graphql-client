<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Systems of weights and measures.
 */
class ShopifyUnitSystemEnumObject extends EnumObject
{
    /**
     * Imperial system of weights and measures.
     */
    const IMPERIAL_SYSTEM = "IMPERIAL_SYSTEM";
    /**
     * Metric system of weights and measures.
     */
    const METRIC_SYSTEM = "METRIC_SYSTEM";
}
