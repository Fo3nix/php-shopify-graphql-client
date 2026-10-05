<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryProfileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDeliveryProfileEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
