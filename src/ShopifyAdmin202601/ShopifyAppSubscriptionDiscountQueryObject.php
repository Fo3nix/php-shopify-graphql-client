<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppSubscriptionDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscount";

    public function selectDurationLimitInIntervals()
    {
        $this->selectField("durationLimitInIntervals");

        return $this;
    }

    public function selectPriceAfterDiscount(ShopifyAppSubscriptionDiscountPriceAfterDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("priceAfterDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRemainingDurationInIntervals()
    {
        $this->selectField("remainingDurationInIntervals");

        return $this;
    }

    public function selectValue(ShopifyAppSubscriptionDiscountValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionDiscountValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
