<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedRequestedOrderEditLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRequestedOrderEditLineItemConnection";

    public function selectEdges(ShopifyCalculatedRequestedOrderEditLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCalculatedRequestedOrderEditLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCalculatedRequestedOrderEditLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
