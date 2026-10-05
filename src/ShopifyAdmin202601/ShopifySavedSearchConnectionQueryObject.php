<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySavedSearchConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SavedSearchConnection";

    public function selectEdges(ShopifySavedSearchConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySavedSearchConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySavedSearchConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
