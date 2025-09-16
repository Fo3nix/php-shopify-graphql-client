<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryShipmentLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(InventoryShipmentLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
