<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Interface for a store credit account transaction.
 */
class ShopifyStoreCreditAccountTransactionInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "StoreCreditAccountTransaction";

    /**
     * The store credit account that the transaction belongs to.
     */
    public function selectAccount(?ShopifyStoreCreditAccountTransactionAccountArgumentsObject $argsObject = null): ShopifyStoreCreditAccountQueryObject
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
    public function selectAmount(?ShopifyStoreCreditAccountTransactionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectBalanceAfterTransaction(?ShopifyStoreCreditAccountTransactionBalanceAfterTransactionArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
     * The origin of the store credit account transaction.
     */
    public function selectOrigin(?ShopifyStoreCreditAccountTransactionOriginArgumentsObject $argsObject = null): ShopifyStoreCreditAccountTransactionOriginUnionObject
    {
        $object = new ShopifyStoreCreditAccountTransactionOriginUnionObject("origin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onStoreCreditAccountCreditTransaction(): ShopifyStoreCreditAccountCreditTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountCreditTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccountDebitRevertTransaction(): ShopifyStoreCreditAccountDebitRevertTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitRevertTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccountDebitTransaction(): ShopifyStoreCreditAccountDebitTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onStoreCreditAccountExpirationTransaction(): ShopifyStoreCreditAccountExpirationTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountExpirationTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
