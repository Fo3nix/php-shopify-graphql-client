<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerPaymentMethodEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CustomerPaymentMethodEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentMethodQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
