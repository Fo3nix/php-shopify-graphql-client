<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An order during an active edit session with all proposed changes applied but not yet committed. When you begin editing an order with the [`orderEditBegin`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditBegin) mutation, the system creates a [`CalculatedOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CalculatedOrder) that shows how the [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) will look after your changes. The calculated order tracks the original order state and all staged modifications (added or removed [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects, quantity adjustments, discount changes, and [`ShippingLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingLine) updates). Use the calculated order to preview the financial impact of edits before committing them with the [`orderEditCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditCommit) mutation.
 *
 * Learn more about [editing existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
 */
class ShopifyCalculatedOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedOrder";

    /**
     * Returns only the new discount applications being added to the order in the current edit.
     */
    public function selectAddedDiscountApplications(?ShopifyCalculatedOrderAddedDiscountApplicationsArgumentsObject $argsObject = null): ShopifyCalculatedDiscountApplicationConnectionQueryObject
    {
        $object = new ShopifyCalculatedDiscountApplicationConnectionQueryObject("addedDiscountApplications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns only the new line items being added to the order during the current edit.
     */
    public function selectAddedLineItems(?ShopifyCalculatedOrderAddedLineItemsArgumentsObject $argsObject = null): ShopifyCalculatedLineItemConnectionQueryObject
    {
        $object = new ShopifyCalculatedLineItemConnectionQueryObject("addedLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Amount of the order-level discount (doesn't contain any line item discounts) in shop and presentment currencies.
     */
    public function selectCartDiscountAmountSet(?ShopifyCalculatedOrderCartDiscountAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("cartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the changes have been applied and saved to the order.
     *
     * @deprecated CalculatedOrder for committed order edits is being deprecated, and this field will also be removed in a future version.  See [changelog](https://shopify.dev/changelog/deprecation-notice-calculatedorder-for-committed-order-edits) for more details.
     */
    public function selectCommitted(): static
    {
        $this->selectField("committed");

        return $this;
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
     * Returns all items on the order that existed before starting the edit.
     * Will include any changes that have been made.
     * Will not include line items added during the current edit.
     */
    public function selectLineItems(?ShopifyCalculatedOrderLineItemsArgumentsObject $argsObject = null): ShopifyCalculatedLineItemConnectionQueryObject
    {
        $object = new ShopifyCalculatedLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The HTML of the customer notification for the order edit.
     */
    public function selectNotificationPreviewHtml(): static
    {
        $this->selectField("notificationPreviewHtml");

        return $this;
    }

    /**
     * The customer notification title.
     */
    public function selectNotificationPreviewTitle(): static
    {
        $this->selectField("notificationPreviewTitle");

        return $this;
    }

    /**
     * The order without any changes applied.
     */
    public function selectOriginalOrder(?ShopifyCalculatedOrderOriginalOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("originalOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the shipping lines on the order that existed before starting the edit.
     * Will include any changes that have been made as well as shipping lines added during the current edit.
     * Returns only the first 250 shipping lines.
     */
    public function selectShippingLines(?ShopifyCalculatedOrderShippingLinesArgumentsObject $argsObject = null): ShopifyCalculatedShippingLineQueryObject
    {
        $object = new ShopifyCalculatedShippingLineQueryObject("shippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of changes made to the order during the current edit.
     */
    public function selectStagedChanges(?ShopifyCalculatedOrderStagedChangesArgumentsObject $argsObject = null): ShopifyOrderStagedChangeConnectionQueryObject
    {
        $object = new ShopifyOrderStagedChangeConnectionQueryObject("stagedChanges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of the quantities for the line items that contribute to the order's subtotal.
     */
    public function selectSubtotalLineItemsQuantity(): static
    {
        $this->selectField("subtotalLineItemsQuantity");

        return $this;
    }

    /**
     * The subtotal of the line items, in shop and presentment currencies, after all the discounts are applied.  The subtotal doesn't include shipping.  The subtotal includes taxes for taxes-included orders and excludes taxes for taxes-excluded orders.
     */
    public function selectSubtotalPriceSet(?ShopifyCalculatedOrderSubtotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Taxes charged for the line item.
     */
    public function selectTaxLines(?ShopifyCalculatedOrderTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total price of the order less the total amount received from the customer in shop and presentment currencies.
     */
    public function selectTotalOutstandingSet(?ShopifyCalculatedOrderTotalOutstandingSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalOutstandingSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total amount of the order (includes taxes and discounts) in shop and presentment currencies.
     */
    public function selectTotalPriceSet(?ShopifyCalculatedOrderTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
