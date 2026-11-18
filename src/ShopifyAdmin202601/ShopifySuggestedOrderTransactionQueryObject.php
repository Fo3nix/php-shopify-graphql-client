<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A suggested transaction. Suggested transaction are usually used in the context of refunds
 * and exchanges.
 */
class ShopifySuggestedOrderTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedOrderTransaction";

    /**
     * The masked account number associated with the payment method.
     */
    public function selectAccountNumber(): static
    {
        $this->selectField("accountNumber");

        return $this;
    }

    /**
     * The amount of the transaction.
     *
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount(): static
    {
        $this->selectField("amount");

        return $this;
    }

    /**
     * The amount and currency of the suggested order transaction in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifySuggestedOrderTransactionAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The human-readable payment gateway name suggested to process the transaction.
     */
    public function selectFormattedGateway(): static
    {
        $this->selectField("formattedGateway");

        return $this;
    }

    /**
     * The suggested payment gateway used to process the transaction.
     */
    public function selectGateway(): static
    {
        $this->selectField("gateway");

        return $this;
    }

    /**
     * Specifies the kind of the suggested order transaction.
     */
    public function selectKind(): static
    {
        $this->selectField("kind");

        return $this;
    }

    /**
     * Specifies the available amount to refund on the gateway. Only available within SuggestedRefund.
     *
     * @deprecated Use `maximumRefundableSet` instead.
     */
    public function selectMaximumRefundable(): static
    {
        $this->selectField("maximumRefundable");

        return $this;
    }

    /**
     * Specifies the available amount to refund on the gateway in shop and presentment currencies. Only available within SuggestedRefund.
     */
    public function selectMaximumRefundableSet(?ShopifySuggestedOrderTransactionMaximumRefundableSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The associated parent transaction, for example the authorization of a capture.
     */
    public function selectParentTransaction(?ShopifySuggestedOrderTransactionParentTransactionArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("parentTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The associated payment details related to the transaction.
     */
    public function selectPaymentDetails(?ShopifySuggestedOrderTransactionPaymentDetailsArgumentsObject $argsObject = null): ShopifyPaymentDetailsUnionObject
    {
        $object = new ShopifyPaymentDetailsUnionObject("paymentDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
