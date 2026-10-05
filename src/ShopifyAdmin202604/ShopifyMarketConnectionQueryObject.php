<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketConnection";

    public function selectEdges(ShopifyMarketConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMarketConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMarketConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
