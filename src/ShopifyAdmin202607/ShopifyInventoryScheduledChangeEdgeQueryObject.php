<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryScheduledChangeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryScheduledChangeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryScheduledChangeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryScheduledChangeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
