<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRequestedOrderEditLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditLineItemConnection";

    public function selectEdges(ShopifyRequestedOrderEditLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyRequestedOrderEditLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyRequestedOrderEditLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
