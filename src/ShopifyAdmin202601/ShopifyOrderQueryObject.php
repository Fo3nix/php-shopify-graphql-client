<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `Order` object represents a customer's request to purchase one or more products from a store. Use the `Order` object to handle the complete purchase lifecycle from checkout to fulfillment.
 *
 * Use the `Order` object when you need to:
 *
 * - Display order details on customer account pages or admin dashboards.
 * - Create orders for phone sales, wholesale customers, or subscription services.
 * - Update order information like shipping addresses, notes, or fulfillment status.
 * - Process returns, exchanges, and partial refunds.
 * - Generate invoices, receipts, and shipping labels.
 *
 * The `Order` object serves as the central hub connecting customer information, product details, payment processing, and fulfillment data within the GraphQL Admin API schema.
 *
 * > Note:
 * > Only the last 60 days' worth of orders from a store are accessible from the `Order` object by default. If you want to access older records,
 * > then you need to [request access to all orders](https://shopify.dev/docs/api/usage/access-scopes#orders-permissions). If your app is granted
 * > access, then you can add the `read_all_orders`, `read_orders`, and `write_orders` scopes.
 *
 * > Caution:
 * > Only use orders data if it's required for your app's functionality. Shopify will restrict [access to scopes](https://shopify.dev/docs/api/usage/access-scopes#requesting-specific-permissions) for apps that don't have a legitimate use for the associated data.
 *
 * Learn more about [building apps for orders and fulfillment](https://shopify.dev/docs/apps/build/orders-fulfillment).
 */
class ShopifyOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "Order";

    /**
     * A list of additional fees applied to an order, such as duties, import fees, or [tax lines](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.additionalFees.taxLines).
     */
    public function selectAdditionalFees(?ShopifyOrderAdditionalFeesArgumentsObject $argsObject = null): ShopifyAdditionalFeeQueryObject
    {
        $object = new ShopifyAdditionalFeeQueryObject("additionalFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of sales agreements associated with the order, such as contracts defining payment terms, or delivery schedules between merchants and customers.
     */
    public function selectAgreements(?ShopifyOrderAgreementsArgumentsObject $argsObject = null): ShopifySalesAgreementConnectionQueryObject
    {
        $object = new ShopifySalesAgreementConnectionQueryObject("agreements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of messages that appear on the **Orders** page in the Shopify admin. These alerts provide merchants with important information about an order's status or required actions.
     */
    public function selectAlerts(?ShopifyOrderAlertsArgumentsObject $argsObject = null): ShopifyResourceAlertQueryObject
    {
        $object = new ShopifyResourceAlertQueryObject("alerts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The application that created the order. For example, "Online Store", "Point of Sale", or a custom app name.
     * Use this to identify the order source for attribution and fulfillment workflows.
     * Learn more about [building apps for orders and fulfillment](https://shopify.dev/docs/apps/build/orders-fulfillment).
     */
    public function selectApp(?ShopifyOrderAppArgumentsObject $argsObject = null): ShopifyOrderAppQueryObject
    {
        $object = new ShopifyOrderAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The billing address associated with the payment method selected by the customer for an order.
     * Returns `null` if no billing address was provided during checkout.
     */
    public function selectBillingAddress(?ShopifyOrderBillingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the billing address matches the [shipping address](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.shippingAddress). Returns `true` if both addresses are the same, and `false` if they're different or if an address is missing.
     */
    public function selectBillingAddressMatchesShippingAddress(): static
    {
        $this->selectField("billingAddressMatchesShippingAddress");

        return $this;
    }

    /**
     * Whether an order can be manually marked as paid. Returns `false` if the order is already paid, is canceled, has pending [Shopify Payments](https://help.shopify.com/en/manual/payments/shopify-payments/payouts) transactions, or has a negative payment amount.
     */
    public function selectCanMarkAsPaid(): static
    {
        $this->selectField("canMarkAsPaid");

        return $this;
    }

    /**
     * Whether order notifications can be sent to the customer.
     * Returns `true` if the customer has a valid [email address](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.email).
     */
    public function selectCanNotifyCustomer(): static
    {
        $this->selectField("canNotifyCustomer");

        return $this;
    }

    /**
     * The reason provided for an order cancellation. For example, a merchant might cancel an order if there's insufficient inventory. Returns `null` if the order hasn't been canceled.
     */
    public function selectCancelReason(): static
    {
        $this->selectField("cancelReason");

        return $this;
    }

    /**
     * Details of an order's cancellation, if it has been canceled. This includes the reason, date, and any [staff notes](https://shopify.dev/api/admin-graphql/latest/objects/OrderCancellation#field-OrderCancellation.fields.staffNote).
     */
    public function selectCancellation(?ShopifyOrderCancellationArgumentsObject $argsObject = null): ShopifyOrderCancellationQueryObject
    {
        $object = new ShopifyOrderCancellationQueryObject("cancellation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when an order was canceled.
     * Returns `null` if the order hasn't been canceled.
     */
    public function selectCancelledAt(): static
    {
        $this->selectField("cancelledAt");

        return $this;
    }

    /**
     * Whether an authorized payment for an order can be captured.
     * Returns `true` if an authorized payment exists that hasn't been fully captured yet. Learn more about [capturing payments](https://help.shopify.com/en/manual/fulfillment/managing-orders/payments/capturing-payments).
     */
    public function selectCapturable(): static
    {
        $this->selectField("capturable");

        return $this;
    }

    /**
     * The total discount amount that applies to the entire order in shop currency, before returns, refunds, order edits, and cancellations.
     *
     * @deprecated Use `cartDiscountAmountSet` instead.
     */
    public function selectCartDiscountAmount(): static
    {
        $this->selectField("cartDiscountAmount");

        return $this;
    }

    /**
     * The total discount amount applied at the time the order was created, displayed in both shop and presentment currencies, before returns, refunds, order edits, and cancellations. This field only includes discounts applied to the entire order.
     */
    public function selectCartDiscountAmountSet(?ShopifyOrderCartDiscountAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("cartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sales channel from which an order originated, such as the [Online Store](https://shopify.dev/docs/apps/build/app-surfaces#online-store) or [Shopify POS](https://shopify.dev/docs/apps/build/app-surfaces#point-of-sale).
     *
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(?ShopifyOrderChannelArgumentsObject $argsObject = null): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Details about the sales channel that created the order, such as the [channel app type](https://shopify.dev/docs/api/admin-graphql/latest/objects/channel#field-Channel.fields.channelType)
     * and [channel name](https://shopify.dev/docs/api/admin-graphql/latest/objects/ChannelDefinition#field-ChannelDefinition.fields.channelName), which helps to track order sources.
     *
     * @deprecated Use `attribution` instead.
     */
    public function selectChannelInformation(?ShopifyOrderChannelInformationArgumentsObject $argsObject = null): ShopifyChannelInformationQueryObject
    {
        $object = new ShopifyChannelInformationQueryObject("channelInformation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The IP address of the customer who placed the order. Useful for fraud detection and geographic analysis.
     */
    public function selectClientIp(): static
    {
        $this->selectField("clientIp");

        return $this;
    }

    /**
     * Whether an order is closed. An order is considered closed if all its line items have been fulfilled or canceled, and all financial transactions are complete.
     */
    public function selectClosed(): static
    {
        $this->selectField("closed");

        return $this;
    }

    /**
     * The date and time [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when an order was closed. Shopify automatically records this timestamp when all items have been fulfilled or canceled, and all financial transactions are complete. Returns `null` if the order isn't closed.
     */
    public function selectClosedAt(): static
    {
        $this->selectField("closedAt");

        return $this;
    }

    /**
     * A customer-facing order identifier, often shown instead of the sequential order name.
     * It uses a random alphanumeric format (for example, `XPAV284CT`) and isn't guaranteed to be unique across orders.
     */
    public function selectConfirmationNumber(): static
    {
        $this->selectField("confirmationNumber");

        return $this;
    }

    /**
     * Whether inventory has been reserved for an order. Returns `true` if inventory quantities for an order's [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) have been reserved.
     * Learn more about [managing inventory quantities and states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states).
     */
    public function selectConfirmed(): static
    {
        $this->selectField("confirmed");

        return $this;
    }

    /**
     * The date and time in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when an order was created. This timestamp is set when the customer completes checkout and remains unchanged throughout an order's lifecycle.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The shop currency when the order was placed. For example, "USD" or "CAD".
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * The current total of all discounts applied to the entire order, after returns, refunds, order edits, and cancellations. This includes discount codes, automatic discounts, and other promotions that affect the whole order rather than individual line items. To get the original discount amount at the time of order creation, use the [`cartDiscountAmountSet`](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.cartDiscountAmountSet) field.
     */
    public function selectCurrentCartDiscountAmountSet(?ShopifyOrderCurrentCartDiscountAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentCartDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current shipping price after applying refunds and discounts.
     * If the parent `order.taxesIncluded` field is true, then this price includes taxes. Otherwise, this field is the pre-tax price.
     */
    public function selectCurrentShippingPriceSet(?ShopifyOrderCurrentShippingPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentShippingPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current sum of the quantities for all line items that contribute to the order's subtotal price, after returns, refunds, order edits, and cancellations.
     */
    public function selectCurrentSubtotalLineItemsQuantity(): static
    {
        $this->selectField("currentSubtotalLineItemsQuantity");

        return $this;
    }

    /**
     * The total price of the order, after returns and refunds, in shop and presentment currencies.
     * This includes taxes and discounts.
     */
    public function selectCurrentSubtotalPriceSet(?ShopifyOrderCurrentSubtotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentSubtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of all tax lines applied to line items on the order, after returns.
     * Tax line prices represent the total price for all tax lines with the same `rate` and `title`.
     */
    public function selectCurrentTaxLines(?ShopifyOrderCurrentTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("currentTaxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current total of all additional fees for an order, after any returns or modifications. Modifications include returns, refunds, order edits, and cancellations. Additional fees can include charges such as duties, import fees, and special handling.
     */
    public function selectCurrentTotalAdditionalFeesSet(?ShopifyOrderCurrentTotalAdditionalFeesSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalAdditionalFeesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount discounted on the order after returns and refunds, in shop and presentment currencies.
     * This includes both order and line level discounts.
     */
    public function selectCurrentTotalDiscountsSet(?ShopifyOrderCurrentTotalDiscountsSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current total duties amount for an order, after any returns or modifications. Modifications include returns, refunds, order edits, and cancellations.
     */
    public function selectCurrentTotalDutiesSet(?ShopifyOrderCurrentTotalDutiesSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price of the order, after returns, in shop and presentment currencies.
     * This includes taxes and discounts.
     */
    public function selectCurrentTotalPriceSet(?ShopifyOrderCurrentTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of the prices of all tax lines applied to line items on the order, after returns and refunds, in shop and presentment currencies.
     */
    public function selectCurrentTotalTaxSet(?ShopifyOrderCurrentTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentTotalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total weight of the order after returns and refunds, in grams.
     */
    public function selectCurrentTotalWeight(): static
    {
        $this->selectField("currentTotalWeight");

        return $this;
    }

    /**
     * A list of additional information that has been attached to the order. For example, gift message, delivery instructions, or internal notes.
     */
    public function selectCustomAttributes(?ShopifyOrderCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer associated with the order. Guest checkout orders can have an associated customer without customer authentication. Returns null if the order has no associated customer.
     * Learn more about [customer accounts](https://help.shopify.com/manual/customers/customer-accounts).
     */
    public function selectCustomer(?ShopifyOrderCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the customer agreed to receive marketing emails at the time of purchase.
     * Use this to ensure compliance with marketing consent laws and to segment customers for email campaigns.
     * Learn more about [building customer segments](https://shopify.dev/docs/apps/build/marketing-analytics/customer-segments).
     */
    public function selectCustomerAcceptsMarketing(): static
    {
        $this->selectField("customerAcceptsMarketing");

        return $this;
    }

    /**
     * The customer's visits and interactions with the online store before placing the order.
     *
     * @deprecated Use `customerJourneySummary` instead.
     */
    public function selectCustomerJourney(?ShopifyOrderCustomerJourneyArgumentsObject $argsObject = null): ShopifyCustomerJourneyQueryObject
    {
        $object = new ShopifyCustomerJourneyQueryObject("customerJourney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's visits and interactions with the online store before placing the order.
     * Use this to understand customer behavior, attribution sources, and marketing effectiveness to optimize your sales funnel.
     */
    public function selectCustomerJourneySummary(?ShopifyOrderCustomerJourneySummaryArgumentsObject $argsObject = null): ShopifyCustomerJourneySummaryQueryObject
    {
        $object = new ShopifyCustomerJourneySummaryQueryObject("customerJourneySummary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's language and region preference at the time of purchase. For example, "en" for English, "fr-CA" for French (Canada), or "es-MX" for Spanish (Mexico).
     * Use this to provide localized customer service and targeted marketing in the customer's preferred language.
     */
    public function selectCustomerLocale(): static
    {
        $this->selectField("customerLocale");

        return $this;
    }

    /**
     * A list of discounts that are applied to the order, excluding order edits and refunds.
     * Includes discount codes, automatic discounts, and other promotions that reduce the order total.
     */
    public function selectDiscountApplications(?ShopifyOrderDiscountApplicationsArgumentsObject $argsObject = null): ShopifyDiscountApplicationConnectionQueryObject
    {
        $object = new ShopifyDiscountApplicationConnectionQueryObject("discountApplications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discount code used for an order. Returns `null` if no discount code was applied.
     */
    public function selectDiscountCode(): static
    {
        $this->selectField("discountCode");

        return $this;
    }

    /**
     * The discount codes used for the order. Multiple codes can be applied to a single order.
     */
    public function selectDiscountCodes(): static
    {
        $this->selectField("discountCodes");

        return $this;
    }

    /**
     * The primary address of the customer, prioritizing shipping address over billing address when both are available.
     * Returns `null` if neither shipping address nor billing address was provided.
     */
    public function selectDisplayAddress(?ShopifyOrderDisplayAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("displayAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An order's financial status for display in the Shopify admin.
     */
    public function selectDisplayFinancialStatus(): static
    {
        $this->selectField("displayFinancialStatus");

        return $this;
    }

    /**
     * The order's fulfillment status that displays in the Shopify admin to merchants. For example, an order might be unfulfilled or scheduled.
     * For detailed processing, use the [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) object.
     */
    public function selectDisplayFulfillmentStatus(): static
    {
        $this->selectField("displayFulfillmentStatus");

        return $this;
    }

    /**
     * A list of payment disputes associated with the order, such as chargebacks or payment inquiries.
     * Disputes occur when customers challenge transactions with their bank or payment provider.
     */
    public function selectDisputes(?ShopifyOrderDisputesArgumentsObject $argsObject = null): ShopifyOrderDisputeSummaryQueryObject
    {
        $object = new ShopifyOrderDisputeSummaryQueryObject("disputes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether duties are included in the subtotal price of the order.
     * Duties are import taxes charged by customs authorities when goods cross international borders.
     */
    public function selectDutiesIncluded(): static
    {
        $this->selectField("dutiesIncluded");

        return $this;
    }

    /**
     * Whether the order has had any edits applied. For example, adding or removing line items, updating quantities, or changing prices.
     */
    public function selectEdited(): static
    {
        $this->selectField("edited");

        return $this;
    }

    /**
     * The email address associated with the customer for this order.
     * Used for sending order confirmations, shipping notifications, and other order-related communications.
     * Returns `null` if no email address was provided during checkout.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * Whether taxes on the order are estimated.
     * This field returns `false` when taxes on the order are finalized and aren't subject to any changes.
     */
    public function selectEstimatedTaxes(): static
    {
        $this->selectField("estimatedTaxes");

        return $this;
    }

    /**
     * A list of events associated with the order. Events track significant changes and activities related to the order, such as creation, payment, fulfillment, and cancellation.
     */
    public function selectEvents(?ShopifyOrderEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of ExchangeV2s for the order.
     *
     * @deprecated Use `returns` instead.
     */
    public function selectExchangeV2s(?ShopifyOrderExchangeV2sArgumentsObject $argsObject = null): ShopifyExchangeV2ConnectionQueryObject
    {
        $object = new ShopifyExchangeV2ConnectionQueryObject("exchangeV2s");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether there are line items that can be fulfilled.
     * This field returns `false` when the order has no fulfillable line items.
     * For a more granular view of the fulfillment status, refer to the [FulfillmentOrder](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrder) object.
     */
    public function selectFulfillable(): static
    {
        $this->selectField("fulfillable");

        return $this;
    }

    /**
     * A list of [fulfillment orders](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) for an order.
     * Each fulfillment order groups [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.lineItems) that are fulfilled together,
     * allowing an order to be processed in parts if needed.
     */
    public function selectFulfillmentOrders(?ShopifyOrderFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyFulfillmentOrderConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderConnectionQueryObject("fulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of shipments for the order. Fulfillments represent the physical shipment of products to customers.
     */
    public function selectFulfillments(?ShopifyOrderFulfillmentsArgumentsObject $argsObject = null): ShopifyFulfillmentQueryObject
    {
        $object = new ShopifyFulfillmentQueryObject("fulfillments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of fulfillments for the order, including canceled ones.
     */
    public function selectFulfillmentsCount(?ShopifyOrderFulfillmentsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("fulfillmentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the order has been paid in full. This field returns `true` when the total amount received equals or exceeds the order total.
     */
    public function selectFullyPaid(): static
    {
        $this->selectField("fullyPaid");

        return $this;
    }

    /**
     * Whether the merchant has added a timeline comment to the order.
     */
    public function selectHasTimelineComment(): static
    {
        $this->selectField("hasTimelineComment");

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
     * The URL of the first page of the online store that the customer visited before they submitted the order.
     *
     * @deprecated Use `customerJourneySummary.lastVisit.landingPageHtml` instead
     */
    public function selectLandingPageDisplayText(): static
    {
        $this->selectField("landingPageDisplayText");

        return $this;
    }

    /**
     * The first page of the online store that the customer visited before they submitted the order.
     *
     * @deprecated Use `customerJourneySummary.lastVisit.landingPage` instead
     */
    public function selectLandingPageUrl(): static
    {
        $this->selectField("landingPageUrl");

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
     * A list of the order's line items. Line items represent the individual products and quantities that make up the order.
     */
    public function selectLineItems(?ShopifyOrderLineItemsArgumentsObject $argsObject = null): ShopifyLineItemConnectionQueryObject
    {
        $object = new ShopifyLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of localization extensions for the resource.
     *
     * @deprecated This connection will be removed in a future version. Use `localizedFields` instead.
     */
    public function selectLocalizationExtensions(?ShopifyOrderLocalizationExtensionsArgumentsObject $argsObject = null): ShopifyLocalizationExtensionConnectionQueryObject
    {
        $object = new ShopifyLocalizationExtensionConnectionQueryObject("localizationExtensions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of localized fields for the resource.
     */
    public function selectLocalizedFields(?ShopifyOrderLocalizedFieldsArgumentsObject $argsObject = null): ShopifyLocalizedFieldConnectionQueryObject
    {
        $object = new ShopifyLocalizedFieldConnectionQueryObject("localizedFields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The legal business structure that the merchant operates under for this order, such as an LLC, corporation, or partnership.
     * Used for tax reporting, legal compliance, and determining which business entity is responsible for the order.
     */
    public function selectMerchantBusinessEntity(?ShopifyOrderMerchantBusinessEntityArgumentsObject $argsObject = null): ShopifyBusinessEntityQueryObject
    {
        $object = new ShopifyBusinessEntityQueryObject("merchantBusinessEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the order can be edited by the merchant. Returns `false` for orders that can't be modified, such as canceled orders or orders with specific payment statuses.
     */
    public function selectMerchantEditable(): static
    {
        $this->selectField("merchantEditable");

        return $this;
    }

    /**
     * A list of reasons why the order can't be edited. For example, canceled orders can't be edited.
     */
    public function selectMerchantEditableErrors(): static
    {
        $this->selectField("merchantEditableErrors");

        return $this;
    }

    /**
     * The application acting as the Merchant of Record for the order. The Merchant of Record is responsible for tax collection and remittance.
     */
    public function selectMerchantOfRecordApp(?ShopifyOrderMerchantOfRecordAppArgumentsObject $argsObject = null): ShopifyOrderAppQueryObject
    {
        $object = new ShopifyOrderAppQueryObject("merchantOfRecordApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyOrderMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyOrderMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyOrderMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique identifier for the order that appears on the order page in the Shopify admin and the **Order status** page.
     * For example, "#1001", "EN1001", or "1001-A".
     * This value isn't unique across multiple stores. Use this field to identify orders in the Shopify admin and for order tracking.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The net payment for the order, based on the total amount received minus the total amount refunded, in shop currency.
     *
     * @deprecated Use `netPaymentSet` instead.
     */
    public function selectNetPayment(): static
    {
        $this->selectField("netPayment");

        return $this;
    }

    /**
     * The net payment for the order, based on the total amount received minus the total amount refunded, in shop and presentment currencies.
     */
    public function selectNetPaymentSet(?ShopifyOrderNetPaymentSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("netPaymentSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of line items that can't be fulfilled.
     * For example, tips and fully refunded line items can't be fulfilled.
     * For a more granular view of the fulfillment status, refer to the [FulfillmentOrder](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrder) object.
     */
    public function selectNonFulfillableLineItems(?ShopifyOrderNonFulfillableLineItemsArgumentsObject $argsObject = null): ShopifyLineItemConnectionQueryObject
    {
        $object = new ShopifyLineItemConnectionQueryObject("nonFulfillableLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The note associated with the order.
     * Contains additional information or instructions added by merchants or customers during the order process.
     * Commonly used for special delivery instructions, gift messages, or internal processing notes.
     * The maximum length is 5000 characters.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The order number used to generate the name using the store's configured order number prefix/suffix. This number isn't guaranteed to follow a consecutive integer sequence (e.g. 1, 2, 3..), nor is it guaranteed to be unique across multiple stores, or even for a single store.
     */
    public function selectNumber(): static
    {
        $this->selectField("number");

        return $this;
    }

    /**
     * The total amount of all additional fees, such as import fees or taxes, that were applied when an order was created.
     * Returns `null` if additional fees aren't applicable.
     */
    public function selectOriginalTotalAdditionalFeesSet(?ShopifyOrderOriginalTotalAdditionalFeesSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalAdditionalFeesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount of duties calculated when an order was created, before any modifications. Modifications include returns, refunds, order edits, and cancellations. Use [`currentTotalDutiesSet`](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.currentTotalDutiesSet) to retrieve the current duties amount after adjustments.
     */
    public function selectOriginalTotalDutiesSet(?ShopifyOrderOriginalTotalDutiesSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price of the order at the time of order creation, in shop and presentment currencies.
     * Use this to compare the original order value against the current total after edits, returns, or refunds.
     */
    public function selectOriginalTotalPriceSet(?ShopifyOrderOriginalTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The payment collection details for the order, including payment status, outstanding amounts, and collection information.
     * Use this to understand when and how payments should be collected, especially for orders with deferred or installment payment terms.
     */
    public function selectPaymentCollectionDetails(?ShopifyOrderPaymentCollectionDetailsArgumentsObject $argsObject = null): ShopifyOrderPaymentCollectionDetailsQueryObject
    {
        $object = new ShopifyOrderPaymentCollectionDetailsQueryObject("paymentCollectionDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the names of all payment gateways used for the order.
     * For example, "Shopify Payments" and "Cash on Delivery (COD)".
     */
    public function selectPaymentGatewayNames(): static
    {
        $this->selectField("paymentGatewayNames");

        return $this;
    }

    /**
     * The payment terms associated with the order, such as net payment due dates or early payment discounts. Payment terms define when and how an order should be paid. Returns `null` if no specific payment terms were set for the order.
     */
    public function selectPaymentTerms(?ShopifyOrderPaymentTermsArgumentsObject $argsObject = null): ShopifyPaymentTermsQueryObject
    {
        $object = new ShopifyPaymentTermsQueryObject("paymentTerms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The phone number associated with the customer for this order.
     * Useful for contacting customers about shipping updates, delivery notifications, or order issues.
     * Returns `null` if no phone number was provided during checkout.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The fulfillment location that was assigned when the order was created.
     * Orders can have multiple fulfillment orders. These fulfillment orders can each be assigned to a different location which is responsible for fulfilling a subset of the items in an order. The `Order.physicalLocation` field will only point to one of these locations.
     * Use the [`FulfillmentOrder`](https://shopify.dev/api/admin-graphql/latest/objects/fulfillmentorder)
     * object for up to date fulfillment location information.
     *
     * @deprecated Use `fulfillmentOrders` to get the fulfillment location for the order
     */
    public function selectPhysicalLocation(?ShopifyOrderPhysicalLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("physicalLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The purchase order (PO) number that's associated with an order.
     * This is typically provided by business customers who require a PO number for their procurement.
     */
    public function selectPoNumber(): static
    {
        $this->selectField("poNumber");

        return $this;
    }

    /**
     * The currency used by the customer when placing the order. For example, "USD", "EUR", or "CAD".
     * This may differ from the shop's base currency when serving international customers or using multi-currency pricing.
     */
    public function selectPresentmentCurrencyCode(): static
    {
        $this->selectField("presentmentCurrencyCode");

        return $this;
    }

    /**
     * The date and time in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when the order was processed.
     * This date and time might not match the date and time when the order was created.
     */
    public function selectProcessedAt(): static
    {
        $this->selectField("processedAt");

        return $this;
    }

    /**
     * Whether the customer also purchased items from other stores in the network.
     */
    public function selectProductNetwork(): static
    {
        $this->selectField("productNetwork");

        return $this;
    }

    /**
     * The sales channel that the order was created from, such as the [Online Store](https://shopify.dev/docs/apps/build/app-surfaces#online-store) or [Shopify POS](https://shopify.dev/docs/apps/build/app-surfaces#point-of-sale).
     */
    public function selectPublication(?ShopifyOrderPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The business entity that placed the order, including company details and purchasing relationships.
     * Used for B2B transactions to track which company or organization is responsible for the purchase and payment terms.
     */
    public function selectPurchasingEntity(?ShopifyOrderPurchasingEntityArgumentsObject $argsObject = null): ShopifyPurchasingEntityUnionObject
    {
        $object = new ShopifyPurchasingEntityUnionObject("purchasingEntity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The marketing referral code from the link that the customer clicked to visit the store.
     * Supports the following URL attributes: "ref", "source", or "r".
     * For example, if the URL is `{shop}.myshopify.com/products/slide?ref=j2tj1tn2`, then this value is `j2tj1tn2`.
     *
     * @deprecated Use `customerJourneySummary.lastVisit.referralCode` instead
     */
    public function selectReferralCode(): static
    {
        $this->selectField("referralCode");

        return $this;
    }

    /**
     * A web domain or short description of the source that sent the customer to your online store. For example, "shopify.com" or "email".
     *
     * @deprecated Use `customerJourneySummary.lastVisit.referralInfoHtml` instead
     */
    public function selectReferrerDisplayText(): static
    {
        $this->selectField("referrerDisplayText");

        return $this;
    }

    /**
     * The URL of the webpage where the customer clicked a link that sent them to your online store.
     *
     * @deprecated Use `customerJourneySummary.lastVisit.referrerUrl` instead
     */
    public function selectReferrerUrl(): static
    {
        $this->selectField("referrerUrl");

        return $this;
    }

    /**
     * The difference between the suggested and actual refund amount of all refunds that have been applied to the order.
     * A positive value indicates a difference in the merchant's favor, and a negative value indicates a difference in the customer's favor.
     */
    public function selectRefundDiscrepancySet(?ShopifyOrderRefundDiscrepancySetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("refundDiscrepancySet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the order can be refunded based on its payment transactions.
     * Returns `false` for orders with no eligible payment transactions, such as fully refunded orders or orders with non-refundable payment methods.
     */
    public function selectRefundable(): static
    {
        $this->selectField("refundable");

        return $this;
    }

    /**
     * A list of refunds that have been applied to the order.
     * Refunds represent money returned to customers for returned items, cancellations, or adjustments.
     */
    public function selectRefunds(?ShopifyOrderRefundsArgumentsObject $argsObject = null): ShopifyRefundQueryObject
    {
        $object = new ShopifyRefundQueryObject("refunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL of the source that the order originated from, if found in the domain registry. Returns `null` if the source URL isn't in the domain registry.
     */
    public function selectRegisteredSourceUrl(): static
    {
        $this->selectField("registeredSourceUrl");

        return $this;
    }

    /**
     * Whether the order requires physical shipping to the customer.
     * Returns `false` for digital-only orders (such as gift cards or downloadable products) and `true` for orders with physical products that need delivery.
     * Use this to determine shipping workflows and logistics requirements.
     */
    public function selectRequiresShipping(): static
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    /**
     * Whether any line items on the order can be restocked into inventory.
     * Returns `false` for digital products, custom items, or items that can't be resold.
     */
    public function selectRestockable(): static
    {
        $this->selectField("restockable");

        return $this;
    }

    /**
     * The physical location where a retail order is created or completed, except for draft POS orders completed using the "mark as paid" flow in the Shopify admin, which return `null`. Transactions associated with the order might have been processed at a different location.
     */
    public function selectRetailLocation(?ShopifyOrderRetailLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("retailLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order's aggregated return status for display purposes.
     * Indicates the overall state of returns for the order, helping merchants track and manage the return process.
     */
    public function selectReturnStatus(): static
    {
        $this->selectField("returnStatus");

        return $this;
    }

    /**
     * The returns associated with the order.
     * Contains information about items that customers have requested to return, including return reasons, status, and refund details.
     * Use this to track and manage the return process for order items.
     */
    public function selectReturns(?ShopifyOrderReturnsArgumentsObject $argsObject = null): ShopifyReturnConnectionQueryObject
    {
        $object = new ShopifyReturnConnectionQueryObject("returns");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The risk assessment summary for the order.
     * Provides fraud analysis and risk scoring to help you identify potentially fraudulent orders.
     * Use this to make informed decisions about order fulfillment and payment processing.
     */
    public function selectRisk(?ShopifyOrderRiskArgumentsObject $argsObject = null): ShopifyOrderRiskSummaryQueryObject
    {
        $object = new ShopifyOrderRiskSummaryQueryObject("risk");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fraud risk level of the order.
     *
     * @deprecated This field is deprecated in favor of OrderRiskAssessment.riskLevel which allows for more granular risk levels, including PENDING and NONE.
     */
    public function selectRiskLevel(): static
    {
        $this->selectField("riskLevel");

        return $this;
    }

    /**
     * A list of risks associated with the order.
     *
     * @deprecated This field is deprecated in favor of OrderRiskAssessment, which provides enhanced capabilities such as distinguishing risks from their provider.
     */
    public function selectRisks(?ShopifyOrderRisksArgumentsObject $argsObject = null): ShopifyOrderRiskQueryObject
    {
        $object = new ShopifyOrderRiskQueryObject("risks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping address where the order will be delivered.
     * Contains the customer's delivery location for fulfillment and shipping label generation.
     * Returns `null` for digital orders or orders that don't require shipping.
     */
    public function selectShippingAddress(?ShopifyOrderShippingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A summary of all shipping costs on the order.
     * Aggregates shipping charges, discounts, and taxes to provide a single view of delivery costs.
     */
    public function selectShippingLine(?ShopifyOrderShippingLineArgumentsObject $argsObject = null): ShopifyShippingLineQueryObject
    {
        $object = new ShopifyShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping methods applied to the order.
     * Each shipping line represents a shipping option chosen during checkout, including the carrier, service level, and cost.
     * Use this to understand shipping charges and delivery options for the order.
     */
    public function selectShippingLines(?ShopifyOrderShippingLinesArgumentsObject $argsObject = null): ShopifyShippingLineConnectionQueryObject
    {
        $object = new ShopifyShippingLineConnectionQueryObject("shippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Shopify Protect details for the order, including fraud protection status and coverage information.
     * Shopify Protect helps protect eligible orders against fraudulent chargebacks.
     * Returns `null` if Shopify Protect is disabled for the shop or the order isn't eligible for protection.
     * Learn more about [Shopify Protect](https://www.shopify.com/protect).
     */
    public function selectShopifyProtect(?ShopifyOrderShopifyProtectArgumentsObject $argsObject = null): ShopifyShopifyProtectOrderSummaryQueryObject
    {
        $object = new ShopifyShopifyProtectOrderSummaryQueryObject("shopifyProtect");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique POS or third party order identifier.
     * For example, "1234-12-1000" or "111-98567-54". The [`receiptNumber`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-receiptNumber) field is derived from this value for POS orders.
     */
    public function selectSourceIdentifier(): static
    {
        $this->selectField("sourceIdentifier");

        return $this;
    }

    /**
     * The name of the source associated with the order, such as "web", "mobile_app", or "pos". Use this field to identify the platform where the order was placed.
     */
    public function selectSourceName(): static
    {
        $this->selectField("sourceName");

        return $this;
    }

    /**
     * The staff member who created or is responsible for the order.
     * Useful for tracking which team member handled phone orders, manual orders, or order modifications.
     * Returns `null` for orders created directly by customers through the online store.
     */
    public function selectStaffMember(?ShopifyOrderStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL where customers can check their order's current status, including tracking information and delivery updates.
     * Provides order tracking links in emails, apps, or customer communications.
     */
    public function selectStatusPageUrl(): static
    {
        $this->selectField("statusPageUrl");

        return $this;
    }

    /**
     * The sum of quantities for all line items that contribute to the order's subtotal price.
     * This excludes quantities for items like tips, shipping costs, or gift cards that don't affect the subtotal.
     * Use this to quickly understand the total item count for pricing calculations.
     */
    public function selectSubtotalLineItemsQuantity(): static
    {
        $this->selectField("subtotalLineItemsQuantity");

        return $this;
    }

    /**
     * The sum of the prices for all line items after discounts and before returns, in shop currency.
     * If `taxesIncluded` is `true`, then the subtotal also includes tax.
     *
     * @deprecated Use `subtotalPriceSet` instead.
     */
    public function selectSubtotalPrice(): static
    {
        $this->selectField("subtotalPrice");

        return $this;
    }

    /**
     * The sum of the prices for all line items after discounts and before returns, in shop and presentment currencies.
     * If `taxesIncluded` is `true`, then the subtotal also includes tax.
     */
    public function selectSubtotalPriceSet(?ShopifyOrderSubtotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A calculated refund suggestion for the order based on specified line items, shipping, and duties.
     * Use this to preview refund amounts, taxes, and processing fees before creating an actual refund.
     */
    public function selectSuggestedRefund(?ShopifyOrderSuggestedRefundArgumentsObject $argsObject = null): ShopifySuggestedRefundQueryObject
    {
        $object = new ShopifySuggestedRefundQueryObject("suggestedRefund");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A comma separated list of tags associated with the order. Updating `tags` overwrites
     * any existing tags that were previously added to the order. To add new tags without overwriting
     * existing tags, use the [tagsAdd](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd)
     * mutation.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }

    /**
     * Whether taxes are exempt on the order.
     * Returns `true` for orders where the customer or business has a valid tax exemption, such as non-profit organizations or tax-free purchases.
     * Use this to understand if tax calculations were skipped during checkout.
     */
    public function selectTaxExempt(): static
    {
        $this->selectField("taxExempt");

        return $this;
    }

    /**
     * A list of all tax lines applied to line items on the order, before returns.
     * Tax line prices represent the total price for all tax lines with the same `rate` and `title`.
     */
    public function selectTaxLines(?ShopifyOrderTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether taxes are included in the subtotal price of the order.
     * When `true`, the subtotal and line item prices include tax amounts. When `false`, taxes are calculated and displayed separately.
     */
    public function selectTaxesIncluded(): static
    {
        $this->selectField("taxesIncluded");

        return $this;
    }

    /**
     * Whether the order is a test.
     * Test orders are made using the Shopify Bogus Gateway or a payment provider with test mode enabled.
     * A test order can't be converted into a real order and vice versa.
     */
    public function selectTest(): static
    {
        $this->selectField("test");

        return $this;
    }

    /**
     * The authorized amount that's uncaptured or undercaptured, in shop currency.
     * This amount isn't adjusted for returns.
     *
     * @deprecated Use `totalCapturableSet` instead.
     */
    public function selectTotalCapturable(): static
    {
        $this->selectField("totalCapturable");

        return $this;
    }

    /**
     * The authorized amount that's uncaptured or undercaptured, in shop and presentment currencies.
     * This amount isn't adjusted for returns.
     */
    public function selectTotalCapturableSet(?ShopifyOrderTotalCapturableSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalCapturableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total rounding adjustment applied to payments or refunds for an order involving cash payments. Applies to some countries where cash transactions are rounded to the nearest currency denomination.
     */
    public function selectTotalCashRoundingAdjustment(?ShopifyOrderTotalCashRoundingAdjustmentArgumentsObject $argsObject = null): ShopifyCashRoundingAdjustmentQueryObject
    {
        $object = new ShopifyCashRoundingAdjustmentQueryObject("totalCashRoundingAdjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount discounted on the order before returns, in shop currency.
     * This includes both order and line level discounts.
     *
     * @deprecated Use `totalDiscountsSet` instead.
     */
    public function selectTotalDiscounts(): static
    {
        $this->selectField("totalDiscounts");

        return $this;
    }

    /**
     * The total amount discounted on the order before returns, in shop and presentment currencies.
     * This includes both order and line level discounts.
     */
    public function selectTotalDiscountsSet(?ShopifyOrderTotalDiscountsSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount not yet transacted for the order, in shop and presentment currencies.
     * A positive value indicates a difference in the merchant's favor (payment from customer to merchant) and a negative value indicates a difference in the customer's favor (refund from merchant to customer).
     */
    public function selectTotalOutstandingSet(?ShopifyOrderTotalOutstandingSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalOutstandingSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price of the order, before returns, in shop currency.
     * This includes taxes and discounts.
     *
     * @deprecated Use `totalPriceSet` instead.
     */
    public function selectTotalPrice(): static
    {
        $this->selectField("totalPrice");

        return $this;
    }

    /**
     * The total price of the order, before returns, in shop and presentment currencies.
     * This includes taxes and discounts.
     */
    public function selectTotalPriceSet(?ShopifyOrderTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount received from the customer before returns, in shop currency.
     *
     * @deprecated Use `totalReceivedSet` instead.
     */
    public function selectTotalReceived(): static
    {
        $this->selectField("totalReceived");

        return $this;
    }

    /**
     * The total amount received from the customer before returns, in shop and presentment currencies.
     */
    public function selectTotalReceivedSet(?ShopifyOrderTotalReceivedSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalReceivedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount that was refunded, in shop currency.
     *
     * @deprecated Use `totalRefundedSet` instead.
     */
    public function selectTotalRefunded(): static
    {
        $this->selectField("totalRefunded");

        return $this;
    }

    /**
     * The total amount that was refunded, in shop and presentment currencies.
     */
    public function selectTotalRefundedSet(?ShopifyOrderTotalRefundedSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalRefundedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount of shipping that was refunded, in shop and presentment currencies.
     */
    public function selectTotalRefundedShippingSet(?ShopifyOrderTotalRefundedShippingSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalRefundedShippingSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total shipping amount before discounts and returns, in shop currency.
     *
     * @deprecated Use `totalShippingPriceSet` instead.
     */
    public function selectTotalShippingPrice(): static
    {
        $this->selectField("totalShippingPrice");

        return $this;
    }

    /**
     * The total shipping costs returned to the customer, in shop and presentment currencies. This includes fees and any related discounts that were refunded.
     */
    public function selectTotalShippingPriceSet(?ShopifyOrderTotalShippingPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalShippingPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax amount before returns, in shop currency.
     *
     * @deprecated Use `totalTaxSet` instead.
     */
    public function selectTotalTax(): static
    {
        $this->selectField("totalTax");

        return $this;
    }

    /**
     * The total tax amount before returns, in shop and presentment currencies.
     */
    public function selectTotalTaxSet(?ShopifyOrderTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all tip amounts for the order, in shop currency.
     *
     * @deprecated Use `totalTipReceivedSet` instead.
     */
    public function selectTotalTipReceived(?ShopifyOrderTotalTipReceivedArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalTipReceived");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all tip amounts for the order, in shop and presentment currencies.
     */
    public function selectTotalTipReceivedSet(?ShopifyOrderTotalTipReceivedSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTipReceivedSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total weight of the order before returns, in grams.
     */
    public function selectTotalWeight(): static
    {
        $this->selectField("totalWeight");

        return $this;
    }

    /**
     * A list of transactions associated with the order.
     */
    public function selectTransactions(?ShopifyOrderTransactionsArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of transactions associated with the order.
     */
    public function selectTransactionsCount(?ShopifyOrderTransactionsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("transactionsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether no payments have been made for the order.
     */
    public function selectUnpaid(): static
    {
        $this->selectField("unpaid");

        return $this;
    }

    /**
     * The date and time in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when the order was last modified.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
