<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A market's currency settings.
 */
class ShopifyMarketCurrencySettingsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCurrencySettings";

    /**
     * The currency which this market's customers must use if local currencies are disabled.
     */
    public function selectBaseCurrency(?ShopifyMarketCurrencySettingsBaseCurrencyArgumentsObject $argsObject = null): ShopifyCurrencySettingQueryObject
    {
        $object = new ShopifyCurrencySettingQueryObject("baseCurrency");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether or not local currencies are enabled. If enabled, then prices will
     * be converted to give each customer the best experience based on their
     * region. If disabled, then all customers in this market will see prices
     * in the market's base currency.
     */
    public function selectLocalCurrencies(): static
    {
        $this->selectField("localCurrencies");

        return $this;
    }

    /**
     * Whether or not rounding is enabled on multi-currency prices.
     */
    public function selectRoundingEnabled(): static
    {
        $this->selectField("roundingEnabled");

        return $this;
    }
}
