<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The status of a customer's payment for an order.
 */
class ShopifyOrderPaymentStatusQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderPaymentStatus";

    /**
     * A message describing an error during the asynchronous processing of a payment.
     */
    public function selectErrorMessage(): static
    {
        $this->selectField("errorMessage");

        return $this;
    }

    /**
     * The ID of the payment, initially returned by an `orderCreateMandatePayment` or `orderCreatePayment` mutation.
     */
    public function selectPaymentReferenceId(): static
    {
        $this->selectField("paymentReferenceId");

        return $this;
    }

    /**
     * The status of the payment.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The transaction associated with the payment.
     */
    public function selectTransactions(?ShopifyOrderPaymentStatusTransactionsArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A translated message describing an error during the asynchronous processing of a payment.
     */
    public function selectTranslatedErrorMessage(): static
    {
        $this->selectField("translatedErrorMessage");

        return $this;
    }
}
