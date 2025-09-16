<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SuggestedOrderTransactionQueryObject extends QueryObject
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

    public function selectAmountSet(SuggestedOrderTransactionAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amountSet");
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

    public function selectMaximumRefundableSet(SuggestedOrderTransactionMaximumRefundableSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("maximumRefundableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentTransaction(SuggestedOrderTransactionParentTransactionArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionQueryObject("parentTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentDetails(SuggestedOrderTransactionPaymentDetailsArgumentsObject $argsObject = null)
    {
        $object = new PaymentDetailsUnionObject("paymentDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
