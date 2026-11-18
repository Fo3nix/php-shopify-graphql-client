<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible types of an adjustment applied to determine a price.
 */
class ShopifyAuditTrailAdjustmentTypeEnumObject extends EnumObject
{
    /**
     * The adjustment value is added to the old price to get the new price.
     */
    const ADDITION = "ADDITION";
    /**
     * The adjustment value is multiplied by the old price to get the new price.
     */
    const MULTIPLICATION = "MULTIPLICATION";
    /**
     * The adjustment value replaces the old price.
     */
    const REPLACEMENT = "REPLACEMENT";
}
