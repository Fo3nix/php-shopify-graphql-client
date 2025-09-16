<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StoreCreditAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccount";

    public function selectBalance(StoreCreditAccountBalanceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("balance");
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

    public function selectTransactions(StoreCreditAccountTransactionsArgumentsObject $argsObject = null)
    {
        $object = new StoreCreditAccountTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
