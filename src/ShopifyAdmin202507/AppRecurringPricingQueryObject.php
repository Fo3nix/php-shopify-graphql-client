<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppRecurringPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRecurringPricing";

    public function selectDiscount(AppRecurringPricingDiscountArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionDiscountQueryObject("discount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInterval()
    {
        $this->selectField("interval");

        return $this;
    }

    public function selectPlanHandle()
    {
        $this->selectField("planHandle");

        return $this;
    }

    public function selectPrice(AppRecurringPricingPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
