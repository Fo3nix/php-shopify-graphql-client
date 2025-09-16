<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SellingPlanIntervalEnumObject extends EnumObject
{
    const DAY = "DAY";
    const WEEK = "WEEK";
    const MONTH = "MONTH";
    const YEAR = "YEAR";
}
