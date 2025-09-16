<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanFixedPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanFixedPricingPolicy";

    public function selectAdjustmentType()
    {
        $this->selectField("adjustmentType");

        return $this;
    }

    public function selectAdjustmentValue(SellingPlanFixedPricingPolicyAdjustmentValueArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanPricingPolicyAdjustmentValueUnionObject("adjustmentValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }
}
