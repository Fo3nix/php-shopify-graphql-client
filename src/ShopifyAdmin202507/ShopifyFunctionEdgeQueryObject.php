<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFunctionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyFunctionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyFunctionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
