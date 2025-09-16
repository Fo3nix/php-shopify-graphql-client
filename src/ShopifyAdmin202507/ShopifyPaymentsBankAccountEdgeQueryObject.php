<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsBankAccountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBankAccountEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPaymentsBankAccountEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBankAccountQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
