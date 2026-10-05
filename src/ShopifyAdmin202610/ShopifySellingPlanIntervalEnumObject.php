<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifySellingPlanIntervalEnumObject extends EnumObject
{
    const DAY = "DAY";
    const WEEK = "WEEK";
    const MONTH = "MONTH";
    const YEAR = "YEAR";
}
