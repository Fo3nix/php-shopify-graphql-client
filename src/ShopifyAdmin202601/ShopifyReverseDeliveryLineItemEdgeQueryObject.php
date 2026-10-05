<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseDeliveryLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReverseDeliveryLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
