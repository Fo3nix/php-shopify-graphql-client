<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CartTransformEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CartTransformEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CartTransformQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
