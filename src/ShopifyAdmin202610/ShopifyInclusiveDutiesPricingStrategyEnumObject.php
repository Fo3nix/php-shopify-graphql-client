<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Answers the question if prices include duties and / or taxes.
 */
class ShopifyInclusiveDutiesPricingStrategyEnumObject extends EnumObject
{
    /**
     * Add duties at checkout when configured to collect.
     */
    const ADD_DUTIES_AT_CHECKOUT = "ADD_DUTIES_AT_CHECKOUT";
    /**
     * Include duties in price when configured to collect.
     */
    const INCLUDE_DUTIES_IN_PRICE = "INCLUDE_DUTIES_IN_PRICE";
}
