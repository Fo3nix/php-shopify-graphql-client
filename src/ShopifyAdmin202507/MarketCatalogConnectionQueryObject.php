<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketCatalogConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCatalogConnection";

    public function selectEdges(MarketCatalogConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MarketCatalogEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MarketCatalogConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MarketCatalogQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MarketCatalogConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
