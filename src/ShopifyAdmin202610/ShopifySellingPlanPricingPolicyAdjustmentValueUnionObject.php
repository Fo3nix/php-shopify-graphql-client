<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * Represents a selling plan pricing policy adjustment value type.
 */
class ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject extends UnionObject
{
    public function onShopifyMoneyV2(): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanPricingPolicyPercentageValue(): ShopifySellingPlanPricingPolicyPercentageValueQueryObject
    {
        $object = new ShopifySellingPlanPricingPolicyPercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
