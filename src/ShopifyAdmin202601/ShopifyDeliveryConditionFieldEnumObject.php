<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The field type that the condition will be applied to.
 */
class ShopifyDeliveryConditionFieldEnumObject extends EnumObject
{
    /**
     * The condition will check against the total weight of the order.
     */
    const TOTAL_WEIGHT = "TOTAL_WEIGHT";
    /**
     * The condition will check against the total price of the order.
     */
    const TOTAL_PRICE = "TOTAL_PRICE";
}
