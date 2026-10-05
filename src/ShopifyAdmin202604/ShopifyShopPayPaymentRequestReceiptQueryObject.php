<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestReceiptQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceipt";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectOrder(ShopifyShopPayPaymentRequestReceiptOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentRequest(ShopifyShopPayPaymentRequestReceiptPaymentRequestArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestQueryObject("paymentRequest");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProcessingStatus(ShopifyShopPayPaymentRequestReceiptProcessingStatusArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestReceiptProcessingStatusQueryObject("processingStatus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSourceIdentifier()
    {
        $this->selectField("sourceIdentifier");

        return $this;
    }

    public function selectToken()
    {
        $this->selectField("token");

        return $this;
    }
}
