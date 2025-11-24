<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanRecurringPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringPricingPolicy";

    public function selectAdjustmentType()
    {
        $this->selectField("adjustmentType");

        return $this;
    }

    public function selectAdjustmentValue(ShopifySellingPlanRecurringPricingPolicyAdjustmentValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject("adjustmentValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAfterCycle()
    {
        $this->selectField("afterCycle");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }
}
