<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySuggestedReturnRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedReturnRefund";

    public function selectAmount(ShopifySuggestedReturnRefundAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedSubtotal(ShopifySuggestedReturnRefundDiscountedSubtotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMaximumRefundable(ShopifySuggestedReturnRefundMaximumRefundableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundDuties(ShopifySuggestedReturnRefundRefundDutiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundDutyQueryObject("refundDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShipping(ShopifySuggestedReturnRefundShippingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingRefundQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotal(ShopifySuggestedReturnRefundSubtotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuggestedTransactions(ShopifySuggestedReturnRefundSuggestedTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySuggestedOrderTransactionQueryObject("suggestedTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCartDiscountAmount(ShopifySuggestedReturnRefundTotalCartDiscountAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalCartDiscountAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDuties(ShopifySuggestedReturnRefundTotalDutiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(ShopifySuggestedReturnRefundTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
