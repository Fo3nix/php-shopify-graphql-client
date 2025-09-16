<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(OrderTransactionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
