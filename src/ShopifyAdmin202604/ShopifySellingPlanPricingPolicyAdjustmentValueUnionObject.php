<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject extends UnionObject
{
    public function onShopifyMoneyV2()
    {
        $object = new ShopifyMoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanPricingPolicyPercentageValue()
    {
        $object = new ShopifySellingPlanPricingPolicyPercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
