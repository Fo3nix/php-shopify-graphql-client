<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A TenderTransaction represents a transaction with financial impact on a shop's balance sheet. A tender transaction always
 * represents actual money movement between a buyer and a shop. TenderTransactions can be used instead of OrderTransactions
 * for reconciling a shop's cash flow. A TenderTransaction is immutable once created.
 */
class ShopifyTenderTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransaction";

    /**
     * The amount and currency of the tender transaction.
     */
    public function selectAmount(?ShopifyTenderTransactionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The order that's related to the tender transaction. This value is null if the order has been deleted.
     */
    public function selectOrder(?ShopifyTenderTransactionOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Information about the payment method used for the transaction.
     */
    public function selectPaymentMethod(): static
    {
        $this->selectField("paymentMethod");

        return $this;
    }

    /**
     * Date and time when the transaction was processed.
     */
    public function selectProcessedAt(): static
    {
        $this->selectField("processedAt");

        return $this;
    }

    /**
     * The remote gateway reference associated with the tender transaction.
     */
    public function selectRemoteReference(): static
    {
        $this->selectField("remoteReference");

        return $this;
    }

    /**
     * Whether the transaction is a test transaction.
     */
    public function selectTest(): static
    {
        $this->selectField("test");

        return $this;
    }

    /**
     * Information about the payment instrument used for the transaction.
     */
    public function selectTransactionDetails(?ShopifyTenderTransactionTransactionDetailsArgumentsObject $argsObject = null): ShopifyTenderTransactionDetailsUnionObject
    {
        $object = new ShopifyTenderTransactionDetailsUnionObject("transactionDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member who performed the transaction.
     */
    public function selectUser(?ShopifyTenderTransactionUserArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("user");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
