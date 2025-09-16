<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SellingPlanBillingPolicyUnionObject extends UnionObject
{
    public function onSellingPlanFixedBillingPolicy()
    {
        $object = new SellingPlanFixedBillingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanRecurringBillingPolicy()
    {
        $object = new SellingPlanRecurringBillingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
