<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid tiers for the predicted spend of a customer with a shop.
 */
class ShopifyCustomerPredictedSpendTierEnumObject extends EnumObject
{
    /**
     * The customer's spending is predicted to be in the top spending range for the shop in the following year.
     */
    const HIGH = "HIGH";
    /**
     * The customer's spending is predicted to be in the normal spending range for the shop in the following year.
     */
    const MEDIUM = "MEDIUM";
    /**
     * The customer's spending is predicted to be zero, or in the lowest spending range for the shop in the following year.
     */
    const LOW = "LOW";
}
