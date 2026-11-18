<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Answers the question if prices include duties and / or taxes.
 */
class ShopifyInclusiveTaxPricingStrategyEnumObject extends EnumObject
{
    /**
     * Add taxes at checkout when configured to collect.
     */
    const ADD_TAXES_AT_CHECKOUT = "ADD_TAXES_AT_CHECKOUT";
    /**
     * Include taxes in price when configured to collect.
     */
    const INCLUDES_TAXES_IN_PRICE = "INCLUDES_TAXES_IN_PRICE";
    /**
     * Include taxes in price based on country when configured to collect.
     */
    const INCLUDES_TAXES_IN_PRICE_BASED_ON_COUNTRY = "INCLUDES_TAXES_IN_PRICE_BASED_ON_COUNTRY";
}
