<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionPricingPolicy";

    public function selectBasePrice(ShopifySubscriptionPricingPolicyBasePriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("basePrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCycleDiscounts(ShopifySubscriptionPricingPolicyCycleDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionCyclePriceAdjustmentQueryObject("cycleDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
