<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAdditionalFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySalesAgreementConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyResourceAlert;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderAttribution;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderCancellation;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannelInformation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerJourney;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerJourneySummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountApplicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderDisputeSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyExchangeV2Connection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocalizationExtensionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocalizedFieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyBusinessEntity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderPaymentCollectionDetails;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPaymentTerms;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPublication;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPurchasingEntityHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReturnConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderRiskSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderRisk;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyProtectOrderSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySuggestedRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCashRoundingAdjustment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderTransaction;

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
class ShopifyOrder implements ShopifyCommentEventSubject, ShopifyHasEvents, ShopifyHasLocalizationExtensions, ShopifyHasLocalizedFields, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyLegacyInteroperability, ShopifyNode
{
    protected $additionalFees;
    protected $agreements;
    protected $alerts;
    protected $app;
    protected $attribution;
    protected $billingAddress;
    protected $billingAddressMatchesShippingAddress;
    protected $canMarkAsPaid;
    protected $canNotifyCustomer;
    protected $cancelReason;
    protected $cancellation;
    protected $cancelledAt;
    protected $capturable;
    protected $cartDiscountAmount;
    protected $cartDiscountAmountSet;
    protected $cartToken;
    protected $channel;
    protected $channelInformation;
    protected $checkoutToken;
    protected $clientIp;
    protected $closed;
    protected $closedAt;
    protected $confirmationNumber;
    protected $confirmed;
    protected $createdAt;
    protected $currencyCode;
    protected $currentCartDiscountAmountSet;
    protected $currentShippingPriceSet;
    protected $currentSubtotalLineItemsQuantity;
    protected $currentSubtotalPriceSet;
    protected $currentTaxLines;
    protected $currentTotalAdditionalFeesSet;
    protected $currentTotalDiscountsSet;
    protected $currentTotalDutiesSet;
    protected $currentTotalPriceSet;
    protected $currentTotalTaxSet;
    protected $currentTotalWeight;
    protected $customAttributes;
    protected $customer;
    protected $customerAcceptsMarketing;
    protected $customerJourney;
    protected $customerJourneySummary;
    protected $customerLocale;
    protected $discountApplications;
    protected $discountCode;
    protected $discountCodes;
    protected $displayAddress;
    protected $displayFinancialStatus;
    protected $displayFulfillmentStatus;
    protected $disputes;
    protected $dutiesIncluded;
    protected $edited;
    protected $email;
    protected $estimatedTaxes;
    protected $events;
    protected $exchangeV2s;
    protected $fulfillable;
    protected $fulfillmentOrders;
    protected $fulfillments;
    protected $fulfillmentsCount;
    protected $fullyPaid;
    protected $hasTimelineComment;
    protected $id;
    protected $landingPageDisplayText;
    protected $landingPageUrl;
    protected $legacyResourceId;
    protected $lineItems;
    protected $localizationExtensions;
    protected $localizedFields;
    protected $merchantBusinessEntity;
    protected $merchantEditable;
    protected $merchantEditableErrors;
    protected $merchantOfRecordApp;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $netPayment;
    protected $netPaymentSet;
    protected $nonFulfillableLineItems;
    protected $note;
    protected $number;
    protected $originalTotalAdditionalFeesSet;
    protected $originalTotalDutiesSet;
    protected $originalTotalPriceSet;
    protected $paymentCollectionDetails;
    protected $paymentGatewayNames;
    protected $paymentTerms;
    protected $phone;
    protected $physicalLocation;
    protected $poNumber;
    protected $presentmentCurrencyCode;
    protected $processedAt;
    protected $productNetwork;
    protected $publication;
    protected $purchasingEntity;
    protected $referralCode;
    protected $referrerDisplayText;
    protected $referrerUrl;
    protected $refundDiscrepancySet;
    protected $refundable;
    protected $refunds;
    protected $registeredSourceUrl;
    protected $requiresShipping;
    protected $restockable;
    protected $retailLocation;
    protected $returnStatus;
    protected $returns;
    protected $risk;
    protected $riskLevel;
    protected $risks;
    protected $shippingAddress;
    protected $shippingLine;
    protected $shippingLines;
    protected $shopifyProtect;
    protected $sourceIdentifier;
    protected $sourceName;
    protected $staffMember;
    protected $statusPageUrl;
    protected $subtotalLineItemsQuantity;
    protected $subtotalPrice;
    protected $subtotalPriceSet;
    protected $suggestedRefund;
    protected $tags;
    protected $taxExempt;
    protected $taxLines;
    protected $taxesIncluded;
    protected $test;
    protected $totalCapturable;
    protected $totalCapturableSet;
    protected $totalCashRoundingAdjustment;
    protected $totalDiscounts;
    protected $totalDiscountsSet;
    protected $totalOutstandingSet;
    protected $totalPrice;
    protected $totalPriceSet;
    protected $totalReceived;
    protected $totalReceivedSet;
    protected $totalRefunded;
    protected $totalRefundedSet;
    protected $totalRefundedShippingSet;
    protected $totalShippingPrice;
    protected $totalShippingPriceSet;
    protected $totalTax;
    protected $totalTaxSet;
    protected $totalTipReceived;
    protected $totalTipReceivedSet;
    protected $totalWeight;
    protected $transactions;
    protected $transactionsCount;
    protected $unpaid;
    protected $updatedAt;

    
    /**
     * A list of additional fees applied to an order, such as duties, import fees, or [tax lines](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.additionalFees.taxLines).
     *
     * @return ShopifyAdditionalFee[]
     */
    public function getAdditionalFees(): ?array
    {
        return $this->additionalFees;
    }

    
    /**
     * A list of sales agreements associated with the order, such as contracts defining payment terms, or delivery schedules between merchants and customers.
     *
     * @return ShopifySalesAgreementConnection
     */
    public function getAgreements(): ?ShopifySalesAgreementConnection
    {
        return $this->agreements;
    }

    
    /**
     * A list of messages that appear on the **Orders** page in the Shopify admin. These alerts provide merchants with important information about an order's status or required actions.
     *
     * @return ShopifyResourceAlert[]
     */
    public function getAlerts(): ?array
    {
        return $this->alerts;
    }

    
    /**
     * The application that created the order. For example, "Online Store", "Point of Sale", or a custom app name.
     * Use this to identify the order source for attribution and fulfillment workflows.
     * Learn more about [building apps for orders and fulfillment](https://shopify.dev/docs/apps/build/orders-fulfillment).
     *
     * @return ShopifyOrderApp
     */
    public function getApp(): ?ShopifyOrderApp
    {
        return $this->app;
    }

    
    /**
     * The attribution details for the order.
     *
     * @return ShopifyOrderAttribution
     */
    public function getAttribution(): ?ShopifyOrderAttribution
    {
        return $this->attribution;
    }

    
    /**
     * The billing address associated with the payment method selected by the customer for an order.
     * Returns `null` if no billing address was provided during checkout.
     *
     * @return ShopifyMailingAddress
     */
    public function getBillingAddress(): ?ShopifyMailingAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * Whether the billing address matches the [shipping address](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.shippingAddress). Returns `true` if both addresses are the same, and `false` if they're different or if an address is missing.
     *
     * @return bool
     */
    public function getBillingAddressMatchesShippingAddress(): ?bool
    {
        return $this->billingAddressMatchesShippingAddress;
    }

    
    /**
     * Whether an order can be manually marked as paid. Returns `false` if the order is already paid, is canceled, has pending [Shopify Payments](https://help.shopify.com/en/manual/payments/shopify-payments/payouts) transactions, or has a negative payment amount.
     *
     * @return bool
     */
    public function getCanMarkAsPaid(): ?bool
    {
        return $this->canMarkAsPaid;
    }

    
    /**
     * Whether order notifications can be sent to the customer.
     * Returns `true` if the customer has a valid [email address](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.email).
     *
     * @return bool
     */
    public function getCanNotifyCustomer(): ?bool
    {
        return $this->canNotifyCustomer;
    }

    
    /**
     * The reason provided for an order cancellation. For example, a merchant might cancel an order if there's insufficient inventory. Returns `null` if the order hasn't been canceled.
     *
     * @return string A ShopifyOrderCancelReasonEnumObject value
     */
    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }

    
    /**
     * Details of an order's cancellation, if it has been canceled. This includes the reason, date, and any [staff notes](https://shopify.dev/api/admin-graphql/latest/objects/OrderCancellation#field-OrderCancellation.fields.staffNote).
     *
     * @return ShopifyOrderCancellation
     */
    public function getCancellation(): ?ShopifyOrderCancellation
    {
        return $this->cancellation;
    }

    
    /**
     * The date and time in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when an order was canceled.
     * Returns `null` if the order hasn't been canceled.
     *
     * @return Carbon
     */
    public function getCancelledAt(): ?Carbon
    {
        return $this->cancelledAt;
    }

    
    /**
     * Whether an authorized payment for an order can be captured.
     * Returns `true` if an authorized payment exists that hasn't been fully captured yet. Learn more about [capturing payments](https://help.shopify.com/en/manual/fulfillment/managing-orders/payments/capturing-payments).
     *
     * @return bool
     */
    public function getCapturable(): ?bool
    {
        return $this->capturable;
    }

    
    /**
     * The total discount amount that applies to the entire order in shop currency, before returns, refunds, order edits, and cancellations.
     *
     * @return string
     */
    public function getCartDiscountAmount(): mixed
    {
        return $this->cartDiscountAmount;
    }

    
    /**
     * The total discount amount applied at the time the order was created, displayed in both shop and presentment currencies, before returns, refunds, order edits, and cancellations. This field only includes discounts applied to the entire order.
     *
     * @return ShopifyMoneyBag
     */
    public function getCartDiscountAmountSet(): ?ShopifyMoneyBag
    {
        return $this->cartDiscountAmountSet;
    }

    
    /**
     * The token associated with the cart that was used to create the order.
     *
     * @return string
     */
    public function getCartToken(): ?string
    {
        return $this->cartToken;
    }

    
    /**
     * The sales channel from which an order originated, such as the [Online Store](https://shopify.dev/docs/apps/build/app-surfaces#online-store) or [Shopify POS](https://shopify.dev/docs/apps/build/app-surfaces#point-of-sale).
     *
     * @return ShopifyChannel
     */
    public function getChannel(): ?ShopifyChannel
    {
        return $this->channel;
    }

    
    /**
     * Details about the sales channel that created the order, such as the [channel app type](https://shopify.dev/docs/api/admin-graphql/latest/objects/channel#field-Channel.fields.channelType)
     * and [channel name](https://shopify.dev/docs/api/admin-graphql/latest/objects/ChannelDefinition#field-ChannelDefinition.fields.channelName), which helps to track order sources.
     *
     * @return ShopifyChannelInformation
     */
    public function getChannelInformation(): ?ShopifyChannelInformation
    {
        return $this->channelInformation;
    }

    
    /**
     * The token associated with the checkout that was used to create the order. Useful for correlating an order with the checkout it originated from, including in web pixels and analytics workflows.
     *
     * @return string
     */
    public function getCheckoutToken(): ?string
    {
        return $this->checkoutToken;
    }

    
    /**
     * The IP address of the customer who placed the order. Useful for fraud detection and geographic analysis.
     *
     * @return string
     */
    public function getClientIp(): ?string
    {
        return $this->clientIp;
    }

    
    /**
     * Whether an order is closed. An order is considered closed if all its line items have been fulfilled or canceled, and all financial transactions are complete.
     *
     * @return bool
     */
    public function getClosed(): ?bool
    {
        return $this->closed;
    }

    
    /**
     * The date and time [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when an order was closed. Shopify automatically records this timestamp when all items have been fulfilled or canceled, and all financial transactions are complete. Returns `null` if the order isn't closed.
     *
     * @return Carbon
     */
    public function getClosedAt(): ?Carbon
    {
        return $this->closedAt;
    }

    
    /**
     * A customer-facing order identifier, often shown instead of the sequential order name.
     * It uses a random alphanumeric format (for example, `XPAV284CT`) and isn't guaranteed to be unique across orders.
     *
     * @return string
     */
    public function getConfirmationNumber(): ?string
    {
        return $this->confirmationNumber;
    }

    
    /**
     * Whether inventory has been reserved for an order. Returns `true` if inventory quantities for an order's [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) have been reserved.
     * Learn more about [managing inventory quantities and states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states).
     *
     * @return bool
     */
    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    
    /**
     * The date and time in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when an order was created. This timestamp is set when the customer completes checkout and remains unchanged throughout an order's lifecycle.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The shop currency when the order was placed. For example, "USD" or "CAD".
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    
    /**
     * The current total of all discounts applied to the entire order, after returns, refunds, order edits, and cancellations. This includes discount codes, automatic discounts, and other promotions that affect the whole order rather than individual line items. To get the original discount amount at the time of order creation, use the [`cartDiscountAmountSet`](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.cartDiscountAmountSet) field.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentCartDiscountAmountSet(): ?ShopifyMoneyBag
    {
        return $this->currentCartDiscountAmountSet;
    }

    
    /**
     * The current shipping price after applying refunds and discounts.
     * If the parent `order.taxesIncluded` field is true, then this price includes taxes. Otherwise, this field is the pre-tax price.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentShippingPriceSet(): ?ShopifyMoneyBag
    {
        return $this->currentShippingPriceSet;
    }

    
    /**
     * The current sum of the quantities for all line items that contribute to the order's subtotal price, after returns, refunds, order edits, and cancellations.
     *
     * @return int
     */
    public function getCurrentSubtotalLineItemsQuantity(): ?int
    {
        return $this->currentSubtotalLineItemsQuantity;
    }

    
    /**
     * The total price of the order, after returns and refunds, in shop and presentment currencies.
     * This includes taxes and discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentSubtotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->currentSubtotalPriceSet;
    }

    
    /**
     * A list of all tax lines applied to line items on the order, after returns.
     * Tax line prices represent the total price for all tax lines with the same `rate` and `title`.
     *
     * @return ShopifyTaxLine[]
     */
    public function getCurrentTaxLines(): ?array
    {
        return $this->currentTaxLines;
    }

    
    /**
     * The current total of all additional fees for an order, after any returns or modifications. Modifications include returns, refunds, order edits, and cancellations. Additional fees can include charges such as duties, import fees, and special handling.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalAdditionalFeesSet(): ?ShopifyMoneyBag
    {
        return $this->currentTotalAdditionalFeesSet;
    }

    
    /**
     * The total amount discounted on the order after returns and refunds, in shop and presentment currencies.
     * This includes both order and line level discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalDiscountsSet(): ?ShopifyMoneyBag
    {
        return $this->currentTotalDiscountsSet;
    }

    
    /**
     * The current total duties amount for an order, after any returns or modifications. Modifications include returns, refunds, order edits, and cancellations.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalDutiesSet(): ?ShopifyMoneyBag
    {
        return $this->currentTotalDutiesSet;
    }

    
    /**
     * The total price of the order, after returns, in shop and presentment currencies.
     * This includes taxes and discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->currentTotalPriceSet;
    }

    
    /**
     * The sum of the prices of all tax lines applied to line items on the order, after returns and refunds, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getCurrentTotalTaxSet(): ?ShopifyMoneyBag
    {
        return $this->currentTotalTaxSet;
    }

    
    /**
     * The total weight of the order after returns and refunds, in grams.
     *
     * @return string
     */
    public function getCurrentTotalWeight(): mixed
    {
        return $this->currentTotalWeight;
    }

    
    /**
     * A list of additional information that has been attached to the order. For example, gift message, delivery instructions, or internal notes.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    
    /**
     * The customer associated with the order. Guest checkout orders can have an associated customer without customer authentication. Returns null if the order has no associated customer.
     * Learn more about [customer accounts](https://help.shopify.com/manual/customers/customer-accounts).
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    
    /**
     * Whether the customer agreed to receive marketing emails at the time of purchase.
     * Use this to ensure compliance with marketing consent laws and to segment customers for email campaigns.
     * Learn more about [building customer segments](https://shopify.dev/docs/apps/build/marketing-analytics/customer-segments).
     *
     * @return bool
     */
    public function getCustomerAcceptsMarketing(): ?bool
    {
        return $this->customerAcceptsMarketing;
    }

    
    /**
     * The customer's visits and interactions with the online store before placing the order.
     *
     * @return ShopifyCustomerJourney
     */
    public function getCustomerJourney(): ?ShopifyCustomerJourney
    {
        return $this->customerJourney;
    }

    
    /**
     * The customer's visits and interactions with the online store before placing the order.
     * Use this to understand customer behavior, attribution sources, and marketing effectiveness to optimize your sales funnel.
     *
     * @return ShopifyCustomerJourneySummary
     */
    public function getCustomerJourneySummary(): ?ShopifyCustomerJourneySummary
    {
        return $this->customerJourneySummary;
    }

    
    /**
     * The customer's language and region preference at the time of purchase. For example, "en" for English, "fr-CA" for French (Canada), or "es-MX" for Spanish (Mexico).
     * Use this to provide localized customer service and targeted marketing in the customer's preferred language.
     *
     * @return string
     */
    public function getCustomerLocale(): ?string
    {
        return $this->customerLocale;
    }

    
    /**
     * A list of discounts that are applied to the order, excluding order edits and refunds.
     * Includes discount codes, automatic discounts, and other promotions that reduce the order total.
     *
     * @return ShopifyDiscountApplicationConnection
     */
    public function getDiscountApplications(): ?ShopifyDiscountApplicationConnection
    {
        return $this->discountApplications;
    }

    
    /**
     * The discount code used for an order. Returns `null` if no discount code was applied.
     *
     * @return string
     */
    public function getDiscountCode(): ?string
    {
        return $this->discountCode;
    }

    
    /**
     * The discount codes used for the order. Multiple codes can be applied to a single order.
     *
     * @return string[]
     */
    public function getDiscountCodes(): ?array
    {
        return $this->discountCodes;
    }

    
    /**
     * The primary address of the customer, prioritizing shipping address over billing address when both are available.
     * Returns `null` if neither shipping address nor billing address was provided.
     *
     * @return ShopifyMailingAddress
     */
    public function getDisplayAddress(): ?ShopifyMailingAddress
    {
        return $this->displayAddress;
    }

    
    /**
     * An order's financial status for display in the Shopify admin.
     *
     * @return string A ShopifyOrderDisplayFinancialStatusEnumObject value
     */
    public function getDisplayFinancialStatus(): ?string
    {
        return $this->displayFinancialStatus;
    }

    
    /**
     * The order's fulfillment status that displays in the Shopify admin to merchants. For example, an order might be unfulfilled or scheduled.
     * For detailed processing, use the [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) object.
     *
     * @return string A ShopifyOrderDisplayFulfillmentStatusEnumObject value
     */
    public function getDisplayFulfillmentStatus(): ?string
    {
        return $this->displayFulfillmentStatus;
    }

    
    /**
     * A list of payment disputes associated with the order, such as chargebacks or payment inquiries.
     * Disputes occur when customers challenge transactions with their bank or payment provider.
     *
     * @return ShopifyOrderDisputeSummary[]
     */
    public function getDisputes(): ?array
    {
        return $this->disputes;
    }

    
    /**
     * Whether duties are included in the subtotal price of the order.
     * Duties are import taxes charged by customs authorities when goods cross international borders.
     *
     * @return bool
     */
    public function getDutiesIncluded(): ?bool
    {
        return $this->dutiesIncluded;
    }

    
    /**
     * Whether the order has had any edits applied. For example, adding or removing line items, updating quantities, or changing prices.
     *
     * @return bool
     */
    public function getEdited(): ?bool
    {
        return $this->edited;
    }

    
    /**
     * The email address associated with the customer for this order.
     * Used for sending order confirmations, shipping notifications, and other order-related communications.
     * Returns `null` if no email address was provided during checkout.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    
    /**
     * Whether taxes on the order are estimated.
     * This field returns `false` when taxes on the order are finalized and aren't subject to any changes.
     *
     * @return bool
     */
    public function getEstimatedTaxes(): ?bool
    {
        return $this->estimatedTaxes;
    }

    
    /**
     * A list of events associated with the order. Events track significant changes and activities related to the order, such as creation, payment, fulfillment, and cancellation.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
    }

    
    /**
     * A list of ExchangeV2s for the order.
     *
     * @return ShopifyExchangeV2Connection
     */
    public function getExchangeV2s(): ?ShopifyExchangeV2Connection
    {
        return $this->exchangeV2s;
    }

    
    /**
     * Whether there are line items that can be fulfilled.
     * This field returns `false` when the order has no fulfillable line items.
     * For a more granular view of the fulfillment status, refer to the [FulfillmentOrder](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrder) object.
     *
     * @return bool
     */
    public function getFulfillable(): ?bool
    {
        return $this->fulfillable;
    }

    
    /**
     * A list of [fulfillment orders](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) for an order.
     * Each fulfillment order groups [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.lineItems) that are fulfilled together,
     * allowing an order to be processed in parts if needed.
     *
     * @return ShopifyFulfillmentOrderConnection
     */
    public function getFulfillmentOrders(): ?ShopifyFulfillmentOrderConnection
    {
        return $this->fulfillmentOrders;
    }

    
    /**
     * A list of shipments for the order. Fulfillments represent the physical shipment of products to customers.
     *
     * @return ShopifyFulfillment[]
     */
    public function getFulfillments(): ?array
    {
        return $this->fulfillments;
    }

    
    /**
     * The total number of fulfillments for the order, including canceled ones.
     *
     * @return ShopifyCount
     */
    public function getFulfillmentsCount(): ?ShopifyCount
    {
        return $this->fulfillmentsCount;
    }

    
    /**
     * Whether the order has been paid in full. This field returns `true` when the total amount received equals or exceeds the order total.
     *
     * @return bool
     */
    public function getFullyPaid(): ?bool
    {
        return $this->fullyPaid;
    }

    
    /**
     * Whether the merchant has added a timeline comment to the order.
     *
     * @return bool
     */
    public function getHasTimelineComment(): ?bool
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The URL of the first page of the online store that the customer visited before they submitted the order.
     *
     * @return string
     */
    public function getLandingPageDisplayText(): ?string
    {
        return $this->landingPageDisplayText;
    }

    
    /**
     * The first page of the online store that the customer visited before they submitted the order.
     *
     * @return string
     */
    public function getLandingPageUrl(): mixed
    {
        return $this->landingPageUrl;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * A list of the order's line items. Line items represent the individual products and quantities that make up the order.
     *
     * @return ShopifyLineItemConnection
     */
    public function getLineItems(): ?ShopifyLineItemConnection
    {
        return $this->lineItems;
    }

    
    /**
     * List of localization extensions for the resource.
     *
     * @return ShopifyLocalizationExtensionConnection
     */
    public function getLocalizationExtensions(): ?ShopifyLocalizationExtensionConnection
    {
        return $this->localizationExtensions;
    }

    
    /**
     * List of localized fields for the resource.
     *
     * @return ShopifyLocalizedFieldConnection
     */
    public function getLocalizedFields(): ?ShopifyLocalizedFieldConnection
    {
        return $this->localizedFields;
    }

    
    /**
     * The legal business structure that the merchant operates under for this order, such as an LLC, corporation, or partnership.
     * Used for tax reporting, legal compliance, and determining which business entity is responsible for the order.
     *
     * @return ShopifyBusinessEntity
     */
    public function getMerchantBusinessEntity(): ?ShopifyBusinessEntity
    {
        return $this->merchantBusinessEntity;
    }

    
    /**
     * Whether the order can be edited by the merchant. Returns `false` for orders that can't be modified, such as canceled orders or orders with specific payment statuses.
     *
     * @return bool
     */
    public function getMerchantEditable(): ?bool
    {
        return $this->merchantEditable;
    }

    
    /**
     * A list of reasons why the order can't be edited. For example, canceled orders can't be edited.
     *
     * @return string[]
     */
    public function getMerchantEditableErrors(): ?array
    {
        return $this->merchantEditableErrors;
    }

    
    /**
     * The application acting as the Merchant of Record for the order. The Merchant of Record is responsible for tax collection and remittance.
     *
     * @return ShopifyOrderApp
     */
    public function getMerchantOfRecordApp(): ?ShopifyOrderApp
    {
        return $this->merchantOfRecordApp;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The unique identifier for the order that appears on the order page in the Shopify admin and the **Order status** page.
     * For example, "#1001", "EN1001", or "1001-A".
     * This value isn't unique across multiple stores. Use this field to identify orders in the Shopify admin and for order tracking.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The net payment for the order, based on the total amount received minus the total amount refunded, in shop currency.
     *
     * @return string
     */
    public function getNetPayment(): mixed
    {
        return $this->netPayment;
    }

    
    /**
     * The net payment for the order, based on the total amount received minus the total amount refunded, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getNetPaymentSet(): ?ShopifyMoneyBag
    {
        return $this->netPaymentSet;
    }

    
    /**
     * A list of line items that can't be fulfilled.
     * For example, tips and fully refunded line items can't be fulfilled.
     * For a more granular view of the fulfillment status, refer to the [FulfillmentOrder](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrder) object.
     *
     * @return ShopifyLineItemConnection
     */
    public function getNonFulfillableLineItems(): ?ShopifyLineItemConnection
    {
        return $this->nonFulfillableLineItems;
    }

    
    /**
     * The note associated with the order.
     * Contains additional information or instructions added by merchants or customers during the order process.
     * Commonly used for special delivery instructions, gift messages, or internal processing notes.
     * The maximum length is 5000 characters.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The order number used to generate the name using the store's configured order number prefix/suffix. This number isn't guaranteed to follow a consecutive integer sequence (e.g. 1, 2, 3..), nor is it guaranteed to be unique across multiple stores, or even for a single store.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    
    /**
     * The total amount of all additional fees, such as import fees or taxes, that were applied when an order was created.
     * Returns `null` if additional fees aren't applicable.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalAdditionalFeesSet(): ?ShopifyMoneyBag
    {
        return $this->originalTotalAdditionalFeesSet;
    }

    
    /**
     * The total amount of duties calculated when an order was created, before any modifications. Modifications include returns, refunds, order edits, and cancellations. Use [`currentTotalDutiesSet`](https://shopify.dev/docs/api/admin-graphql/latest/objects/order#field-Order.fields.currentTotalDutiesSet) to retrieve the current duties amount after adjustments.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalDutiesSet(): ?ShopifyMoneyBag
    {
        return $this->originalTotalDutiesSet;
    }

    
    /**
     * The total price of the order at the time of order creation, in shop and presentment currencies.
     * Use this to compare the original order value against the current total after edits, returns, or refunds.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalTotalPriceSet;
    }

    
    /**
     * The payment collection details for the order, including payment status, outstanding amounts, and collection information.
     * Use this to understand when and how payments should be collected, especially for orders with deferred or installment payment terms.
     *
     * @return ShopifyOrderPaymentCollectionDetails
     */
    public function getPaymentCollectionDetails(): ?ShopifyOrderPaymentCollectionDetails
    {
        return $this->paymentCollectionDetails;
    }

    
    /**
     * A list of the names of all payment gateways used for the order.
     * For example, "Shopify Payments" and "Cash on Delivery (COD)".
     *
     * @return string[]
     */
    public function getPaymentGatewayNames(): ?array
    {
        return $this->paymentGatewayNames;
    }

    
    /**
     * The payment terms associated with the order, such as net payment due dates or early payment discounts. Payment terms define when and how an order should be paid. Returns `null` if no specific payment terms were set for the order.
     *
     * @return ShopifyPaymentTerms
     */
    public function getPaymentTerms(): ?ShopifyPaymentTerms
    {
        return $this->paymentTerms;
    }

    
    /**
     * The phone number associated with the customer for this order.
     * Useful for contacting customers about shipping updates, delivery notifications, or order issues.
     * Returns `null` if no phone number was provided during checkout.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The fulfillment location that was assigned when the order was created.
     * Orders can have multiple fulfillment orders. These fulfillment orders can each be assigned to a different location which is responsible for fulfilling a subset of the items in an order. The `Order.physicalLocation` field will only point to one of these locations.
     * Use the [`FulfillmentOrder`](https://shopify.dev/api/admin-graphql/latest/objects/fulfillmentorder)
     * object for up to date fulfillment location information.
     *
     * @return ShopifyLocation
     */
    public function getPhysicalLocation(): ?ShopifyLocation
    {
        return $this->physicalLocation;
    }

    
    /**
     * The purchase order (PO) number that's associated with an order.
     * This is typically provided by business customers who require a PO number for their procurement.
     *
     * @return string
     */
    public function getPoNumber(): ?string
    {
        return $this->poNumber;
    }

    
    /**
     * The currency used by the customer when placing the order. For example, "USD", "EUR", or "CAD".
     * This may differ from the shop's base currency when serving international customers or using multi-currency pricing.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getPresentmentCurrencyCode(): ?string
    {
        return $this->presentmentCurrencyCode;
    }

    
    /**
     * The date and time in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when the order was processed.
     * This date and time might not match the date and time when the order was created.
     *
     * @return Carbon
     */
    public function getProcessedAt(): ?Carbon
    {
        return $this->processedAt;
    }

    
    /**
     * Whether the customer also purchased items from other stores in the network.
     *
     * @return bool
     */
    public function getProductNetwork(): ?bool
    {
        return $this->productNetwork;
    }

    
    /**
     * The sales channel that the order was created from, such as the [Online Store](https://shopify.dev/docs/apps/build/app-surfaces#online-store) or [Shopify POS](https://shopify.dev/docs/apps/build/app-surfaces#point-of-sale).
     *
     * @return ShopifyPublication
     */
    public function getPublication(): ?ShopifyPublication
    {
        return $this->publication;
    }

    
    /**
     * The business entity that placed the order, including company details and purchasing relationships.
     * Used for B2B transactions to track which company or organization is responsible for the purchase and payment terms.
     *
     * @return ShopifyCustomer|ShopifyPurchasingCompany
     */
    public function getPurchasingEntity(): ShopifyCustomer|ShopifyPurchasingCompany|null
    {
        return $this->purchasingEntity;
    }

    
    /**
     * The marketing referral code from the link that the customer clicked to visit the store.
     * Supports the following URL attributes: "ref", "source", or "r".
     * For example, if the URL is `{shop}.myshopify.com/products/slide?ref=j2tj1tn2`, then this value is `j2tj1tn2`.
     *
     * @return string
     */
    public function getReferralCode(): ?string
    {
        return $this->referralCode;
    }

    
    /**
     * A web domain or short description of the source that sent the customer to your online store. For example, "shopify.com" or "email".
     *
     * @return string
     */
    public function getReferrerDisplayText(): ?string
    {
        return $this->referrerDisplayText;
    }

    
    /**
     * The URL of the webpage where the customer clicked a link that sent them to your online store.
     *
     * @return string
     */
    public function getReferrerUrl(): mixed
    {
        return $this->referrerUrl;
    }

    
    /**
     * The difference between the suggested and actual refund amount of all refunds that have been applied to the order.
     * A positive value indicates a difference in the merchant's favor, and a negative value indicates a difference in the customer's favor.
     *
     * @return ShopifyMoneyBag
     */
    public function getRefundDiscrepancySet(): ?ShopifyMoneyBag
    {
        return $this->refundDiscrepancySet;
    }

    
    /**
     * Whether the order can be refunded based on its payment transactions.
     * Returns `false` for orders with no eligible payment transactions, such as fully refunded orders or orders with non-refundable payment methods.
     *
     * @return bool
     */
    public function getRefundable(): ?bool
    {
        return $this->refundable;
    }

    
    /**
     * A list of refunds that have been applied to the order.
     * Refunds represent money returned to customers for returned items, cancellations, or adjustments.
     *
     * @return ShopifyRefund[]
     */
    public function getRefunds(): ?array
    {
        return $this->refunds;
    }

    
    /**
     * The URL of the source that the order originated from, if found in the domain registry. Returns `null` if the source URL isn't in the domain registry.
     *
     * @return string
     */
    public function getRegisteredSourceUrl(): mixed
    {
        return $this->registeredSourceUrl;
    }

    
    /**
     * Whether the order requires physical shipping to the customer.
     * Returns `false` for digital-only orders (such as gift cards or downloadable products) and `true` for orders with physical products that need delivery.
     * Use this to determine shipping workflows and logistics requirements.
     *
     * @return bool
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }

    
    /**
     * Whether any line items on the order can be restocked into inventory.
     * Returns `false` for digital products, custom items, or items that can't be resold.
     *
     * @return bool
     */
    public function getRestockable(): ?bool
    {
        return $this->restockable;
    }

    
    /**
     * The physical location where a retail order is created or completed, except for draft POS orders completed using the "mark as paid" flow in the Shopify admin, which return `null`. Transactions associated with the order might have been processed at a different location.
     *
     * @return ShopifyLocation
     */
    public function getRetailLocation(): ?ShopifyLocation
    {
        return $this->retailLocation;
    }

    
    /**
     * The order's aggregated return status for display purposes.
     * Indicates the overall state of returns for the order, helping merchants track and manage the return process.
     *
     * @return string A ShopifyOrderReturnStatusEnumObject value
     */
    public function getReturnStatus(): ?string
    {
        return $this->returnStatus;
    }

    
    /**
     * The returns associated with the order.
     * Contains information about items that customers have requested to return, including return reasons, status, and refund details.
     * Use this to track and manage the return process for order items.
     *
     * @return ShopifyReturnConnection
     */
    public function getReturns(): ?ShopifyReturnConnection
    {
        return $this->returns;
    }

    
    /**
     * The risk assessment summary for the order.
     * Provides fraud analysis and risk scoring to help you identify potentially fraudulent orders.
     * Use this to make informed decisions about order fulfillment and payment processing.
     *
     * @return ShopifyOrderRiskSummary
     */
    public function getRisk(): ?ShopifyOrderRiskSummary
    {
        return $this->risk;
    }

    
    /**
     * The fraud risk level of the order.
     *
     * @return string A ShopifyOrderRiskLevelEnumObject value
     */
    public function getRiskLevel(): ?string
    {
        return $this->riskLevel;
    }

    
    /**
     * A list of risks associated with the order.
     *
     * @return ShopifyOrderRisk[]
     */
    public function getRisks(): ?array
    {
        return $this->risks;
    }

    
    /**
     * The shipping address where the order will be delivered.
     * Contains the customer's delivery location for fulfillment and shipping label generation.
     * Returns `null` for digital orders or orders that don't require shipping.
     *
     * @return ShopifyMailingAddress
     */
    public function getShippingAddress(): ?ShopifyMailingAddress
    {
        return $this->shippingAddress;
    }

    
    /**
     * A summary of all shipping costs on the order.
     * Aggregates shipping charges, discounts, and taxes to provide a single view of delivery costs.
     *
     * @return ShopifyShippingLine
     */
    public function getShippingLine(): ?ShopifyShippingLine
    {
        return $this->shippingLine;
    }

    
    /**
     * The shipping methods applied to the order.
     * Each shipping line represents a shipping option chosen during checkout, including the carrier, service level, and cost.
     * Use this to understand shipping charges and delivery options for the order.
     *
     * @return ShopifyShippingLineConnection
     */
    public function getShippingLines(): ?ShopifyShippingLineConnection
    {
        return $this->shippingLines;
    }

    
    /**
     * The Shopify Protect details for the order, including fraud protection status and coverage information.
     * Shopify Protect helps protect eligible orders against fraudulent chargebacks.
     * Returns `null` if Shopify Protect is disabled for the shop or the order isn't eligible for protection.
     * Learn more about [Shopify Protect](https://www.shopify.com/protect).
     *
     * @return ShopifyShopifyProtectOrderSummary
     */
    public function getShopifyProtect(): ?ShopifyShopifyProtectOrderSummary
    {
        return $this->shopifyProtect;
    }

    
    /**
     * A unique POS or third party order identifier.
     * For example, "1234-12-1000" or "111-98567-54". The [`receiptNumber`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-receiptNumber) field is derived from this value for POS orders.
     *
     * @return string
     */
    public function getSourceIdentifier(): ?string
    {
        return $this->sourceIdentifier;
    }

    
    /**
     * The name of the source associated with the order, such as "web", "mobile_app", or "pos". Use this field to identify the platform where the order was placed.
     *
     * @return string
     */
    public function getSourceName(): ?string
    {
        return $this->sourceName;
    }

    
    /**
     * The staff member who created or is responsible for the order.
     * Useful for tracking which team member handled phone orders, manual orders, or order modifications.
     * Returns `null` for orders created directly by customers through the online store.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * The URL where customers can check their order's current status, including tracking information and delivery updates.
     * Provides order tracking links in emails, apps, or customer communications.
     *
     * @return string
     */
    public function getStatusPageUrl(): mixed
    {
        return $this->statusPageUrl;
    }

    
    /**
     * The sum of quantities for all line items that contribute to the order's subtotal price.
     * This excludes quantities for items like tips, shipping costs, or gift cards that don't affect the subtotal.
     * Use this to quickly understand the total item count for pricing calculations.
     *
     * @return int
     */
    public function getSubtotalLineItemsQuantity(): ?int
    {
        return $this->subtotalLineItemsQuantity;
    }

    
    /**
     * The sum of the prices for all line items after discounts and before returns, in shop currency.
     * If `taxesIncluded` is `true`, then the subtotal also includes tax.
     *
     * @return string
     */
    public function getSubtotalPrice(): mixed
    {
        return $this->subtotalPrice;
    }

    
    /**
     * The sum of the prices for all line items after discounts and before returns, in shop and presentment currencies.
     * If `taxesIncluded` is `true`, then the subtotal also includes tax.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * A calculated refund suggestion for the order based on specified line items, shipping, and duties.
     * Use this to preview refund amounts, taxes, and processing fees before creating an actual refund.
     *
     * @return ShopifySuggestedRefund
     */
    public function getSuggestedRefund(): ?ShopifySuggestedRefund
    {
        return $this->suggestedRefund;
    }

    
    /**
     * A comma separated list of tags associated with the order. Updating `tags` overwrites
     * any existing tags that were previously added to the order. To add new tags without overwriting
     * existing tags, use the [tagsAdd](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd)
     * mutation.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    
    /**
     * Whether taxes are exempt on the order.
     * Returns `true` for orders where the customer or business has a valid tax exemption, such as non-profit organizations or tax-free purchases.
     * Use this to understand if tax calculations were skipped during checkout.
     *
     * @return bool
     */
    public function getTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    
    /**
     * A list of all tax lines applied to line items on the order, before returns.
     * Tax line prices represent the total price for all tax lines with the same `rate` and `title`.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }

    
    /**
     * Whether taxes are included in the subtotal price of the order.
     * When `true`, the subtotal and line item prices include tax amounts. When `false`, taxes are calculated and displayed separately.
     *
     * @return bool
     */
    public function getTaxesIncluded(): ?bool
    {
        return $this->taxesIncluded;
    }

    
    /**
     * Whether the order is a test.
     * Test orders are made using the Shopify Bogus Gateway or a payment provider with test mode enabled.
     * A test order can't be converted into a real order and vice versa.
     *
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    
    /**
     * The authorized amount that's uncaptured or undercaptured, in shop currency.
     * This amount isn't adjusted for returns.
     *
     * @return string
     */
    public function getTotalCapturable(): mixed
    {
        return $this->totalCapturable;
    }

    
    /**
     * The authorized amount that's uncaptured or undercaptured, in shop and presentment currencies.
     * This amount isn't adjusted for returns.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalCapturableSet(): ?ShopifyMoneyBag
    {
        return $this->totalCapturableSet;
    }

    
    /**
     * The total rounding adjustment applied to payments or refunds for an order involving cash payments. Applies to some countries where cash transactions are rounded to the nearest currency denomination.
     *
     * @return ShopifyCashRoundingAdjustment
     */
    public function getTotalCashRoundingAdjustment(): ?ShopifyCashRoundingAdjustment
    {
        return $this->totalCashRoundingAdjustment;
    }

    
    /**
     * The total amount discounted on the order before returns, in shop currency.
     * This includes both order and line level discounts.
     *
     * @return string
     */
    public function getTotalDiscounts(): mixed
    {
        return $this->totalDiscounts;
    }

    
    /**
     * The total amount discounted on the order before returns, in shop and presentment currencies.
     * This includes both order and line level discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountsSet(): ?ShopifyMoneyBag
    {
        return $this->totalDiscountsSet;
    }

    
    /**
     * The total amount not yet transacted for the order, in shop and presentment currencies.
     * A positive value indicates a difference in the merchant's favor (payment from customer to merchant) and a negative value indicates a difference in the customer's favor (refund from merchant to customer).
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalOutstandingSet(): ?ShopifyMoneyBag
    {
        return $this->totalOutstandingSet;
    }

    
    /**
     * The total price of the order, before returns, in shop currency.
     * This includes taxes and discounts.
     *
     * @return string
     */
    public function getTotalPrice(): mixed
    {
        return $this->totalPrice;
    }

    
    /**
     * The total price of the order, before returns, in shop and presentment currencies.
     * This includes taxes and discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalPriceSet;
    }

    
    /**
     * The total amount received from the customer before returns, in shop currency.
     *
     * @return string
     */
    public function getTotalReceived(): mixed
    {
        return $this->totalReceived;
    }

    
    /**
     * The total amount received from the customer before returns, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalReceivedSet(): ?ShopifyMoneyBag
    {
        return $this->totalReceivedSet;
    }

    
    /**
     * The total amount that was refunded, in shop currency.
     *
     * @return string
     */
    public function getTotalRefunded(): mixed
    {
        return $this->totalRefunded;
    }

    
    /**
     * The total amount that was refunded, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalRefundedSet(): ?ShopifyMoneyBag
    {
        return $this->totalRefundedSet;
    }

    
    /**
     * The total amount of shipping that was refunded, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalRefundedShippingSet(): ?ShopifyMoneyBag
    {
        return $this->totalRefundedShippingSet;
    }

    
    /**
     * The total shipping amount before discounts and returns, in shop currency.
     *
     * @return string
     */
    public function getTotalShippingPrice(): mixed
    {
        return $this->totalShippingPrice;
    }

    
    /**
     * The total shipping costs returned to the customer, in shop and presentment currencies. This includes fees and any related discounts that were refunded.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalShippingPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalShippingPriceSet;
    }

    
    /**
     * The total tax amount before returns, in shop currency.
     *
     * @return string
     */
    public function getTotalTax(): mixed
    {
        return $this->totalTax;
    }

    
    /**
     * The total tax amount before returns, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxSet(): ?ShopifyMoneyBag
    {
        return $this->totalTaxSet;
    }

    
    /**
     * The sum of all tip amounts for the order, in shop currency.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalTipReceived(): ?ShopifyMoneyV2
    {
        return $this->totalTipReceived;
    }

    
    /**
     * The sum of all tip amounts for the order, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTipReceivedSet(): ?ShopifyMoneyBag
    {
        return $this->totalTipReceivedSet;
    }

    
    /**
     * The total weight of the order before returns, in grams.
     *
     * @return string
     */
    public function getTotalWeight(): mixed
    {
        return $this->totalWeight;
    }

    
    /**
     * A list of transactions associated with the order.
     *
     * @return ShopifyOrderTransaction[]
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }

    
    /**
     * The number of transactions associated with the order.
     *
     * @return ShopifyCount
     */
    public function getTransactionsCount(): ?ShopifyCount
    {
        return $this->transactionsCount;
    }

    
    /**
     * Whether no payments have been made for the order.
     *
     * @return bool
     */
    public function getUnpaid(): ?bool
    {
        return $this->unpaid;
    }

    
    /**
     * The date and time in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601) when the order was last modified.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['additionalFees']) && $data['additionalFees'] !== null) {
                $instance->additionalFees = array_map(function($item) { return ShopifyAdditionalFee::fromArray($item); }, $data['additionalFees']);
            }
            if (isset($data['agreements']) && $data['agreements'] !== null) {
                $instance->agreements = ShopifySalesAgreementConnection::fromArray($data['agreements']);
            }
            if (isset($data['alerts']) && $data['alerts'] !== null) {
                $instance->alerts = array_map(function($item) { return ShopifyResourceAlert::fromArray($item); }, $data['alerts']);
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyOrderApp::fromArray($data['app']);
            }
            if (isset($data['attribution']) && $data['attribution'] !== null) {
                $instance->attribution = ShopifyOrderAttribution::fromArray($data['attribution']);
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyMailingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['billingAddressMatchesShippingAddress']) && $data['billingAddressMatchesShippingAddress'] !== null) {
                $instance->billingAddressMatchesShippingAddress = $data['billingAddressMatchesShippingAddress'];
            }
            if (isset($data['canMarkAsPaid']) && $data['canMarkAsPaid'] !== null) {
                $instance->canMarkAsPaid = $data['canMarkAsPaid'];
            }
            if (isset($data['canNotifyCustomer']) && $data['canNotifyCustomer'] !== null) {
                $instance->canNotifyCustomer = $data['canNotifyCustomer'];
            }
            if (isset($data['cancelReason']) && $data['cancelReason'] !== null) {
                $instance->cancelReason = $data['cancelReason'];
            }
            if (isset($data['cancellation']) && $data['cancellation'] !== null) {
                $instance->cancellation = ShopifyOrderCancellation::fromArray($data['cancellation']);
            }
            if (isset($data['cancelledAt']) && $data['cancelledAt'] !== null) {
                $instance->cancelledAt = new Carbon($data['cancelledAt']);
            }
            if (isset($data['capturable']) && $data['capturable'] !== null) {
                $instance->capturable = $data['capturable'];
            }
            if (isset($data['cartDiscountAmount']) && $data['cartDiscountAmount'] !== null) {
                $instance->cartDiscountAmount = $data['cartDiscountAmount'];
            }
            if (isset($data['cartDiscountAmountSet']) && $data['cartDiscountAmountSet'] !== null) {
                $instance->cartDiscountAmountSet = ShopifyMoneyBag::fromArray($data['cartDiscountAmountSet']);
            }
            if (isset($data['cartToken']) && $data['cartToken'] !== null) {
                $instance->cartToken = $data['cartToken'];
            }
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = ShopifyChannel::fromArray($data['channel']);
            }
            if (isset($data['channelInformation']) && $data['channelInformation'] !== null) {
                $instance->channelInformation = ShopifyChannelInformation::fromArray($data['channelInformation']);
            }
            if (isset($data['checkoutToken']) && $data['checkoutToken'] !== null) {
                $instance->checkoutToken = $data['checkoutToken'];
            }
            if (isset($data['clientIp']) && $data['clientIp'] !== null) {
                $instance->clientIp = $data['clientIp'];
            }
            if (isset($data['closed']) && $data['closed'] !== null) {
                $instance->closed = $data['closed'];
            }
            if (isset($data['closedAt']) && $data['closedAt'] !== null) {
                $instance->closedAt = new Carbon($data['closedAt']);
            }
            if (isset($data['confirmationNumber']) && $data['confirmationNumber'] !== null) {
                $instance->confirmationNumber = $data['confirmationNumber'];
            }
            if (isset($data['confirmed']) && $data['confirmed'] !== null) {
                $instance->confirmed = $data['confirmed'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['currentCartDiscountAmountSet']) && $data['currentCartDiscountAmountSet'] !== null) {
                $instance->currentCartDiscountAmountSet = ShopifyMoneyBag::fromArray($data['currentCartDiscountAmountSet']);
            }
            if (isset($data['currentShippingPriceSet']) && $data['currentShippingPriceSet'] !== null) {
                $instance->currentShippingPriceSet = ShopifyMoneyBag::fromArray($data['currentShippingPriceSet']);
            }
            if (isset($data['currentSubtotalLineItemsQuantity']) && $data['currentSubtotalLineItemsQuantity'] !== null) {
                $instance->currentSubtotalLineItemsQuantity = $data['currentSubtotalLineItemsQuantity'];
            }
            if (isset($data['currentSubtotalPriceSet']) && $data['currentSubtotalPriceSet'] !== null) {
                $instance->currentSubtotalPriceSet = ShopifyMoneyBag::fromArray($data['currentSubtotalPriceSet']);
            }
            if (isset($data['currentTaxLines']) && $data['currentTaxLines'] !== null) {
                $instance->currentTaxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['currentTaxLines']);
            }
            if (isset($data['currentTotalAdditionalFeesSet']) && $data['currentTotalAdditionalFeesSet'] !== null) {
                $instance->currentTotalAdditionalFeesSet = ShopifyMoneyBag::fromArray($data['currentTotalAdditionalFeesSet']);
            }
            if (isset($data['currentTotalDiscountsSet']) && $data['currentTotalDiscountsSet'] !== null) {
                $instance->currentTotalDiscountsSet = ShopifyMoneyBag::fromArray($data['currentTotalDiscountsSet']);
            }
            if (isset($data['currentTotalDutiesSet']) && $data['currentTotalDutiesSet'] !== null) {
                $instance->currentTotalDutiesSet = ShopifyMoneyBag::fromArray($data['currentTotalDutiesSet']);
            }
            if (isset($data['currentTotalPriceSet']) && $data['currentTotalPriceSet'] !== null) {
                $instance->currentTotalPriceSet = ShopifyMoneyBag::fromArray($data['currentTotalPriceSet']);
            }
            if (isset($data['currentTotalTaxSet']) && $data['currentTotalTaxSet'] !== null) {
                $instance->currentTotalTaxSet = ShopifyMoneyBag::fromArray($data['currentTotalTaxSet']);
            }
            if (isset($data['currentTotalWeight']) && $data['currentTotalWeight'] !== null) {
                $instance->currentTotalWeight = $data['currentTotalWeight'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['customerAcceptsMarketing']) && $data['customerAcceptsMarketing'] !== null) {
                $instance->customerAcceptsMarketing = $data['customerAcceptsMarketing'];
            }
            if (isset($data['customerJourney']) && $data['customerJourney'] !== null) {
                $instance->customerJourney = ShopifyCustomerJourney::fromArray($data['customerJourney']);
            }
            if (isset($data['customerJourneySummary']) && $data['customerJourneySummary'] !== null) {
                $instance->customerJourneySummary = ShopifyCustomerJourneySummary::fromArray($data['customerJourneySummary']);
            }
            if (isset($data['customerLocale']) && $data['customerLocale'] !== null) {
                $instance->customerLocale = $data['customerLocale'];
            }
            if (isset($data['discountApplications']) && $data['discountApplications'] !== null) {
                $instance->discountApplications = ShopifyDiscountApplicationConnection::fromArray($data['discountApplications']);
            }
            if (isset($data['discountCode']) && $data['discountCode'] !== null) {
                $instance->discountCode = $data['discountCode'];
            }
            if (isset($data['discountCodes']) && $data['discountCodes'] !== null) {
                $instance->discountCodes = $data['discountCodes'];
            }
            if (isset($data['displayAddress']) && $data['displayAddress'] !== null) {
                $instance->displayAddress = ShopifyMailingAddress::fromArray($data['displayAddress']);
            }
            if (isset($data['displayFinancialStatus']) && $data['displayFinancialStatus'] !== null) {
                $instance->displayFinancialStatus = $data['displayFinancialStatus'];
            }
            if (isset($data['displayFulfillmentStatus']) && $data['displayFulfillmentStatus'] !== null) {
                $instance->displayFulfillmentStatus = $data['displayFulfillmentStatus'];
            }
            if (isset($data['disputes']) && $data['disputes'] !== null) {
                $instance->disputes = array_map(function($item) { return ShopifyOrderDisputeSummary::fromArray($item); }, $data['disputes']);
            }
            if (isset($data['dutiesIncluded']) && $data['dutiesIncluded'] !== null) {
                $instance->dutiesIncluded = $data['dutiesIncluded'];
            }
            if (isset($data['edited']) && $data['edited'] !== null) {
                $instance->edited = $data['edited'];
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['estimatedTaxes']) && $data['estimatedTaxes'] !== null) {
                $instance->estimatedTaxes = $data['estimatedTaxes'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['exchangeV2s']) && $data['exchangeV2s'] !== null) {
                $instance->exchangeV2s = ShopifyExchangeV2Connection::fromArray($data['exchangeV2s']);
            }
            if (isset($data['fulfillable']) && $data['fulfillable'] !== null) {
                $instance->fulfillable = $data['fulfillable'];
            }
            if (isset($data['fulfillmentOrders']) && $data['fulfillmentOrders'] !== null) {
                $instance->fulfillmentOrders = ShopifyFulfillmentOrderConnection::fromArray($data['fulfillmentOrders']);
            }
            if (isset($data['fulfillments']) && $data['fulfillments'] !== null) {
                $instance->fulfillments = array_map(function($item) { return ShopifyFulfillment::fromArray($item); }, $data['fulfillments']);
            }
            if (isset($data['fulfillmentsCount']) && $data['fulfillmentsCount'] !== null) {
                $instance->fulfillmentsCount = ShopifyCount::fromArray($data['fulfillmentsCount']);
            }
            if (isset($data['fullyPaid']) && $data['fullyPaid'] !== null) {
                $instance->fullyPaid = $data['fullyPaid'];
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['landingPageDisplayText']) && $data['landingPageDisplayText'] !== null) {
                $instance->landingPageDisplayText = $data['landingPageDisplayText'];
            }
            if (isset($data['landingPageUrl']) && $data['landingPageUrl'] !== null) {
                $instance->landingPageUrl = $data['landingPageUrl'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['localizationExtensions']) && $data['localizationExtensions'] !== null) {
                $instance->localizationExtensions = ShopifyLocalizationExtensionConnection::fromArray($data['localizationExtensions']);
            }
            if (isset($data['localizedFields']) && $data['localizedFields'] !== null) {
                $instance->localizedFields = ShopifyLocalizedFieldConnection::fromArray($data['localizedFields']);
            }
            if (isset($data['merchantBusinessEntity']) && $data['merchantBusinessEntity'] !== null) {
                $instance->merchantBusinessEntity = ShopifyBusinessEntity::fromArray($data['merchantBusinessEntity']);
            }
            if (isset($data['merchantEditable']) && $data['merchantEditable'] !== null) {
                $instance->merchantEditable = $data['merchantEditable'];
            }
            if (isset($data['merchantEditableErrors']) && $data['merchantEditableErrors'] !== null) {
                $instance->merchantEditableErrors = $data['merchantEditableErrors'];
            }
            if (isset($data['merchantOfRecordApp']) && $data['merchantOfRecordApp'] !== null) {
                $instance->merchantOfRecordApp = ShopifyOrderApp::fromArray($data['merchantOfRecordApp']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['netPayment']) && $data['netPayment'] !== null) {
                $instance->netPayment = $data['netPayment'];
            }
            if (isset($data['netPaymentSet']) && $data['netPaymentSet'] !== null) {
                $instance->netPaymentSet = ShopifyMoneyBag::fromArray($data['netPaymentSet']);
            }
            if (isset($data['nonFulfillableLineItems']) && $data['nonFulfillableLineItems'] !== null) {
                $instance->nonFulfillableLineItems = ShopifyLineItemConnection::fromArray($data['nonFulfillableLineItems']);
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['number']) && $data['number'] !== null) {
                $instance->number = $data['number'];
            }
            if (isset($data['originalTotalAdditionalFeesSet']) && $data['originalTotalAdditionalFeesSet'] !== null) {
                $instance->originalTotalAdditionalFeesSet = ShopifyMoneyBag::fromArray($data['originalTotalAdditionalFeesSet']);
            }
            if (isset($data['originalTotalDutiesSet']) && $data['originalTotalDutiesSet'] !== null) {
                $instance->originalTotalDutiesSet = ShopifyMoneyBag::fromArray($data['originalTotalDutiesSet']);
            }
            if (isset($data['originalTotalPriceSet']) && $data['originalTotalPriceSet'] !== null) {
                $instance->originalTotalPriceSet = ShopifyMoneyBag::fromArray($data['originalTotalPriceSet']);
            }
            if (isset($data['paymentCollectionDetails']) && $data['paymentCollectionDetails'] !== null) {
                $instance->paymentCollectionDetails = ShopifyOrderPaymentCollectionDetails::fromArray($data['paymentCollectionDetails']);
            }
            if (isset($data['paymentGatewayNames']) && $data['paymentGatewayNames'] !== null) {
                $instance->paymentGatewayNames = $data['paymentGatewayNames'];
            }
            if (isset($data['paymentTerms']) && $data['paymentTerms'] !== null) {
                $instance->paymentTerms = ShopifyPaymentTerms::fromArray($data['paymentTerms']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['physicalLocation']) && $data['physicalLocation'] !== null) {
                $instance->physicalLocation = ShopifyLocation::fromArray($data['physicalLocation']);
            }
            if (isset($data['poNumber']) && $data['poNumber'] !== null) {
                $instance->poNumber = $data['poNumber'];
            }
            if (isset($data['presentmentCurrencyCode']) && $data['presentmentCurrencyCode'] !== null) {
                $instance->presentmentCurrencyCode = $data['presentmentCurrencyCode'];
            }
            if (isset($data['processedAt']) && $data['processedAt'] !== null) {
                $instance->processedAt = new Carbon($data['processedAt']);
            }
            if (isset($data['productNetwork']) && $data['productNetwork'] !== null) {
                $instance->productNetwork = $data['productNetwork'];
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = ShopifyPublication::fromArray($data['publication']);
            }
            if (isset($data['purchasingEntity']) && $data['purchasingEntity'] !== null) {
                $instance->purchasingEntity = ShopifyPurchasingEntityHydrator::fromArray($data['purchasingEntity']);
            }
            if (isset($data['referralCode']) && $data['referralCode'] !== null) {
                $instance->referralCode = $data['referralCode'];
            }
            if (isset($data['referrerDisplayText']) && $data['referrerDisplayText'] !== null) {
                $instance->referrerDisplayText = $data['referrerDisplayText'];
            }
            if (isset($data['referrerUrl']) && $data['referrerUrl'] !== null) {
                $instance->referrerUrl = $data['referrerUrl'];
            }
            if (isset($data['refundDiscrepancySet']) && $data['refundDiscrepancySet'] !== null) {
                $instance->refundDiscrepancySet = ShopifyMoneyBag::fromArray($data['refundDiscrepancySet']);
            }
            if (isset($data['refundable']) && $data['refundable'] !== null) {
                $instance->refundable = $data['refundable'];
            }
            if (isset($data['refunds']) && $data['refunds'] !== null) {
                $instance->refunds = array_map(function($item) { return ShopifyRefund::fromArray($item); }, $data['refunds']);
            }
            if (isset($data['registeredSourceUrl']) && $data['registeredSourceUrl'] !== null) {
                $instance->registeredSourceUrl = $data['registeredSourceUrl'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['restockable']) && $data['restockable'] !== null) {
                $instance->restockable = $data['restockable'];
            }
            if (isset($data['retailLocation']) && $data['retailLocation'] !== null) {
                $instance->retailLocation = ShopifyLocation::fromArray($data['retailLocation']);
            }
            if (isset($data['returnStatus']) && $data['returnStatus'] !== null) {
                $instance->returnStatus = $data['returnStatus'];
            }
            if (isset($data['returns']) && $data['returns'] !== null) {
                $instance->returns = ShopifyReturnConnection::fromArray($data['returns']);
            }
            if (isset($data['risk']) && $data['risk'] !== null) {
                $instance->risk = ShopifyOrderRiskSummary::fromArray($data['risk']);
            }
            if (isset($data['riskLevel']) && $data['riskLevel'] !== null) {
                $instance->riskLevel = $data['riskLevel'];
            }
            if (isset($data['risks']) && $data['risks'] !== null) {
                $instance->risks = array_map(function($item) { return ShopifyOrderRisk::fromArray($item); }, $data['risks']);
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = ShopifyMailingAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShopifyShippingLine::fromArray($data['shippingLine']);
            }
            if (isset($data['shippingLines']) && $data['shippingLines'] !== null) {
                $instance->shippingLines = ShopifyShippingLineConnection::fromArray($data['shippingLines']);
            }
            if (isset($data['shopifyProtect']) && $data['shopifyProtect'] !== null) {
                $instance->shopifyProtect = ShopifyShopifyProtectOrderSummary::fromArray($data['shopifyProtect']);
            }
            if (isset($data['sourceIdentifier']) && $data['sourceIdentifier'] !== null) {
                $instance->sourceIdentifier = $data['sourceIdentifier'];
            }
            if (isset($data['sourceName']) && $data['sourceName'] !== null) {
                $instance->sourceName = $data['sourceName'];
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['statusPageUrl']) && $data['statusPageUrl'] !== null) {
                $instance->statusPageUrl = $data['statusPageUrl'];
            }
            if (isset($data['subtotalLineItemsQuantity']) && $data['subtotalLineItemsQuantity'] !== null) {
                $instance->subtotalLineItemsQuantity = $data['subtotalLineItemsQuantity'];
            }
            if (isset($data['subtotalPrice']) && $data['subtotalPrice'] !== null) {
                $instance->subtotalPrice = $data['subtotalPrice'];
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = ShopifyMoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['suggestedRefund']) && $data['suggestedRefund'] !== null) {
                $instance->suggestedRefund = ShopifySuggestedRefund::fromArray($data['suggestedRefund']);
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['taxExempt']) && $data['taxExempt'] !== null) {
                $instance->taxExempt = $data['taxExempt'];
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['taxesIncluded']) && $data['taxesIncluded'] !== null) {
                $instance->taxesIncluded = $data['taxesIncluded'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
            }
            if (isset($data['totalCapturable']) && $data['totalCapturable'] !== null) {
                $instance->totalCapturable = $data['totalCapturable'];
            }
            if (isset($data['totalCapturableSet']) && $data['totalCapturableSet'] !== null) {
                $instance->totalCapturableSet = ShopifyMoneyBag::fromArray($data['totalCapturableSet']);
            }
            if (isset($data['totalCashRoundingAdjustment']) && $data['totalCashRoundingAdjustment'] !== null) {
                $instance->totalCashRoundingAdjustment = ShopifyCashRoundingAdjustment::fromArray($data['totalCashRoundingAdjustment']);
            }
            if (isset($data['totalDiscounts']) && $data['totalDiscounts'] !== null) {
                $instance->totalDiscounts = $data['totalDiscounts'];
            }
            if (isset($data['totalDiscountsSet']) && $data['totalDiscountsSet'] !== null) {
                $instance->totalDiscountsSet = ShopifyMoneyBag::fromArray($data['totalDiscountsSet']);
            }
            if (isset($data['totalOutstandingSet']) && $data['totalOutstandingSet'] !== null) {
                $instance->totalOutstandingSet = ShopifyMoneyBag::fromArray($data['totalOutstandingSet']);
            }
            if (isset($data['totalPrice']) && $data['totalPrice'] !== null) {
                $instance->totalPrice = $data['totalPrice'];
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = ShopifyMoneyBag::fromArray($data['totalPriceSet']);
            }
            if (isset($data['totalReceived']) && $data['totalReceived'] !== null) {
                $instance->totalReceived = $data['totalReceived'];
            }
            if (isset($data['totalReceivedSet']) && $data['totalReceivedSet'] !== null) {
                $instance->totalReceivedSet = ShopifyMoneyBag::fromArray($data['totalReceivedSet']);
            }
            if (isset($data['totalRefunded']) && $data['totalRefunded'] !== null) {
                $instance->totalRefunded = $data['totalRefunded'];
            }
            if (isset($data['totalRefundedSet']) && $data['totalRefundedSet'] !== null) {
                $instance->totalRefundedSet = ShopifyMoneyBag::fromArray($data['totalRefundedSet']);
            }
            if (isset($data['totalRefundedShippingSet']) && $data['totalRefundedShippingSet'] !== null) {
                $instance->totalRefundedShippingSet = ShopifyMoneyBag::fromArray($data['totalRefundedShippingSet']);
            }
            if (isset($data['totalShippingPrice']) && $data['totalShippingPrice'] !== null) {
                $instance->totalShippingPrice = $data['totalShippingPrice'];
            }
            if (isset($data['totalShippingPriceSet']) && $data['totalShippingPriceSet'] !== null) {
                $instance->totalShippingPriceSet = ShopifyMoneyBag::fromArray($data['totalShippingPriceSet']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = $data['totalTax'];
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = ShopifyMoneyBag::fromArray($data['totalTaxSet']);
            }
            if (isset($data['totalTipReceived']) && $data['totalTipReceived'] !== null) {
                $instance->totalTipReceived = ShopifyMoneyV2::fromArray($data['totalTipReceived']);
            }
            if (isset($data['totalTipReceivedSet']) && $data['totalTipReceivedSet'] !== null) {
                $instance->totalTipReceivedSet = ShopifyMoneyBag::fromArray($data['totalTipReceivedSet']);
            }
            if (isset($data['totalWeight']) && $data['totalWeight'] !== null) {
                $instance->totalWeight = $data['totalWeight'];
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = array_map(function($item) { return ShopifyOrderTransaction::fromArray($item); }, $data['transactions']);
            }
            if (isset($data['transactionsCount']) && $data['transactionsCount'] !== null) {
                $instance->transactionsCount = ShopifyCount::fromArray($data['transactionsCount']);
            }
            if (isset($data['unpaid']) && $data['unpaid'] !== null) {
                $instance->unpaid = $data['unpaid'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->additionalFees !== null) {
                $data['additionalFees'] = array_map(function($item) { return $item->asArray(); }, $this->additionalFees);
            }
            if ($this->agreements !== null) {
                $data['agreements'] = $this->agreements->asArray();
            }
            if ($this->alerts !== null) {
                $data['alerts'] = array_map(function($item) { return $item->asArray(); }, $this->alerts);
            }
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->attribution !== null) {
                $data['attribution'] = $this->attribution->asArray();
            }
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->billingAddressMatchesShippingAddress !== null) {
                $data['billingAddressMatchesShippingAddress'] = $this->billingAddressMatchesShippingAddress;
            }
            if ($this->canMarkAsPaid !== null) {
                $data['canMarkAsPaid'] = $this->canMarkAsPaid;
            }
            if ($this->canNotifyCustomer !== null) {
                $data['canNotifyCustomer'] = $this->canNotifyCustomer;
            }
            if ($this->cancelReason !== null) {
                $data['cancelReason'] = $this->cancelReason;
            }
            if ($this->cancellation !== null) {
                $data['cancellation'] = $this->cancellation->asArray();
            }
            if ($this->cancelledAt !== null) {
                $data['cancelledAt'] = $this->cancelledAt->toIso8601String();
            }
            if ($this->capturable !== null) {
                $data['capturable'] = $this->capturable;
            }
            if ($this->cartDiscountAmount !== null) {
                $data['cartDiscountAmount'] = $this->cartDiscountAmount;
            }
            if ($this->cartDiscountAmountSet !== null) {
                $data['cartDiscountAmountSet'] = $this->cartDiscountAmountSet->asArray();
            }
            if ($this->cartToken !== null) {
                $data['cartToken'] = $this->cartToken;
            }
            if ($this->channel !== null) {
                $data['channel'] = $this->channel->asArray();
            }
            if ($this->channelInformation !== null) {
                $data['channelInformation'] = $this->channelInformation->asArray();
            }
            if ($this->checkoutToken !== null) {
                $data['checkoutToken'] = $this->checkoutToken;
            }
            if ($this->clientIp !== null) {
                $data['clientIp'] = $this->clientIp;
            }
            if ($this->closed !== null) {
                $data['closed'] = $this->closed;
            }
            if ($this->closedAt !== null) {
                $data['closedAt'] = $this->closedAt->toIso8601String();
            }
            if ($this->confirmationNumber !== null) {
                $data['confirmationNumber'] = $this->confirmationNumber;
            }
            if ($this->confirmed !== null) {
                $data['confirmed'] = $this->confirmed;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->currentCartDiscountAmountSet !== null) {
                $data['currentCartDiscountAmountSet'] = $this->currentCartDiscountAmountSet->asArray();
            }
            if ($this->currentShippingPriceSet !== null) {
                $data['currentShippingPriceSet'] = $this->currentShippingPriceSet->asArray();
            }
            if ($this->currentSubtotalLineItemsQuantity !== null) {
                $data['currentSubtotalLineItemsQuantity'] = $this->currentSubtotalLineItemsQuantity;
            }
            if ($this->currentSubtotalPriceSet !== null) {
                $data['currentSubtotalPriceSet'] = $this->currentSubtotalPriceSet->asArray();
            }
            if ($this->currentTaxLines !== null) {
                $data['currentTaxLines'] = array_map(function($item) { return $item->asArray(); }, $this->currentTaxLines);
            }
            if ($this->currentTotalAdditionalFeesSet !== null) {
                $data['currentTotalAdditionalFeesSet'] = $this->currentTotalAdditionalFeesSet->asArray();
            }
            if ($this->currentTotalDiscountsSet !== null) {
                $data['currentTotalDiscountsSet'] = $this->currentTotalDiscountsSet->asArray();
            }
            if ($this->currentTotalDutiesSet !== null) {
                $data['currentTotalDutiesSet'] = $this->currentTotalDutiesSet->asArray();
            }
            if ($this->currentTotalPriceSet !== null) {
                $data['currentTotalPriceSet'] = $this->currentTotalPriceSet->asArray();
            }
            if ($this->currentTotalTaxSet !== null) {
                $data['currentTotalTaxSet'] = $this->currentTotalTaxSet->asArray();
            }
            if ($this->currentTotalWeight !== null) {
                $data['currentTotalWeight'] = $this->currentTotalWeight;
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->customerAcceptsMarketing !== null) {
                $data['customerAcceptsMarketing'] = $this->customerAcceptsMarketing;
            }
            if ($this->customerJourney !== null) {
                $data['customerJourney'] = $this->customerJourney->asArray();
            }
            if ($this->customerJourneySummary !== null) {
                $data['customerJourneySummary'] = $this->customerJourneySummary->asArray();
            }
            if ($this->customerLocale !== null) {
                $data['customerLocale'] = $this->customerLocale;
            }
            if ($this->discountApplications !== null) {
                $data['discountApplications'] = $this->discountApplications->asArray();
            }
            if ($this->discountCode !== null) {
                $data['discountCode'] = $this->discountCode;
            }
            if ($this->discountCodes !== null) {
                $data['discountCodes'] = $this->discountCodes;
            }
            if ($this->displayAddress !== null) {
                $data['displayAddress'] = $this->displayAddress->asArray();
            }
            if ($this->displayFinancialStatus !== null) {
                $data['displayFinancialStatus'] = $this->displayFinancialStatus;
            }
            if ($this->displayFulfillmentStatus !== null) {
                $data['displayFulfillmentStatus'] = $this->displayFulfillmentStatus;
            }
            if ($this->disputes !== null) {
                $data['disputes'] = array_map(function($item) { return $item->asArray(); }, $this->disputes);
            }
            if ($this->dutiesIncluded !== null) {
                $data['dutiesIncluded'] = $this->dutiesIncluded;
            }
            if ($this->edited !== null) {
                $data['edited'] = $this->edited;
            }
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->estimatedTaxes !== null) {
                $data['estimatedTaxes'] = $this->estimatedTaxes;
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->exchangeV2s !== null) {
                $data['exchangeV2s'] = $this->exchangeV2s->asArray();
            }
            if ($this->fulfillable !== null) {
                $data['fulfillable'] = $this->fulfillable;
            }
            if ($this->fulfillmentOrders !== null) {
                $data['fulfillmentOrders'] = $this->fulfillmentOrders->asArray();
            }
            if ($this->fulfillments !== null) {
                $data['fulfillments'] = array_map(function($item) { return $item->asArray(); }, $this->fulfillments);
            }
            if ($this->fulfillmentsCount !== null) {
                $data['fulfillmentsCount'] = $this->fulfillmentsCount->asArray();
            }
            if ($this->fullyPaid !== null) {
                $data['fullyPaid'] = $this->fullyPaid;
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->landingPageDisplayText !== null) {
                $data['landingPageDisplayText'] = $this->landingPageDisplayText;
            }
            if ($this->landingPageUrl !== null) {
                $data['landingPageUrl'] = $this->landingPageUrl;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->localizationExtensions !== null) {
                $data['localizationExtensions'] = $this->localizationExtensions->asArray();
            }
            if ($this->localizedFields !== null) {
                $data['localizedFields'] = $this->localizedFields->asArray();
            }
            if ($this->merchantBusinessEntity !== null) {
                $data['merchantBusinessEntity'] = $this->merchantBusinessEntity->asArray();
            }
            if ($this->merchantEditable !== null) {
                $data['merchantEditable'] = $this->merchantEditable;
            }
            if ($this->merchantEditableErrors !== null) {
                $data['merchantEditableErrors'] = $this->merchantEditableErrors;
            }
            if ($this->merchantOfRecordApp !== null) {
                $data['merchantOfRecordApp'] = $this->merchantOfRecordApp->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->netPayment !== null) {
                $data['netPayment'] = $this->netPayment;
            }
            if ($this->netPaymentSet !== null) {
                $data['netPaymentSet'] = $this->netPaymentSet->asArray();
            }
            if ($this->nonFulfillableLineItems !== null) {
                $data['nonFulfillableLineItems'] = $this->nonFulfillableLineItems->asArray();
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->number !== null) {
                $data['number'] = $this->number;
            }
            if ($this->originalTotalAdditionalFeesSet !== null) {
                $data['originalTotalAdditionalFeesSet'] = $this->originalTotalAdditionalFeesSet->asArray();
            }
            if ($this->originalTotalDutiesSet !== null) {
                $data['originalTotalDutiesSet'] = $this->originalTotalDutiesSet->asArray();
            }
            if ($this->originalTotalPriceSet !== null) {
                $data['originalTotalPriceSet'] = $this->originalTotalPriceSet->asArray();
            }
            if ($this->paymentCollectionDetails !== null) {
                $data['paymentCollectionDetails'] = $this->paymentCollectionDetails->asArray();
            }
            if ($this->paymentGatewayNames !== null) {
                $data['paymentGatewayNames'] = $this->paymentGatewayNames;
            }
            if ($this->paymentTerms !== null) {
                $data['paymentTerms'] = $this->paymentTerms->asArray();
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->physicalLocation !== null) {
                $data['physicalLocation'] = $this->physicalLocation->asArray();
            }
            if ($this->poNumber !== null) {
                $data['poNumber'] = $this->poNumber;
            }
            if ($this->presentmentCurrencyCode !== null) {
                $data['presentmentCurrencyCode'] = $this->presentmentCurrencyCode;
            }
            if ($this->processedAt !== null) {
                $data['processedAt'] = $this->processedAt->toIso8601String();
            }
            if ($this->productNetwork !== null) {
                $data['productNetwork'] = $this->productNetwork;
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->purchasingEntity !== null) {
                $data['purchasingEntity'] = ShopifyPurchasingEntityHydrator::toArray($this->purchasingEntity);
            }
            if ($this->referralCode !== null) {
                $data['referralCode'] = $this->referralCode;
            }
            if ($this->referrerDisplayText !== null) {
                $data['referrerDisplayText'] = $this->referrerDisplayText;
            }
            if ($this->referrerUrl !== null) {
                $data['referrerUrl'] = $this->referrerUrl;
            }
            if ($this->refundDiscrepancySet !== null) {
                $data['refundDiscrepancySet'] = $this->refundDiscrepancySet->asArray();
            }
            if ($this->refundable !== null) {
                $data['refundable'] = $this->refundable;
            }
            if ($this->refunds !== null) {
                $data['refunds'] = array_map(function($item) { return $item->asArray(); }, $this->refunds);
            }
            if ($this->registeredSourceUrl !== null) {
                $data['registeredSourceUrl'] = $this->registeredSourceUrl;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->restockable !== null) {
                $data['restockable'] = $this->restockable;
            }
            if ($this->retailLocation !== null) {
                $data['retailLocation'] = $this->retailLocation->asArray();
            }
            if ($this->returnStatus !== null) {
                $data['returnStatus'] = $this->returnStatus;
            }
            if ($this->returns !== null) {
                $data['returns'] = $this->returns->asArray();
            }
            if ($this->risk !== null) {
                $data['risk'] = $this->risk->asArray();
            }
            if ($this->riskLevel !== null) {
                $data['riskLevel'] = $this->riskLevel;
            }
            if ($this->risks !== null) {
                $data['risks'] = array_map(function($item) { return $item->asArray(); }, $this->risks);
            }
            if ($this->shippingAddress !== null) {
                $data['shippingAddress'] = $this->shippingAddress->asArray();
            }
            if ($this->shippingLine !== null) {
                $data['shippingLine'] = $this->shippingLine->asArray();
            }
            if ($this->shippingLines !== null) {
                $data['shippingLines'] = $this->shippingLines->asArray();
            }
            if ($this->shopifyProtect !== null) {
                $data['shopifyProtect'] = $this->shopifyProtect->asArray();
            }
            if ($this->sourceIdentifier !== null) {
                $data['sourceIdentifier'] = $this->sourceIdentifier;
            }
            if ($this->sourceName !== null) {
                $data['sourceName'] = $this->sourceName;
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->statusPageUrl !== null) {
                $data['statusPageUrl'] = $this->statusPageUrl;
            }
            if ($this->subtotalLineItemsQuantity !== null) {
                $data['subtotalLineItemsQuantity'] = $this->subtotalLineItemsQuantity;
            }
            if ($this->subtotalPrice !== null) {
                $data['subtotalPrice'] = $this->subtotalPrice;
            }
            if ($this->subtotalPriceSet !== null) {
                $data['subtotalPriceSet'] = $this->subtotalPriceSet->asArray();
            }
            if ($this->suggestedRefund !== null) {
                $data['suggestedRefund'] = $this->suggestedRefund->asArray();
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            if ($this->taxExempt !== null) {
                $data['taxExempt'] = $this->taxExempt;
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->taxesIncluded !== null) {
                $data['taxesIncluded'] = $this->taxesIncluded;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->totalCapturable !== null) {
                $data['totalCapturable'] = $this->totalCapturable;
            }
            if ($this->totalCapturableSet !== null) {
                $data['totalCapturableSet'] = $this->totalCapturableSet->asArray();
            }
            if ($this->totalCashRoundingAdjustment !== null) {
                $data['totalCashRoundingAdjustment'] = $this->totalCashRoundingAdjustment->asArray();
            }
            if ($this->totalDiscounts !== null) {
                $data['totalDiscounts'] = $this->totalDiscounts;
            }
            if ($this->totalDiscountsSet !== null) {
                $data['totalDiscountsSet'] = $this->totalDiscountsSet->asArray();
            }
            if ($this->totalOutstandingSet !== null) {
                $data['totalOutstandingSet'] = $this->totalOutstandingSet->asArray();
            }
            if ($this->totalPrice !== null) {
                $data['totalPrice'] = $this->totalPrice;
            }
            if ($this->totalPriceSet !== null) {
                $data['totalPriceSet'] = $this->totalPriceSet->asArray();
            }
            if ($this->totalReceived !== null) {
                $data['totalReceived'] = $this->totalReceived;
            }
            if ($this->totalReceivedSet !== null) {
                $data['totalReceivedSet'] = $this->totalReceivedSet->asArray();
            }
            if ($this->totalRefunded !== null) {
                $data['totalRefunded'] = $this->totalRefunded;
            }
            if ($this->totalRefundedSet !== null) {
                $data['totalRefundedSet'] = $this->totalRefundedSet->asArray();
            }
            if ($this->totalRefundedShippingSet !== null) {
                $data['totalRefundedShippingSet'] = $this->totalRefundedShippingSet->asArray();
            }
            if ($this->totalShippingPrice !== null) {
                $data['totalShippingPrice'] = $this->totalShippingPrice;
            }
            if ($this->totalShippingPriceSet !== null) {
                $data['totalShippingPriceSet'] = $this->totalShippingPriceSet->asArray();
            }
            if ($this->totalTax !== null) {
                $data['totalTax'] = $this->totalTax;
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            if ($this->totalTipReceived !== null) {
                $data['totalTipReceived'] = $this->totalTipReceived->asArray();
            }
            if ($this->totalTipReceivedSet !== null) {
                $data['totalTipReceivedSet'] = $this->totalTipReceivedSet->asArray();
            }
            if ($this->totalWeight !== null) {
                $data['totalWeight'] = $this->totalWeight;
            }
            if ($this->transactions !== null) {
                $data['transactions'] = array_map(function($item) { return $item->asArray(); }, $this->transactions);
            }
            if ($this->transactionsCount !== null) {
                $data['transactionsCount'] = $this->transactionsCount->asArray();
            }
            if ($this->unpaid !== null) {
                $data['unpaid'] = $this->unpaid;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
