<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRequestedOrderEditLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyRequestedOrderEditLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
