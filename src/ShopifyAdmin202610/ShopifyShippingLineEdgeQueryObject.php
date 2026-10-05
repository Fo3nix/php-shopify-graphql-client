<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShippingLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLineEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyShippingLineEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingLineQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
