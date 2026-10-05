<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppUsagePricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsagePricing";

    public function selectBalanceUsed(ShopifyAppUsagePricingBalanceUsedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("balanceUsed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCappedAmount(ShopifyAppUsagePricingCappedAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("cappedAmount");
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

    public function selectTerms()
    {
        $this->selectField("terms");

        return $this;
    }
}
