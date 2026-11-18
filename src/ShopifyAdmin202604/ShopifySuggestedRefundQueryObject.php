<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A refund amount that Shopify suggests based on the items, duties, and shipping costs that customers return. Provides a breakdown of all monetary values including subtotals, taxes, discounts, and the maximum refundable amount.
 *
 * The suggested refund includes [`RefundLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundLineItem) objects to refund with their quantities and restock instructions, [`RefundDuty`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundDuty) objects for duty reimbursements, and [`ShippingRefund`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingRefund) for shipping cost refunds. Provides [`SuggestedOrderTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SuggestedOrderTransaction) objects and the [`SuggestedRefundMethod`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/SuggestedRefundMethod) interface to process the refund through the appropriate gateways.
 *
 * Learn more about [previewing and refunding duties](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/view-and-refund-duties#step-3-preview-a-refund-that-includes-duties).
 */
class ShopifySuggestedRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedRefund";

    /**
     * The total monetary value to be refunded.
     *
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount(): static
    {
        $this->selectField("amount");

        return $this;
    }

    /**
     * The total monetary value to be refunded in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifySuggestedRefundAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all the discounted prices of the line items being refunded.
     */
    public function selectDiscountedSubtotalSet(?ShopifySuggestedRefundDiscountedSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedSubtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total monetary value available to refund.
     *
     * @deprecated Use `maximumRefundableSet` instead.
     */
    public function selectMaximumRefundable(): static
    {
        $this->selectField("maximumRefundable");

        return $this;
    }

    /**
     * The total monetary value available to refund in shop and presentment currencies.
     */
    public function selectMaximumRefundableSet(?ShopifySuggestedRefundMaximumRefundableSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of duties to be refunded from the order.
     */
    public function selectRefundDuties(?ShopifySuggestedRefundRefundDutiesArgumentsObject $argsObject = null): ShopifyRefundDutyQueryObject
    {
        $object = new ShopifyRefundDutyQueryObject("refundDuties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of line items to be refunded, along with restock instructions.
     */
    public function selectRefundLineItems(?ShopifySuggestedRefundRefundLineItemsArgumentsObject $argsObject = null): ShopifyRefundLineItemQueryObject
    {
        $object = new ShopifyRefundLineItemQueryObject("refundLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping costs to be refunded from the order.
     */
    public function selectShipping(?ShopifySuggestedRefundShippingArgumentsObject $argsObject = null): ShopifyShippingRefundQueryObject
    {
        $object = new ShopifyShippingRefundQueryObject("shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all the prices of the line items being refunded.
     *
     * @deprecated Use `subtotalSet` instead.
     */
    public function selectSubtotal(): static
    {
        $this->selectField("subtotal");

        return $this;
    }

    /**
     * The sum of all the prices of the line items being refunded in shop and presentment currencies.
     */
    public function selectSubtotalSet(?ShopifySuggestedRefundSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of suggested refund methods.
     */
    public function selectSuggestedRefundMethods(?ShopifySuggestedRefundSuggestedRefundMethodsArgumentsObject $argsObject = null): ShopifySuggestedRefundMethodInterfaceObject
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
    public function selectSuggestedTransactions(?ShopifySuggestedRefundSuggestedTransactionsArgumentsObject $argsObject = null): ShopifySuggestedOrderTransactionQueryObject
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
    public function selectTotalCartDiscountAmountSet(?ShopifySuggestedRefundTotalCartDiscountAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalCartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all the duties being refunded from the order in shop and presentment currencies. The value must be positive.
     */
    public function selectTotalDutiesSet(?ShopifySuggestedRefundTotalDutiesSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of the taxes being refunded from the order in shop and presentment currencies. The value must be positive.
     */
    public function selectTotalTaxSet(?ShopifySuggestedRefundTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of the taxes being refunded from the order. The value must be positive.
     *
     * @deprecated Use `totalTaxSet` instead.
     */
    public function selectTotalTaxes(): static
    {
        $this->selectField("totalTaxes");

        return $this;
    }
}
