<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryScheduledChangeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryScheduledChangeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(InventoryScheduledChangeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new InventoryScheduledChangeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
