<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestReceiptEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceiptEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopPayPaymentRequestReceiptEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestReceiptQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
