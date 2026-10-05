<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAutomaticEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDiscountAutomaticEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
