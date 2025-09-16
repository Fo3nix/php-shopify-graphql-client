<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFunctionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyFunctionConnection";

    public function selectEdges(ShopifyFunctionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyFunctionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyFunctionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
