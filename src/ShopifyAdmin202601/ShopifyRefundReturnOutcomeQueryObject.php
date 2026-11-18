<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The financial transfer details for a return outcome that results in a refund.
 */
class ShopifyRefundReturnOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundReturnOutcome";

    /**
     * The total monetary value to be refunded in shop and presentment currencies.
     */
    public function selectAmount(?ShopifyRefundReturnOutcomeAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of suggested refund methods.
     */
    public function selectSuggestedRefundMethods(?ShopifyRefundReturnOutcomeSuggestedRefundMethodsArgumentsObject $argsObject = null): ShopifySuggestedRefundMethodInterfaceObject
    {
        $object = new ShopifySuggestedRefundMethodInterfaceObject("suggestedRefundMethods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of suggested order transactions.
     */
    public function selectSuggestedTransactions(?ShopifyRefundReturnOutcomeSuggestedTransactionsArgumentsObject $argsObject = null): ShopifySuggestedOrderTransactionQueryObject
    {
        $object = new ShopifySuggestedOrderTransactionQueryObject("suggestedTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
