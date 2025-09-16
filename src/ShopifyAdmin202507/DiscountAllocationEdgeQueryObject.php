<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAllocationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAllocationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DiscountAllocationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountAllocationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
