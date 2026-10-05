<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAutomaticNodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticNodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDiscountAutomaticNodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
