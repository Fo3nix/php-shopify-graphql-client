<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryCarrierServiceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierServiceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DeliveryCarrierServiceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
