<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseDeliveryEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReverseDeliveryEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
