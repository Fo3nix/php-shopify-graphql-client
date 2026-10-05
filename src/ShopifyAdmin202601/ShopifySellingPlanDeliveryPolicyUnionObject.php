<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

class ShopifySellingPlanDeliveryPolicyUnionObject extends UnionObject
{
    public function onShopifySellingPlanFixedDeliveryPolicy()
    {
        $object = new ShopifySellingPlanFixedDeliveryPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySellingPlanRecurringDeliveryPolicy()
    {
        $object = new ShopifySellingPlanRecurringDeliveryPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
