<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentCustomizationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomizationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPaymentCustomizationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentCustomizationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
