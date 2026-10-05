<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerPaymentMethodEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCustomerPaymentMethodEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
