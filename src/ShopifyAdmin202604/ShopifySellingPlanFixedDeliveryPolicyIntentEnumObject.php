<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible intentions of a Delivery Policy.
 */
class ShopifySellingPlanFixedDeliveryPolicyIntentEnumObject extends EnumObject
{
    /**
     * A merchant-centric delivery policy. Mark this delivery policy to define when the merchant should start fulfillment.
     */
    const FULFILLMENT_BEGIN = "FULFILLMENT_BEGIN";
}
