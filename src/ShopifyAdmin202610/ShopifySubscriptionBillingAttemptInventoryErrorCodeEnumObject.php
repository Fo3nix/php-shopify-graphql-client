<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifySubscriptionBillingAttemptInventoryErrorCodeEnumObject extends EnumObject
{
    const INSUFFICIENT_INVENTORY = "INSUFFICIENT_INVENTORY";
    const INVENTORY_ALLOCATIONS_NOT_FOUND = "INVENTORY_ALLOCATIONS_NOT_FOUND";
}
