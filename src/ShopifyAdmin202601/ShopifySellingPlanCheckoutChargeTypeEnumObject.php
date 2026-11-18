<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The checkout charge when the full amount isn't charged at checkout.
 */
class ShopifySellingPlanCheckoutChargeTypeEnumObject extends EnumObject
{
    /**
     * The checkout charge is a percentage of the product or variant price.
     */
    const PERCENTAGE = "PERCENTAGE";
    /**
     * The checkout charge is a fixed price amount.
     */
    const PRICE = "PRICE";
}
