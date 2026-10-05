<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductFeedConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeedConnection";

    public function selectEdges(ShopifyProductFeedConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductFeedEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyProductFeedConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductFeedQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyProductFeedConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
