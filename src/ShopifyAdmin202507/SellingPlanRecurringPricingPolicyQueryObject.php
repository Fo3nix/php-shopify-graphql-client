<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanRecurringPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringPricingPolicy";

    public function selectAdjustmentType()
    {
        $this->selectField("adjustmentType");

        return $this;
    }

    public function selectAdjustmentValue(SellingPlanRecurringPricingPolicyAdjustmentValueArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanPricingPolicyAdjustmentValueUnionObject("adjustmentValue");
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
