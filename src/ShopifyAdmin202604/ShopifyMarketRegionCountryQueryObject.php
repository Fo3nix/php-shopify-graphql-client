<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A country which comprises a market.
 */
class ShopifyMarketRegionCountryQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRegionCountry";

    /**
     * The ISO code identifying the country.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The currency which this country uses given its market settings.
     */
    public function selectCurrency(?ShopifyMarketRegionCountryCurrencyArgumentsObject $argsObject = null): ShopifyCurrencySettingQueryObject
    {
        $object = new ShopifyCurrencySettingQueryObject("currency");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the region.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
