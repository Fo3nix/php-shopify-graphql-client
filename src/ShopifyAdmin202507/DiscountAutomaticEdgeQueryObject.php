<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAutomaticEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DiscountAutomaticEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
