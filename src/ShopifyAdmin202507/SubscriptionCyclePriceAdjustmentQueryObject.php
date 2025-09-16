<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionCyclePriceAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionCyclePriceAdjustment";

    public function selectAdjustmentType()
    {
        $this->selectField("adjustmentType");

        return $this;
    }

    public function selectAdjustmentValue(SubscriptionCyclePriceAdjustmentAdjustmentValueArgumentsObject $argsObject = null)
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

    public function selectComputedPrice(SubscriptionCyclePriceAdjustmentComputedPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("computedPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
