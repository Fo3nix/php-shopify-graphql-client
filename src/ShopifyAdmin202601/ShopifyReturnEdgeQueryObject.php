<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReturnEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
