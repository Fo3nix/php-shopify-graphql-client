<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifySellingPlanReserveEnumObject extends EnumObject
{
    const ON_FULFILLMENT = "ON_FULFILLMENT";
    const ON_SALE = "ON_SALE";
}
