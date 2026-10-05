<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestReceiptEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceiptEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyShopPayPaymentRequestReceiptEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestReceiptQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
