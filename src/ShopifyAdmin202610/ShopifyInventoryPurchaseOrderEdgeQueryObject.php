<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryPurchaseOrderEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryPurchaseOrderEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryPurchaseOrderEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPurchaseOrderQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
