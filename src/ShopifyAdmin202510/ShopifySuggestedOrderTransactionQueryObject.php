<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySuggestedOrderTransactionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedOrderTransaction";

    public function selectAccountNumber()
    {
        $this->selectField("accountNumber");

        return $this;
    }

    /**
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount()
    {
        $this->selectField("amount");

        return $this;
    }

    public function selectAmountSet(ShopifySuggestedOrderTransactionAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFormattedGateway()
    {
        $this->selectField("formattedGateway");

        return $this;
    }

    public function selectGateway()
    {
        $this->selectField("gateway");

        return $this;
    }

    public function selectKind()
    {
        $this->selectField("kind");

        return $this;
    }

    /**
     * @deprecated Use `maximumRefundableSet` instead.
     */
    public function selectMaximumRefundable()
    {
        $this->selectField("maximumRefundable");

        return $this;
    }

    public function selectMaximumRefundableSet(ShopifySuggestedOrderTransactionMaximumRefundableSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentTransaction(ShopifySuggestedOrderTransactionParentTransactionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionQueryObject("parentTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentDetails(ShopifySuggestedOrderTransactionPaymentDetailsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentDetailsUnionObject("paymentDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
