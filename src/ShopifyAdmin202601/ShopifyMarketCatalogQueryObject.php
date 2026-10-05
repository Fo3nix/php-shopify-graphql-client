<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketCatalogQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCatalog";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMarkets(ShopifyMarketCatalogMarketsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketsCount(ShopifyMarketCatalogMarketsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("marketsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceList(ShopifyMarketCatalogPriceListArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublication(ShopifyMarketCatalogPublicationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
