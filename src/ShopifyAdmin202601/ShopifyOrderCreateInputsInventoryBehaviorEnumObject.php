<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The types of behavior to use when updating inventory.
 */
class ShopifyOrderCreateInputsInventoryBehaviorEnumObject extends EnumObject
{
    /**
     * Do not claim inventory.
     */
    const BYPASS = "BYPASS";
    /**
     * Ignore the product's inventory policy and claim inventory.
     */
    const DECREMENT_IGNORING_POLICY = "DECREMENT_IGNORING_POLICY";
    /**
     * Follow the product's inventory policy and claim inventory, if possible.
     */
    const DECREMENT_OBEYING_POLICY = "DECREMENT_OBEYING_POLICY";
}
