<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SellingPlanPricingPolicyAdjustmentTypeEnumObject extends EnumObject
{
    const PERCENTAGE = "PERCENTAGE";
    const FIXED_AMOUNT = "FIXED_AMOUNT";
    const PRICE = "PRICE";
}
