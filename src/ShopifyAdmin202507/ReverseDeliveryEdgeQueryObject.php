<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ReverseDeliveryEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
