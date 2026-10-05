<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRequestedOrderEditEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyRequestedOrderEditEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRequestedOrderEditQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
