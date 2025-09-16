<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryProfileItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DeliveryProfileItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
