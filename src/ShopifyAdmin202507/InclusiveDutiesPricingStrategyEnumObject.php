<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class InclusiveDutiesPricingStrategyEnumObject extends EnumObject
{
    const ADD_DUTIES_AT_CHECKOUT = "ADD_DUTIES_AT_CHECKOUT";
    const INCLUDE_DUTIES_IN_PRICE = "INCLUDE_DUTIES_IN_PRICE";
}
