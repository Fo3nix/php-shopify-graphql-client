<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifySellingPlanPricingPolicyAdjustmentTypeEnumObject extends EnumObject
{
    const PERCENTAGE = "PERCENTAGE";
    const FIXED_AMOUNT = "FIXED_AMOUNT";
    const PRICE = "PRICE";
}
