<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating an order.
 */
class ShopifyOrderCreateOrderInputInputObject extends InputObject
{
    protected $billingAddress;
    protected $buyerAcceptsMarketing;
    protected $closedAt;
    protected $companyLocationId;
    protected $currency;
    protected $customAttributes;
    protected $customer;
    protected $discountCode;
    protected $email;
    protected $financialStatus;
    protected $fulfillment;
    protected $fulfillmentStatus;
    protected $lineItems;
    protected $metafields;
    protected $name;
    protected $note;
    protected $phone;
    protected $poNumber;
    protected $presentmentCurrency;
    protected $processedAt;
    protected $referringSite;
    protected $shippingAddress;
    protected $shippingLines;
    protected $sourceIdentifier;
    protected $sourceName;
    protected $sourceUrl;
    protected $tags;
    protected $taxesIncluded;
    protected $taxLines;
    protected $test;
    protected $transactions;
    protected $userId;

    /**
     * The mailing address associated with the payment method. This address is an optional field that won't be
     *                available on orders that don't require a payment method.
     *
     *               > Note:
     *               > If a customer is provided, this field or `shipping_address` (which has precedence) will be set as the
     *               > customer's default address. Additionally, if the provided customer is new or hasn't created an order yet
     *               > then their name will be set to the first/last name from this address (if provided).
     */
    public function setBillingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->billingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * Whether the customer consented to receive email updates from the shop.
     */
    public function setBuyerAcceptsMarketing($buyerAcceptsMarketing): static
    {
        $this->buyerAcceptsMarketing = $buyerAcceptsMarketing;

        return $this;
    }

    /**
     * The date and time ([ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format) when the order was closed. Returns null if the order isn't closed.
     */
    public function setClosedAt($closedAt): static
    {
        $this->closedAt = $closedAt;

        return $this;
    }

    /**
     * The ID of the purchasing company's location for the order.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The shop-facing currency for the order. If not specified, then the shop's default currency is used.
     */
    public function setCurrency($shopifyCurrencyCode): static
    {
        $this->currency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * A list of extra information that's added to the order. Appears in the **Additional details** section of an order details page.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The customer to associate to the order.
     */
    public function setCustomer(ShopifyOrderCreateCustomerInputInputObject $shopifyOrderCreateCustomerInputInputObject): static
    {
        $this->customer = $shopifyOrderCreateCustomerInputInputObject;

        return $this;
    }

    /**
     * A discount code applied to the order.
     */
    public function setDiscountCode(ShopifyOrderCreateDiscountCodeInputInputObject $shopifyOrderCreateDiscountCodeInputInputObject): static
    {
        $this->discountCode = $shopifyOrderCreateDiscountCodeInputInputObject;

        return $this;
    }

    /**
     * A new customer email address for the order.
     *
     *               > Note:
     *               > If a customer is provided, and no email is provided, the customer's email will be set to this field.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The financial status of the order. If not specified, then this will be derived through the given transactions. Note that it's possible to specify a status that doesn't match the given transactions and it will persist, but if an operation later occurs on the order, the status may then be recalculated to match the current state of transactions.
     */
    public function setFinancialStatus($shopifyOrderCreateFinancialStatus): static
    {
        $this->financialStatus = new RawObject($shopifyOrderCreateFinancialStatus);

        return $this;
    }

    /**
     * The fulfillment to create for the order. This will apply to all line items.
     */
    public function setFulfillment(ShopifyOrderCreateFulfillmentInputInputObject $shopifyOrderCreateFulfillmentInputInputObject): static
    {
        $this->fulfillment = $shopifyOrderCreateFulfillmentInputInputObject;

        return $this;
    }

    /**
     * The fulfillment status of the order. Will default to `unfulfilled` if not included.
     */
    public function setFulfillmentStatus($shopifyOrderCreateFulfillmentStatus): static
    {
        $this->fulfillmentStatus = new RawObject($shopifyOrderCreateFulfillmentStatus);

        return $this;
    }

    /**
     * The line items to create for the order.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * A list of metafields to add to the order.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * The order name, generated by combining the `order_number` property with the order prefix and suffix that are set in the merchant's [general settings](https://www.shopify.com/admin/settings/general). This is different from the `id` property, which is the ID of the order used by the API. This field can also be set by the API to be any string value.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The new contents for the note associated with the order.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * A new customer phone number for the order.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The purchase order number associated to this order.
     */
    public function setPoNumber($poNumber): static
    {
        $this->poNumber = $poNumber;

        return $this;
    }

    /**
     * The presentment currency that was used to display prices to the customer. This must be specified if any presentment currencies are used in the order.
     */
    public function setPresentmentCurrency($shopifyCurrencyCode): static
    {
        $this->presentmentCurrency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * The date and time ([ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format) when an order was processed. This value is the date that appears on your orders and that's used in the analytic reports. If you're importing orders from an app or another platform, then you can set processed_at to a date and time in the past to match when the original order was created. As of API version 2026-07, values in the future are clamped to the current time. In earlier versions, future values return a `PROCESSED_AT_INVALID` error.
     */
    public function setProcessedAt($processedAt): static
    {
        $this->processedAt = $processedAt;

        return $this;
    }

    /**
     * The website where the customer clicked a link to the shop.
     */
    public function setReferringSite($referringSite): static
    {
        $this->referringSite = $referringSite;

        return $this;
    }

    /**
     * The mailing address to where the order will be shipped.
     *
     *               > Note:
     *               > If a customer is provided, this field (which has precedence) or `billing_address` will be set as the
     *               > customer's default address. Additionally, if the provided customer doesn't have a first or last name
     *               > then it will be set to the first/last name from this address (if provided).
     */
    public function setShippingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->shippingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * An array of objects, each of which details a shipping method used.
     */
    public function setShippingLines(array $shippingLines): static
    {
        $this->shippingLines = $shippingLines;

        return $this;
    }

    /**
     * The ID of the order placed on the originating platform. This value doesn't correspond to the Shopify ID that's generated from a completed draft.
     */
    public function setSourceIdentifier($sourceIdentifier): static
    {
        $this->sourceIdentifier = $sourceIdentifier;

        return $this;
    }

    /**
     * The source channel that the order is attributed to. Set this to the handle of an order attribution definition configured for your sales channel app, such as `youtube` or `channel:amazon-us`. To set up order attribution for your app, follow the [order attribution guide](https://shopify.dev/docs/apps/build/sales-channels/order-attribution).
     */
    public function setSourceName($sourceName): static
    {
        $this->sourceName = $sourceName;

        return $this;
    }

    /**
     * A valid URL to the original order on the originating surface. This URL is displayed to merchants on the Order Details page. If the URL is invalid, then it won't be displayed.
     */
    public function setSourceUrl($sourceUrl): static
    {
        $this->sourceUrl = $sourceUrl;

        return $this;
    }

    /**
     * A comma separated list of tags that have been added to the draft order.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Whether taxes are included in the order subtotal.
     */
    public function setTaxesIncluded($taxesIncluded): static
    {
        $this->taxesIncluded = $taxesIncluded;

        return $this;
    }

    /**
     * An array of tax line objects, each of which details a tax applicable to the order. When creating an order through the API, tax lines can be specified on the order or the line items but not both. Tax lines specified on the order are split across the _taxable_ line items in the created order.
     */
    public function setTaxLines(array $taxLines): static
    {
        $this->taxLines = $taxLines;

        return $this;
    }

    /**
     * Whether this is a test order.
     */
    public function setTest($test): static
    {
        $this->test = $test;

        return $this;
    }

    /**
     * The payment transactions to create for the order.
     */
    public function setTransactions(array $transactions): static
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * The ID of the user who processed the order, if applicable.
     */
    public function setUserId($userId): static
    {
        $this->userId = $userId;

        return $this;
    }
}
