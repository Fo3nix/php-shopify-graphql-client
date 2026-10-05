<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashDrawerEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashDrawerEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCashDrawerEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashDrawerQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
