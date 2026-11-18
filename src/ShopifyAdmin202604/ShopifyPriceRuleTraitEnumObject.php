<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The list of features that can be supported by a price rule.
 */
class ShopifyPriceRuleTraitEnumObject extends EnumObject
{
    /**
     * The price rule supports Buy X, Get Y (BXGY) discounts.
     */
    const BUY_ONE_GET_ONE = "BUY_ONE_GET_ONE";
    /**
     * The price rule supports Buy X, Get Y (BXGY) discounts that specify a custom allocation limit.
     */
    const BUY_ONE_GET_ONE_WITH_ALLOCATION_LIMIT = "BUY_ONE_GET_ONE_WITH_ALLOCATION_LIMIT";
    /**
     * The price rule supports bulk discounts.
     */
    const BULK = "BULK";
    /**
     * The price rule targets specific customers.
     */
    const SPECIFIC_CUSTOMERS = "SPECIFIC_CUSTOMERS";
    /**
     * The price rule supports discounts that require a quantity.
     */
    const QUANTITY_DISCOUNTS = "QUANTITY_DISCOUNTS";
}
