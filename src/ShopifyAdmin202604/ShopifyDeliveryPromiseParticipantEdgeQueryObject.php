<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryPromiseParticipantEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipantEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDeliveryPromiseParticipantEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryPromiseParticipantQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
