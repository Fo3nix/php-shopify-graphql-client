<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryPurchaseOrderLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryPurchaseOrderLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryPurchaseOrderLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPurchaseOrderLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
