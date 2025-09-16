<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderTransactionConnection";

    public function selectEdges(OrderTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(OrderTransactionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(OrderTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
