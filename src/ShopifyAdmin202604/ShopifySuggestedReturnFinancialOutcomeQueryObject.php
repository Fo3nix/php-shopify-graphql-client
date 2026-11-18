<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a return financial outcome suggested by Shopify based on the items being reimbursed. You can then use the suggested outcome object to generate an actual refund or invoice for the return.
 */
class ShopifySuggestedReturnFinancialOutcomeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedReturnFinancialOutcome";

    /**
     * The sum of all the discounted prices of the line items being refunded.
     */
    public function selectDiscountedSubtotal(?ShopifySuggestedReturnFinancialOutcomeDiscountedSubtotalArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedSubtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The financial transfer details for the return outcome.
     */
    public function selectFinancialTransfer(?ShopifySuggestedReturnFinancialOutcomeFinancialTransferArgumentsObject $argsObject = null): ShopifyReturnOutcomeFinancialTransferUnionObject
    {
        $object = new ShopifyReturnOutcomeFinancialTransferUnionObject("financialTransfer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total monetary value available to refund in shop and presentment currencies.
     */
    public function selectMaximumRefundable(?ShopifySuggestedReturnFinancialOutcomeMaximumRefundableArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectRefundDuties(?ShopifySuggestedReturnFinancialOutcomeRefundDutiesArgumentsObject $argsObject = null): ShopifyRefundDutyQueryObject
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
    public function selectShipping(?ShopifySuggestedReturnFinancialOutcomeShippingArgumentsObject $argsObject = null): ShopifyShippingRefundQueryObject
    {
        $object = new ShopifyShippingRefundQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all the additional fees being refunded in shop and presentment currencies. The value must be positive.
     */
    public function selectTotalAdditionalFees(?ShopifySuggestedReturnFinancialOutcomeTotalAdditionalFeesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalAdditionalFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total cart discount amount that was applied to all line items in this refund.
     */
    public function selectTotalCartDiscountAmount(?ShopifySuggestedReturnFinancialOutcomeTotalCartDiscountAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalDuties(?ShopifySuggestedReturnFinancialOutcomeTotalDutiesArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
    public function selectTotalTax(?ShopifySuggestedReturnFinancialOutcomeTotalTaxArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
