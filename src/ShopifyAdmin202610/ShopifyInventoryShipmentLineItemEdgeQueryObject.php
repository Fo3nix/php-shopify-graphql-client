<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryShipmentLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryShipmentLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
