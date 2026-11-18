<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A debit revert transaction which increases the store credit account balance.
 * Debit revert transactions are created automatically when a [store credit account debit transaction](https://shopify.dev/api/admin-graphql/latest/objects/StoreCreditAccountDebitTransaction) is reverted.
 *
 * Store credit account debit transactions are reverted when an order is cancelled, refunded or in the event of a payment failure at checkout.
 * The amount added to the balance is equal to the amount reverted on the original credit.
 */
class ShopifyStoreCreditAccountDebitRevertTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountDebitRevertTransaction";

    /**
     * The store credit account that the transaction belongs to.
     */
    public function selectAccount(?ShopifyStoreCreditAccountDebitRevertTransactionAccountArgumentsObject $argsObject = null): ShopifyStoreCreditAccountQueryObject
    {
        $object = new ShopifyStoreCreditAccountQueryObject("account");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount of the transaction.
     */
    public function selectAmount(?ShopifyStoreCreditAccountDebitRevertTransactionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The balance of the account after the transaction.
     */
    public function selectBalanceAfterTransaction(?ShopifyStoreCreditAccountDebitRevertTransactionBalanceAfterTransactionArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("balanceAfterTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the transaction was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The reverted debit transaction.
     */
    public function selectDebitTransaction(?ShopifyStoreCreditAccountDebitRevertTransactionDebitTransactionArgumentsObject $argsObject = null): ShopifyStoreCreditAccountDebitTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitTransactionQueryObject("debitTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The event that caused the store credit account transaction.
     */
    public function selectEvent(): static
    {
        $this->selectField("event");

        return $this;
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
     * The origin of the store credit account transaction.
     */
    public function selectOrigin(?ShopifyStoreCreditAccountDebitRevertTransactionOriginArgumentsObject $argsObject = null): ShopifyStoreCreditAccountTransactionOriginUnionObject
    {
        $object = new ShopifyStoreCreditAccountTransactionOriginUnionObject("origin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
