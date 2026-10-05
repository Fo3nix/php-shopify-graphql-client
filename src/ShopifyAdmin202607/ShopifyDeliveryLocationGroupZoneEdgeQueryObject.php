<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryLocationGroupZoneEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroupZoneEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDeliveryLocationGroupZoneEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryLocationGroupZoneQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
