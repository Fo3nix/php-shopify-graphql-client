<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestReceiptQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceipt";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectOrder(ShopPayPaymentRequestReceiptOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentRequest(ShopPayPaymentRequestReceiptPaymentRequestArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestQueryObject("paymentRequest");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProcessingStatus(ShopPayPaymentRequestReceiptProcessingStatusArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestReceiptProcessingStatusQueryObject("processingStatus");
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
