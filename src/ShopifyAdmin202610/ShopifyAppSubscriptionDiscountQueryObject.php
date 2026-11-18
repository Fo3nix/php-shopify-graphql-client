<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Discount applied to the recurring pricing portion of a subscription.
 */
class ShopifyAppSubscriptionDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscount";

    /**
     * The total number of billing intervals to which the discount will be applied.
     * The discount will be applied to an indefinite number of billing intervals if this value is blank.
     */
    public function selectDurationLimitInIntervals(): static
    {
        $this->selectField("durationLimitInIntervals");

        return $this;
    }

    /**
     * The price of the subscription after the discount is applied.
     */
    public function selectPriceAfterDiscount(?ShopifyAppSubscriptionDiscountPriceAfterDiscountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("priceAfterDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The remaining number of billing intervals to which the discount will be applied.
     */
    public function selectRemainingDurationInIntervals(): static
    {
        $this->selectField("remainingDurationInIntervals");

        return $this;
    }

    /**
     * The value of the discount applied every billing interval.
     */
    public function selectValue(?ShopifyAppSubscriptionDiscountValueArgumentsObject $argsObject = null): ShopifyAppSubscriptionDiscountValueUnionObject
    {
        $object = new ShopifyAppSubscriptionDiscountValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
