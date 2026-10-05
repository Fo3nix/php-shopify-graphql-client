<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRefundLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyRefundLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
