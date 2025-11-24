<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderAdjustmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAdjustmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyOrderAdjustmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAdjustmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
