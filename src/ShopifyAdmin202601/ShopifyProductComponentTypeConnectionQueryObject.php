<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductComponentTypeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductComponentTypeConnection";

    public function selectEdges(ShopifyProductComponentTypeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductComponentTypeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyProductComponentTypeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductComponentTypeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyProductComponentTypeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
