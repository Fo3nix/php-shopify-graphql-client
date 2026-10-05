<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryProfileItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDeliveryProfileItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
