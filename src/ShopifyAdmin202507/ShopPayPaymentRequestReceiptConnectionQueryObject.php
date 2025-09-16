<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestReceiptConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceiptConnection";

    public function selectEdges(ShopPayPaymentRequestReceiptConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestReceiptEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopPayPaymentRequestReceiptConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestReceiptQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopPayPaymentRequestReceiptConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
