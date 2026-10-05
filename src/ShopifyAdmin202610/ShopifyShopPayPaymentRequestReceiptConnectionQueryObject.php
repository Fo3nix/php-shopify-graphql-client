<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestReceiptConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceiptConnection";

    public function selectEdges(ShopifyShopPayPaymentRequestReceiptConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestReceiptEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyShopPayPaymentRequestReceiptConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestReceiptQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyShopPayPaymentRequestReceiptConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
