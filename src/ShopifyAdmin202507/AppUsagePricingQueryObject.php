<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppUsagePricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsagePricing";

    public function selectBalanceUsed(AppUsagePricingBalanceUsedArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("balanceUsed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCappedAmount(AppUsagePricingCappedAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("cappedAmount");
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
