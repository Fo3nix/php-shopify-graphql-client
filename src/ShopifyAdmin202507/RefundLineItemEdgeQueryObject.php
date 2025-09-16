<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(RefundLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new RefundLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
