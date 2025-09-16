<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SuggestedReturnRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedReturnRefund";

    public function selectAmount(SuggestedReturnRefundAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedSubtotal(SuggestedReturnRefundDiscountedSubtotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMaximumRefundable(SuggestedReturnRefundMaximumRefundableArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("maximumRefundable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundDuties(SuggestedReturnRefundRefundDutiesArgumentsObject $argsObject = null)
    {
        $object = new RefundDutyQueryObject("refundDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShipping(SuggestedReturnRefundShippingArgumentsObject $argsObject = null)
    {
        $object = new ShippingRefundQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotal(SuggestedReturnRefundSubtotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedTransactions(SuggestedReturnRefundSuggestedTransactionsArgumentsObject $argsObject = null)
    {
        $object = new SuggestedOrderTransactionQueryObject("suggestedTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCartDiscountAmount(SuggestedReturnRefundTotalCartDiscountAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalCartDiscountAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDuties(SuggestedReturnRefundTotalDutiesArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(SuggestedReturnRefundTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
