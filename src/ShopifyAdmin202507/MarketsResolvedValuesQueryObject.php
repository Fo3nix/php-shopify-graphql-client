<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketsResolvedValuesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsResolvedValues";

    public function selectCatalogs(MarketsResolvedValuesCatalogsArgumentsObject $argsObject = null)
    {
        $object = new MarketCatalogConnectionQueryObject("catalogs");
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

    public function selectPriceInclusivity(MarketsResolvedValuesPriceInclusivityArgumentsObject $argsObject = null)
    {
        $object = new ResolvedPriceInclusivityQueryObject("priceInclusivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWebPresences(MarketsResolvedValuesWebPresencesArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
