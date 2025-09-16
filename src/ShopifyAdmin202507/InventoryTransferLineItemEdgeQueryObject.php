<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryTransferLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(InventoryTransferLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
