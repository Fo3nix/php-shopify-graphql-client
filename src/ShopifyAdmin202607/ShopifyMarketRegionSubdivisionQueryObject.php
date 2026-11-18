<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A subdivision of a country which comprises a market.
 */
class ShopifyMarketRegionSubdivisionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRegionSubdivision";

    /**
     * The ISO code identifying the subdivision.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The country the subdivision belongs to.
     */
    public function selectCountry(?ShopifyMarketRegionSubdivisionCountryArgumentsObject $argsObject = null): ShopifyMarketRegionSubdivisionCountryQueryObject
    {
        $object = new ShopifyMarketRegionSubdivisionCountryQueryObject("country");
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
