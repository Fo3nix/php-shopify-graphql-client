<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketCurrencySettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCurrencySettings";

    public function selectBaseCurrency(MarketCurrencySettingsBaseCurrencyArgumentsObject $argsObject = null)
    {
        $object = new CurrencySettingQueryObject("baseCurrency");
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
