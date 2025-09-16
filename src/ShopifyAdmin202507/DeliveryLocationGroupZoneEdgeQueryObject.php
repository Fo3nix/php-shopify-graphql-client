<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryLocationGroupZoneEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroupZoneEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DeliveryLocationGroupZoneEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DeliveryLocationGroupZoneQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
