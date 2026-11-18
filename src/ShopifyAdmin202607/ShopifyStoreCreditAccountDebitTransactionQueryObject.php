<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A debit transaction which decreases the store credit account balance.
 */
class ShopifyStoreCreditAccountDebitTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountDebitTransaction";

    /**
     * The store credit account that the transaction belongs to.
     */
    public function selectAccount(?ShopifyStoreCreditAccountDebitTransactionAccountArgumentsObject $argsObject = null): ShopifyStoreCreditAccountQueryObject
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
    public function selectAmount(?ShopifyStoreCreditAccountDebitTransactionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectBalanceAfterTransaction(?ShopifyStoreCreditAccountDebitTransactionBalanceAfterTransactionArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectOrigin(?ShopifyStoreCreditAccountDebitTransactionOriginArgumentsObject $argsObject = null): ShopifyStoreCreditAccountTransactionOriginUnionObject
    {
        $object = new ShopifyStoreCreditAccountTransactionOriginUnionObject("origin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
