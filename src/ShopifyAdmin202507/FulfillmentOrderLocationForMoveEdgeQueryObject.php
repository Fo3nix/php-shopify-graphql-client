<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderLocationForMoveEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLocationForMoveEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(FulfillmentOrderLocationForMoveEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLocationForMoveQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
