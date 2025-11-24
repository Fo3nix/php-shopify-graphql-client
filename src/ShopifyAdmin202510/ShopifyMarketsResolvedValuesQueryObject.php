<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketsResolvedValuesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsResolvedValues";

    public function selectCatalogs(ShopifyMarketsResolvedValuesCatalogsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrencyCode()
    {
        $this->selectField("currencyCode");

        return $this;
    }

    public function selectPriceInclusivity(ShopifyMarketsResolvedValuesPriceInclusivityArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResolvedPriceInclusivityQueryObject("priceInclusivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebPresences(ShopifyMarketsResolvedValuesWebPresencesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
