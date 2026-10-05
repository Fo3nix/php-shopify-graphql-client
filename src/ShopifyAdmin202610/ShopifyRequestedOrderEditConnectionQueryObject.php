<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRequestedOrderEditConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditConnection";

    public function selectEdges(ShopifyRequestedOrderEditConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyRequestedOrderEditConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyRequestedOrderEditConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
