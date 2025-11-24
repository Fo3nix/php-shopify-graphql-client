<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifySellingPlanIntervalEnumObject extends EnumObject
{
    const DAY = "DAY";
    const WEEK = "WEEK";
    const MONTH = "MONTH";
    const YEAR = "YEAR";
}
