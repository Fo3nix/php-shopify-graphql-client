<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPaymentsPayoutIntervalEnumObject extends EnumObject
{
    const DAILY = "DAILY";
    const WEEKLY = "WEEKLY";
    const MONTHLY = "MONTHLY";
    const MANUAL = "MANUAL";
}
