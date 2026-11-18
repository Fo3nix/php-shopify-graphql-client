<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `Refund` object represents a financial record of money returned to a customer from an order.
 * It provides a comprehensive view of all refunded amounts, transactions, and restocking instructions
 * associated with returning products or correcting order issues.
 *
 * The `Refund` object provides information to:
 *
 * - Process customer returns and issue payments back to customers
 * - Handle partial or full refunds for line items with optional inventory restocking
 * - Refund shipping costs, duties, and additional fees
 * - Issue store credit refunds as an alternative to original payment method returns
 * - Track and reconcile all financial transactions related to refunds
 *
 * Each `Refund` object maintains detailed records of what was refunded, how much was refunded,
 * which payment transactions were involved, and any inventory restocking that occurred. The refund
 * can include multiple components such as product line items, shipping charges, taxes, duties, and
 * additional fees, all calculated with proper currency handling for international orders.
 *
 * Refunds are always associated with an [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order)
 * and can optionally be linked to a [return](https://shopify.dev/docs/api/admin-graphql/latest/objects/Return)
 * if the refund was initiated through the returns process. The refund tracks both the presentment currency
 * (what the customer sees) and the shop currency for accurate financial reporting.
 *
 * > Note:
 * > The existence of a `Refund` object doesn't guarantee that the money has been returned to the customer.
 * > The actual financial processing happens through associated
 * > [`OrderTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderTransaction)
 * > objects, which can be in various states, such as pending, processing, success, or failure.
 * > To determine if money has actually been refunded, check the
 * > [status](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderTransaction#field-OrderTransaction.fields.status)
 * > of the associated transactions.
 *
 * Learn more about
 * [managing returns](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management),
 * [refunding duties](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/view-and-refund-duties), and
 * [processing refunds](https://shopify.dev/docs/api/admin-graphql/latest/mutations/refundCreate).
 */
class ShopifyRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "Refund";

    /**
     * The date and time when the refund was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A list of the refunded duties as part of this refund.
     */
    public function selectDuties(?ShopifyRefundDutiesArgumentsObject $argsObject = null): ShopifyRefundDutyQueryObject
    {
        $object = new ShopifyRefundDutyQueryObject("duties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The optional note associated with the refund.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The order associated with the refund.
     */
    public function selectOrder(?ShopifyRefundOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order adjustments that are attached with the refund.
     */
    public function selectOrderAdjustments(?ShopifyRefundOrderAdjustmentsArgumentsObject $argsObject = null): ShopifyOrderAdjustmentConnectionQueryObject
    {
        $object = new ShopifyOrderAdjustmentConnectionQueryObject("orderAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the refund was processed.
     */
    public function selectProcessedAt(): static
    {
        $this->selectField("processedAt");

        return $this;
    }

    /**
     * The `RefundLineItem` resources attached to the refund.
     */
    public function selectRefundLineItems(?ShopifyRefundRefundLineItemsArgumentsObject $argsObject = null): ShopifyRefundLineItemConnectionQueryObject
    {
        $object = new ShopifyRefundLineItemConnectionQueryObject("refundLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The `RefundShippingLine` resources attached to the refund.
     */
    public function selectRefundShippingLines(?ShopifyRefundRefundShippingLinesArgumentsObject $argsObject = null): ShopifyRefundShippingLineConnectionQueryObject
    {
        $object = new ShopifyRefundShippingLineConnectionQueryObject("refundShippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The return associated with the refund.
     */
    public function selectReturn(?ShopifyRefundReturnArgumentsObject $argsObject = null): ShopifyReturnQueryObject
    {
        $object = new ShopifyReturnQueryObject("return");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member who created the refund.
     */
    public function selectStaffMember(?ShopifyRefundStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount across all transactions for the refund.
     *
     * @deprecated Use `totalRefundedSet` instead.
     */
    public function selectTotalRefunded(?ShopifyRefundTotalRefundedArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalRefunded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount across all transactions for the refund, in shop and presentment currencies.
     */
    public function selectTotalRefundedSet(?ShopifyRefundTotalRefundedSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalRefundedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The transactions associated with the refund.
     */
    public function selectTransactions(?ShopifyRefundTransactionsArgumentsObject $argsObject = null): ShopifyOrderTransactionConnectionQueryObject
    {
        $object = new ShopifyOrderTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the refund was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
