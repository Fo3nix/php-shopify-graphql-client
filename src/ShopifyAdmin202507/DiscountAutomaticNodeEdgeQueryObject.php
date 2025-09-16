<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAutomaticNodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticNodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DiscountAutomaticNodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticNodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
