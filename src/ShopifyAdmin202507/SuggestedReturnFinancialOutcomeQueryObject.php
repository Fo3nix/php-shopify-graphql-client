<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SuggestedReturnFinancialOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedReturnFinancialOutcome";

    public function selectDiscountedSubtotal(SuggestedReturnFinancialOutcomeDiscountedSubtotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinancialTransfer(SuggestedReturnFinancialOutcomeFinancialTransferArgumentsObject $argsObject = null)
    {
        $object = new ReturnOutcomeFinancialTransferUnionObject("financialTransfer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMaximumRefundable(SuggestedReturnFinancialOutcomeMaximumRefundableArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("maximumRefundable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundDuties(SuggestedReturnFinancialOutcomeRefundDutiesArgumentsObject $argsObject = null)
    {
        $object = new RefundDutyQueryObject("refundDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShipping(SuggestedReturnFinancialOutcomeShippingArgumentsObject $argsObject = null)
    {
        $object = new ShippingRefundQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalAdditionalFees(SuggestedReturnFinancialOutcomeTotalAdditionalFeesArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalAdditionalFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCartDiscountAmount(SuggestedReturnFinancialOutcomeTotalCartDiscountAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalCartDiscountAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDuties(SuggestedReturnFinancialOutcomeTotalDutiesArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(SuggestedReturnFinancialOutcomeTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
