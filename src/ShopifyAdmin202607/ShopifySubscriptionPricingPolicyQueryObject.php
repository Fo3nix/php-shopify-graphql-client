<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Subscription Line Pricing Policy.
 */
class ShopifySubscriptionPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionPricingPolicy";

    /**
     * The base price per unit for the subscription line in the contract's currency.
     */
    public function selectBasePrice(?ShopifySubscriptionPricingPolicyBasePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("basePrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The adjustments per cycle for the subscription line.
     */
    public function selectCycleDiscounts(?ShopifySubscriptionPricingPolicyCycleDiscountsArgumentsObject $argsObject = null): ShopifySubscriptionCyclePriceAdjustmentQueryObject
    {
        $object = new ShopifySubscriptionCyclePriceAdjustmentQueryObject("cycleDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
