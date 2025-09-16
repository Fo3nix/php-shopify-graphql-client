<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class SellingPlanPricingPolicyAdjustmentValueUnionObject extends UnionObject
{
    public function onMoneyV2()
    {
        $object = new MoneyV2QueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanPricingPolicyPercentageValue()
    {
        $object = new SellingPlanPricingPolicyPercentageValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
