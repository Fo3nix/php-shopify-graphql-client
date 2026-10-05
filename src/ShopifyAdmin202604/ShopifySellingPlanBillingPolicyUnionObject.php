<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifySellingPlanBillingPolicyUnionObject extends UnionObject
{
    public function onShopifySellingPlanFixedBillingPolicy()
    {
        $object = new ShopifySellingPlanFixedBillingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanRecurringBillingPolicy()
    {
        $object = new ShopifySellingPlanRecurringBillingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
