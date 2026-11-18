<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An expiration transaction which decreases the store credit account balance.
 * Expiration transactions are created automatically when a [store credit account credit transaction](https://shopify.dev/api/admin-graphql/latest/objects/StoreCreditAccountCreditTransaction) expires.
 *
 * The amount subtracted from the balance is equal to the remaining amount of the credit transaction.
 */
class ShopifyStoreCreditAccountExpirationTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountExpirationTransaction";

    /**
     * The store credit account that the transaction belongs to.
     */
    public function selectAccount(?ShopifyStoreCreditAccountExpirationTransactionAccountArgumentsObject $argsObject = null): ShopifyStoreCreditAccountQueryObject
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
    public function selectAmount(?ShopifyStoreCreditAccountExpirationTransactionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectBalanceAfterTransaction(?ShopifyStoreCreditAccountExpirationTransactionBalanceAfterTransactionArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
     * The credit transaction which expired.
     */
    public function selectCreditTransaction(?ShopifyStoreCreditAccountExpirationTransactionCreditTransactionArgumentsObject $argsObject = null): ShopifyStoreCreditAccountCreditTransactionQueryObject
    {
        $object = new ShopifyStoreCreditAccountCreditTransactionQueryObject("creditTransaction");
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
     * The origin of the store credit account transaction.
     */
    public function selectOrigin(?ShopifyStoreCreditAccountExpirationTransactionOriginArgumentsObject $argsObject = null): ShopifyStoreCreditAccountTransactionOriginUnionObject
    {
        $object = new ShopifyStoreCreditAccountTransactionOriginUnionObject("origin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
