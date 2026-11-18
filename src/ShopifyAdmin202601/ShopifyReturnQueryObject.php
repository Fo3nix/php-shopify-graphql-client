<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `Return` object represents the intent of a buyer to ship one or more items from an order back to a merchant
 * or a third-party fulfillment location. A return is associated with an [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order)
 * and can include multiple return [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem).
 * Each return has a [status](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps#return-statuses),
 * which indicates the state of the return.
 *
 * Use the `Return` object to capture the financial, logistical,
 * and business intent of a return. For example, you can identify eligible items for a return and issue customers
 * a refund for returned items on behalf of the merchant.
 *
 * Learn more about providing a
 * [return management workflow](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management)
 * for merchants. You can also manage [exchanges](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-exchanges),
 * [reverse fulfillment orders](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-reverse-fulfillment-orders),
 * and [reverse deliveries](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-reverse-deliveries)
 * on behalf of merchants.
 */
class ShopifyReturnQueryObject extends QueryObject
{
    const OBJECT_NAME = "Return";

    /**
     * The date and time when the return was closed.
     */
    public function selectClosedAt(): static
    {
        $this->selectField("closedAt");

        return $this;
    }

    /**
     * The date and time when the return was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Additional information about the declined return.
     */
    public function selectDecline(?ShopifyReturnDeclineArgumentsObject $argsObject = null): ShopifyReturnDeclineQueryObject
    {
        $object = new ShopifyReturnDeclineQueryObject("decline");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The exchange line items attached to the return.
     */
    public function selectExchangeLineItems(?ShopifyReturnExchangeLineItemsArgumentsObject $argsObject = null): ShopifyExchangeLineItemConnectionQueryObject
    {
        $object = new ShopifyExchangeLineItemConnectionQueryObject("exchangeLineItems");
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
     * The name of the return.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The order that the return belongs to.
     */
    public function selectOrder(?ShopifyReturnOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of refunds associated with the return.
     */
    public function selectRefunds(?ShopifyReturnRefundsArgumentsObject $argsObject = null): ShopifyRefundConnectionQueryObject
    {
        $object = new ShopifyRefundConnectionQueryObject("refunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the return was approved.
     */
    public function selectRequestApprovedAt(): static
    {
        $this->selectField("requestApprovedAt");

        return $this;
    }

    /**
     * The return line items attached to the return.
     */
    public function selectReturnLineItems(?ShopifyReturnReturnLineItemsArgumentsObject $argsObject = null): ShopifyReturnLineItemTypeConnectionQueryObject
    {
        $object = new ShopifyReturnLineItemTypeConnectionQueryObject("returnLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The return shipping fees for the return.
     */
    public function selectReturnShippingFees(?ShopifyReturnReturnShippingFeesArgumentsObject $argsObject = null): ShopifyReturnShippingFeeQueryObject
    {
        $object = new ShopifyReturnShippingFeeQueryObject("returnShippingFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of reverse fulfillment orders for the return.
     */
    public function selectReverseFulfillmentOrders(?ShopifyReturnReverseFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderConnectionQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderConnectionQueryObject("reverseFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member that created the return.
     */
    public function selectStaffMember(?ShopifyReturnStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the return.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * A suggested financial outcome for the return.
     */
    public function selectSuggestedFinancialOutcome(ShopifyReturnSuggestedFinancialOutcomeArgumentsObject $argsObject): ShopifySuggestedReturnFinancialOutcomeQueryObject
    {
        $object = new ShopifySuggestedReturnFinancialOutcomeQueryObject("suggestedFinancialOutcome");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A suggested refund for the return.
     *
     * @deprecated Use `suggestedFinancialOutcome` instead.
     */
    public function selectSuggestedRefund(ShopifyReturnSuggestedRefundArgumentsObject $argsObject): ShopifySuggestedReturnRefundQueryObject
    {
        $object = new ShopifySuggestedReturnRefundQueryObject("suggestedRefund");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all return line item quantities for the return.
     */
    public function selectTotalQuantity(): static
    {
        $this->selectField("totalQuantity");

        return $this;
    }

    /**
     * The order transactions created from the return.
     */
    public function selectTransactions(?ShopifyReturnTransactionsArgumentsObject $argsObject = null): ShopifyOrderTransactionConnectionQueryObject
    {
        $object = new ShopifyOrderTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
