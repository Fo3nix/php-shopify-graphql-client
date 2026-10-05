<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryTransferLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryTransferLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
