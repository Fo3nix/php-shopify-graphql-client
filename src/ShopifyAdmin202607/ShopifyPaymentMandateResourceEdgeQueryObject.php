<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentMandateResourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentMandateResourceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPaymentMandateResourceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentMandateResourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
