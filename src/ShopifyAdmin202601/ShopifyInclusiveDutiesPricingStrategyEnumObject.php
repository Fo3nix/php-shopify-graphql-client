<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyInclusiveDutiesPricingStrategyEnumObject extends EnumObject
{
    const ADD_DUTIES_AT_CHECKOUT = "ADD_DUTIES_AT_CHECKOUT";
    const INCLUDE_DUTIES_IN_PRICE = "INCLUDE_DUTIES_IN_PRICE";
}
