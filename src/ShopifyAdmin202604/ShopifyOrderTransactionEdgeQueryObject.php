<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyOrderTransactionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
