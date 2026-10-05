<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderTransactionConnection";

    public function selectEdges(ShopifyOrderTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyOrderTransactionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyOrderTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
