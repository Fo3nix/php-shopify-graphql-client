<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
