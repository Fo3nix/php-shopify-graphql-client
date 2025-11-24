<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyFunctionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyFunctionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyShopifyFunctionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyFunctionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
