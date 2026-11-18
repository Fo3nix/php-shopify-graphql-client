<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the staged status of a CalculatedShippingLine on a CalculatedOrder.
 */
class ShopifyCalculatedShippingLineStagedStatusEnumObject extends EnumObject
{
    /**
     * The shipping line has no staged changes associated with it.
     */
    const NONE = "NONE";
    /**
     * The shipping line was added as part of the current order edit.
     */
    const ADDED = "ADDED";
    /**
     * The shipping line was removed as part of the current order edit.
     */
    const REMOVED = "REMOVED";
}
