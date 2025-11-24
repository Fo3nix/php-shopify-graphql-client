<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRefundReturnOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundReturnOutcome";

    public function selectAmount(ShopifyRefundReturnOutcomeAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedTransactions(ShopifyRefundReturnOutcomeSuggestedTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySuggestedOrderTransactionQueryObject("suggestedTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
