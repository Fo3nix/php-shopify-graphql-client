<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentScheduleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentScheduleEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPaymentScheduleEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentScheduleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
