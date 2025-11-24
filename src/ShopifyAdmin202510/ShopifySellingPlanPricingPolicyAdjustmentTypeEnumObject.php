<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifySellingPlanPricingPolicyAdjustmentTypeEnumObject extends EnumObject
{
    const PERCENTAGE = "PERCENTAGE";
    const FIXED_AMOUNT = "FIXED_AMOUNT";
    const PRICE = "PRICE";
}
