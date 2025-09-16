<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ReverseDeliveryLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
