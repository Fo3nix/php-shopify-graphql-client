<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRefundShippingLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundShippingLineEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyRefundShippingLineEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundShippingLineQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
