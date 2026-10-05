<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyFulfillmentOrderLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
