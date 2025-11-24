<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStoreCreditAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccount";

    public function selectBalance(ShopifyStoreCreditAccountBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("balance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectTransactions(ShopifyStoreCreditAccountTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStoreCreditAccountTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
