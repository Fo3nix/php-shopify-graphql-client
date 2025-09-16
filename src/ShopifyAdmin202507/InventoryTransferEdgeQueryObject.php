<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryTransferEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(InventoryTransferEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
