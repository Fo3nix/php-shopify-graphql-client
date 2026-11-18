<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A credit transaction which increases the store credit account balance.
 */
class ShopifyStoreCreditAccountCreditTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountCreditTransaction";

    /**
     * The store credit account that the transaction belongs to.
     */
    public function selectAccount(?ShopifyStoreCreditAccountCreditTransactionAccountArgumentsObject $argsObject = null): ShopifyStoreCreditAccountQueryObject
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
    public function selectAmount(?ShopifyStoreCreditAccountCreditTransactionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectBalanceAfterTransaction(?ShopifyStoreCreditAccountCreditTransactionBalanceAfterTransactionArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
     * The event that caused the store credit account transaction.
     */
    public function selectEvent(): static
    {
        $this->selectField("event");

        return $this;
    }

    /**
     * The time at which the transaction expires.
     * Debit transactions will always spend the soonest expiring credit first.
     */
    public function selectExpiresAt(): static
    {
        $this->selectField("expiresAt");

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
    public function selectOrigin(?ShopifyStoreCreditAccountCreditTransactionOriginArgumentsObject $argsObject = null): ShopifyStoreCreditAccountTransactionOriginUnionObject
    {
        $object = new ShopifyStoreCreditAccountTransactionOriginUnionObject("origin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The remaining amount of the credit.
     * The remaining amount will decrease when a debit spends this credit. It may also increase if that debit is subsequently reverted.
     * In the event that the credit expires, the remaining amount will represent the amount that remained as the expiry occurred.
     */
    public function selectRemainingAmount(?ShopifyStoreCreditAccountCreditTransactionRemainingAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("remainingAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
