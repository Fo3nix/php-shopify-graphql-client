<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAllocationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAllocationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDiscountAllocationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAllocationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
