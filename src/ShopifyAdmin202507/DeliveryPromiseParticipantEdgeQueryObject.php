<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryPromiseParticipantEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipantEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DeliveryPromiseParticipantEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DeliveryPromiseParticipantQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
