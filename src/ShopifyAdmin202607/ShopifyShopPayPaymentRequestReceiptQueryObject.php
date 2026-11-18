<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The receipt of Shop Pay payment request session submission.
 */
class ShopifyShopPayPaymentRequestReceiptQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceipt";

    /**
     * The date and time when the payment request receipt was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The order that's associated with the payment request receipt.
     */
    public function selectOrder(?ShopifyShopPayPaymentRequestReceiptOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop pay payment request object.
     */
    public function selectPaymentRequest(?ShopifyShopPayPaymentRequestReceiptPaymentRequestArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestQueryObject("paymentRequest");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the payment request session submission.
     */
    public function selectProcessingStatus(?ShopifyShopPayPaymentRequestReceiptProcessingStatusArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestReceiptProcessingStatusQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestReceiptProcessingStatusQueryObject("processingStatus");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The source identifier provided in the `ShopPayPaymentRequestSessionCreate` mutation.
     */
    public function selectSourceIdentifier(): static
    {
        $this->selectField("sourceIdentifier");

        return $this;
    }

    /**
     * The token of the receipt, initially returned by an `ShopPayPaymentRequestSessionSubmit` mutation.
     */
    public function selectToken(): static
    {
        $this->selectField("token");

        return $this;
    }
}
