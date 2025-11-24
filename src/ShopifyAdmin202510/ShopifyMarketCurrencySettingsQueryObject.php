<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketCurrencySettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCurrencySettings";

    public function selectBaseCurrency(ShopifyMarketCurrencySettingsBaseCurrencyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCurrencySettingQueryObject("baseCurrency");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocalCurrencies()
    {
        $this->selectField("localCurrencies");

        return $this;
    }

    public function selectRoundingEnabled()
    {
        $this->selectField("roundingEnabled");

        return $this;
    }
}
