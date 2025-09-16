<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseFulfillmentOrderLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ReverseFulfillmentOrderLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
