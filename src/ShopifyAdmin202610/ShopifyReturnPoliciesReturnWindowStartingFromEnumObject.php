<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The starting point for calculating a return window.
 */
class ShopifyReturnPoliciesReturnWindowStartingFromEnumObject extends EnumObject
{
    /**
     * The return window starts from the delivery date.
     */
    const ITEM_DELIVERY_DATE = "ITEM_DELIVERY_DATE";
    /**
     * The return window starts from the delivery date of the last item.
     */
    const LAST_ITEM_DELIVERY_DATE = "LAST_ITEM_DELIVERY_DATE";
}
