<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentEventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentEventEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyFulfillmentEventEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentEventQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
