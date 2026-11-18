<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A store credit account contains a monetary balance that can be redeemed at checkout for purchases in the shop.
 * The account is held in the specified currency and has an owner that cannot be transferred.
 *
 * The account balance is redeemable at checkout only when the owner is authenticated via [new customer accounts authentication](https://shopify.dev/docs/api/customer).
 */
class ShopifyStoreCreditAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccount";

    /**
     * The current balance of the store credit account.
     */
    public function selectBalance(?ShopifyStoreCreditAccountBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("balance");
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
     * The owner of the store credit account.
     */
    public function selectOwner(?ShopifyStoreCreditAccountOwnerArgumentsObject $argsObject = null): ShopifyHasStoreCreditAccountsInterfaceObject
    {
        $object = new ShopifyHasStoreCreditAccountsInterfaceObject("owner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The transaction history of the store credit account.
     */
    public function selectTransactions(?ShopifyStoreCreditAccountTransactionsArgumentsObject $argsObject = null): ShopifyStoreCreditAccountTransactionConnectionQueryObject
    {
        $object = new ShopifyStoreCreditAccountTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
