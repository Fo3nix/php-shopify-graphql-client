<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class InclusiveTaxPricingStrategyEnumObject extends EnumObject
{
    const ADD_TAXES_AT_CHECKOUT = "ADD_TAXES_AT_CHECKOUT";
    const INCLUDES_TAXES_IN_PRICE = "INCLUDES_TAXES_IN_PRICE";
    const INCLUDES_TAXES_IN_PRICE_BASED_ON_COUNTRY = "INCLUDES_TAXES_IN_PRICE_BASED_ON_COUNTRY";
}
