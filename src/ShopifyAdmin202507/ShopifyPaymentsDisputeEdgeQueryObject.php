<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsDisputeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPaymentsDisputeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
