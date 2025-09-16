<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SellingPlanCategoryEnumObject extends EnumObject
{
    const OTHER = "OTHER";
    const PRE_ORDER = "PRE_ORDER";
    const SUBSCRIPTION = "SUBSCRIPTION";
    const TRY_BEFORE_YOU_BUY = "TRY_BEFORE_YOU_BUY";
}
