<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The inventory policy for a billing attempt.
 */
class ShopifySubscriptionBillingAttemptInventoryPolicyEnumObject extends EnumObject
{
    /**
     * Respect the merchant's product variant
     *         inventory policy for this billing attempt.
     */
    const PRODUCT_VARIANT_INVENTORY_POLICY = "PRODUCT_VARIANT_INVENTORY_POLICY";
    /**
     * Override the merchant's product variant
     *          inventory policy and allow overselling for this billing attempt.
     */
    const ALLOW_OVERSELLING = "ALLOW_OVERSELLING";
}
