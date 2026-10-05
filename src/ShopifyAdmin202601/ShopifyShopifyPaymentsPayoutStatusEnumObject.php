<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyShopifyPaymentsPayoutStatusEnumObject extends EnumObject
{
    const SCHEDULED = "SCHEDULED";
    const PAID = "PAID";
    const FAILED = "FAILED";
    const CANCELED = "CANCELED";
}
