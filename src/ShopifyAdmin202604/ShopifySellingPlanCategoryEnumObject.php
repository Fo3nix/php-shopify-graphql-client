<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifySellingPlanCategoryEnumObject extends EnumObject
{
    const OTHER = "OTHER";
    const PRE_ORDER = "PRE_ORDER";
    const SUBSCRIPTION = "SUBSCRIPTION";
    const TRY_BEFORE_YOU_BUY = "TRY_BEFORE_YOU_BUY";
}
