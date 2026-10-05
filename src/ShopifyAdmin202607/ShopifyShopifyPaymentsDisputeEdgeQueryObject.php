<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsDisputeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyShopifyPaymentsDisputeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
