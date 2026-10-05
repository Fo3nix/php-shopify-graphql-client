<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionCyclePriceAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionCyclePriceAdjustment";

    public function selectAdjustmentType()
    {
        $this->selectField("adjustmentType");

        return $this;
    }

    public function selectAdjustmentValue(ShopifySubscriptionCyclePriceAdjustmentAdjustmentValueArgumentsObject $argsObject = null)
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

    public function selectComputedPrice(ShopifySubscriptionCyclePriceAdjustmentComputedPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("computedPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
