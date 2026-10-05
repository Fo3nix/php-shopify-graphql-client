<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashDrawerConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashDrawerConnection";

    public function selectEdges(ShopifyCashDrawerConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashDrawerEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCashDrawerConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashDrawerQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCashDrawerConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
