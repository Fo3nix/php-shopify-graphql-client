<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundShippingLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundShippingLineEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(RefundShippingLineEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new RefundShippingLineQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
