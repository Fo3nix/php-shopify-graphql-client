<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppSubscriptionDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionDiscount";

    public function selectDurationLimitInIntervals()
    {
        $this->selectField("durationLimitInIntervals");

        return $this;
    }

    public function selectPriceAfterDiscount(AppSubscriptionDiscountPriceAfterDiscountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("priceAfterDiscount");
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

    public function selectValue(AppSubscriptionDiscountValueArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionDiscountValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
