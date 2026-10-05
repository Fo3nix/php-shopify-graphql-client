<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderLocationForMoveEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLocationForMoveEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyFulfillmentOrderLocationForMoveEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLocationForMoveQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
