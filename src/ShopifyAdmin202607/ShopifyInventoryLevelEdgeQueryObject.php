<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryLevelEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryLevelEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyInventoryLevelEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryLevelQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
