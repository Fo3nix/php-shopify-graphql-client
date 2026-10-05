<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySuggestedReturnFinancialOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedReturnFinancialOutcome";

    public function selectDiscountedSubtotal(ShopifySuggestedReturnFinancialOutcomeDiscountedSubtotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinancialTransfer(ShopifySuggestedReturnFinancialOutcomeFinancialTransferArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnOutcomeFinancialTransferUnionObject("financialTransfer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMaximumRefundable(ShopifySuggestedReturnFinancialOutcomeMaximumRefundableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundDuties(ShopifySuggestedReturnFinancialOutcomeRefundDutiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundDutyQueryObject("refundDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShipping(ShopifySuggestedReturnFinancialOutcomeShippingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingRefundQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalAdditionalFees(ShopifySuggestedReturnFinancialOutcomeTotalAdditionalFeesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalAdditionalFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCartDiscountAmount(ShopifySuggestedReturnFinancialOutcomeTotalCartDiscountAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalCartDiscountAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDuties(ShopifySuggestedReturnFinancialOutcomeTotalDutiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(ShopifySuggestedReturnFinancialOutcomeTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
