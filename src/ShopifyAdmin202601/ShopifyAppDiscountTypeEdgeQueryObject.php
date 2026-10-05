<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppDiscountTypeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppDiscountTypeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAppDiscountTypeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppDiscountTypeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
