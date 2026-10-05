<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyShopifyPaymentsPayoutIntervalEnumObject extends EnumObject
{
    const DAILY = "DAILY";
    const WEEKLY = "WEEKLY";
    const MONTHLY = "MONTHLY";
    const MANUAL = "MANUAL";
}
