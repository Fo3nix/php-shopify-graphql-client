<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryTransferEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryTransferEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
