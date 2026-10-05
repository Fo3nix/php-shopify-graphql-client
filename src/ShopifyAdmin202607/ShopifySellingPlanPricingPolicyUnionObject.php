<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

class ShopifySellingPlanPricingPolicyUnionObject extends UnionObject
{
    public function onShopifySellingPlanFixedPricingPolicy()
    {
        $object = new ShopifySellingPlanFixedPricingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanRecurringPricingPolicy()
    {
        $object = new ShopifySellingPlanRecurringPricingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
