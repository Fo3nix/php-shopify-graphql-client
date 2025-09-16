<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketCatalogQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCatalog";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMarkets(MarketCatalogMarketsArgumentsObject $argsObject = null)
    {
        $object = new MarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketsCount(MarketCatalogMarketsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("marketsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceList(MarketCatalogPriceListArgumentsObject $argsObject = null)
    {
        $object = new PriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublication(MarketCatalogPublicationArgumentsObject $argsObject = null)
    {
        $object = new PublicationQueryObject("publication");
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
