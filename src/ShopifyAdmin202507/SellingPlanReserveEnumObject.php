<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SellingPlanReserveEnumObject extends EnumObject
{
    const ON_FULFILLMENT = "ON_FULFILLMENT";
    const ON_SALE = "ON_SALE";
}
