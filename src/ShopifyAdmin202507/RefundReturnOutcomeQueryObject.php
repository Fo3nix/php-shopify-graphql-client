<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class RefundReturnOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundReturnOutcome";

    public function selectAmount(RefundReturnOutcomeAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedTransactions(RefundReturnOutcomeSuggestedTransactionsArgumentsObject $argsObject = null)
    {
        $object = new SuggestedOrderTransactionQueryObject("suggestedTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
