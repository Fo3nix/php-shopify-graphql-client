<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SellingPlanFulfillmentTriggerEnumObject extends EnumObject
{
    const ANCHOR = "ANCHOR";
    const ASAP = "ASAP";
    const EXACT_TIME = "EXACT_TIME";
    const UNKNOWN = "UNKNOWN";
}
