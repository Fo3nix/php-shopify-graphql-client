<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldConnection";

    public function selectEdges(ShopifyMetafieldConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMetafieldConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMetafieldConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
