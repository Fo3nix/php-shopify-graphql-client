<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metafield definition constraint criteria to filter metafield definitions by.
 */
class ShopifyMetafieldDefinitionConstraintStatusEnumObject extends EnumObject
{
    /**
     * Returns both constrained and unconstrained metafield definitions.
     */
    const CONSTRAINED_AND_UNCONSTRAINED = "CONSTRAINED_AND_UNCONSTRAINED";
    /**
     * Only returns metafield definitions that are constrained to a resource subtype.
     */
    const CONSTRAINED_ONLY = "CONSTRAINED_ONLY";
    /**
     * Only returns metafield definitions that are not constrained to a resource subtype.
     */
    const UNCONSTRAINED_ONLY = "UNCONSTRAINED_ONLY";
}
