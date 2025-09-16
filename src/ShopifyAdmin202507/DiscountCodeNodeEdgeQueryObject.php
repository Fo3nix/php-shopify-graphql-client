<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCodeNodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeNodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DiscountCodeNodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountCodeNodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
