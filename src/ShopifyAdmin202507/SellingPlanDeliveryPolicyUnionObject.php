<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SellingPlanDeliveryPolicyUnionObject extends UnionObject
{
    public function onSellingPlanFixedDeliveryPolicy()
    {
        $object = new SellingPlanFixedDeliveryPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanRecurringDeliveryPolicy()
    {
        $object = new SellingPlanRecurringDeliveryPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
