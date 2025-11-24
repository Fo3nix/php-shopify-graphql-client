<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCodeNodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeNodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDiscountCodeNodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
