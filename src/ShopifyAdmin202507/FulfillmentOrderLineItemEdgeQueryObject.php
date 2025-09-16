<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(FulfillmentOrderLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
