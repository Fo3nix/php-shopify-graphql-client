<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderAdjustmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAdjustmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(OrderAdjustmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new OrderAdjustmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
