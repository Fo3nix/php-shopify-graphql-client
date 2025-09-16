<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryLevelEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryLevelEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(InventoryLevelEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
