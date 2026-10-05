<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppRecurringPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRecurringPricing";

    public function selectDiscount(ShopifyAppRecurringPricingDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionDiscountQueryObject("discount");
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

    public function selectPrice(ShopifyAppRecurringPricingPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
