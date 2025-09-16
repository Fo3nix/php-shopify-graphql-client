<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionPricingPolicy";

    public function selectBasePrice(SubscriptionPricingPolicyBasePriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("basePrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCycleDiscounts(SubscriptionPricingPolicyCycleDiscountsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionCyclePriceAdjustmentQueryObject("cycleDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
