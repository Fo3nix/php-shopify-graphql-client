<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a return refund suggested by Shopify based on the items being reimbursed. You can then use the suggested refund object to generate an actual refund for the return.
 */
class ShopifySuggestedReturnRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedReturnRefund";

    /**
     * The total monetary value to be refunded in shop and presentment currencies.
     */
    public function selectAmount(?ShopifySuggestedReturnRefundAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all the discounted prices of the line items being refunded.
     */
    public function selectDiscountedSubtotal(?ShopifySuggestedReturnRefundDiscountedSubtotalArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total monetary value available to refund in shop and presentment currencies.
     */
    public function selectMaximumRefundable(?ShopifySuggestedReturnRefundMaximumRefundableArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of duties to be refunded from the order.
     */
    public function selectRefundDuties(?ShopifySuggestedReturnRefundRefundDutiesArgumentsObject $argsObject = null): ShopifyRefundDutyQueryObject
    {
        $object = new ShopifyRefundDutyQueryObject("refundDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping costs to be refunded from the order.
     */
    public function selectShipping(?ShopifySuggestedReturnRefundShippingArgumentsObject $argsObject = null): ShopifyShippingRefundQueryObject
    {
        $object = new ShopifyShippingRefundQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all the prices of the line items being refunded in shop and presentment currencies.
     */
    public function selectSubtotal(?ShopifySuggestedReturnRefundSubtotalArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of suggested order transactions.
     */
    public function selectSuggestedTransactions(?ShopifySuggestedReturnRefundSuggestedTransactionsArgumentsObject $argsObject = null): ShopifySuggestedOrderTransactionQueryObject
    {
        $object = new ShopifySuggestedOrderTransactionQueryObject("suggestedTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total cart discount amount that was applied to all line items in this refund.
     */
    public function selectTotalCartDiscountAmount(?ShopifySuggestedReturnRefundTotalCartDiscountAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalCartDiscountAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all the duties being refunded from the order in shop and presentment currencies. The value must be positive.
     */
    public function selectTotalDuties(?ShopifySuggestedReturnRefundTotalDutiesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of the taxes being refunded in shop and presentment currencies. The value must be positive.
     */
    public function selectTotalTax(?ShopifySuggestedReturnRefundTotalTaxArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
