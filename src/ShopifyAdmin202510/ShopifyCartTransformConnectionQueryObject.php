<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCartTransformConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformConnection";

    public function selectEdges(ShopifyCartTransformConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCartTransformEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCartTransformConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCartTransformQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCartTransformConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
