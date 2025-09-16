<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SellingPlanPricingPolicyUnionObject extends UnionObject
{
    public function onSellingPlanFixedPricingPolicy()
    {
        $object = new SellingPlanFixedPricingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanRecurringPricingPolicy()
    {
        $object = new SellingPlanRecurringPricingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
