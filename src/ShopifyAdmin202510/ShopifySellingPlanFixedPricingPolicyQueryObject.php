<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanFixedPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanFixedPricingPolicy";

    public function selectAdjustmentType()
    {
        $this->selectField("adjustmentType");

        return $this;
    }

    public function selectAdjustmentValue(ShopifySellingPlanFixedPricingPolicyAdjustmentValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject("adjustmentValue");
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
