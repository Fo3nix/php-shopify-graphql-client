<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketCatalogConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCatalogConnection";

    public function selectEdges(ShopifyMarketCatalogConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketCatalogEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMarketCatalogConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketCatalogQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMarketCatalogConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
