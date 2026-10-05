<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryShipmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryShipmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
