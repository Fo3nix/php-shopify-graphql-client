<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to create or update a draft order.
 */
class ShopifyDraftOrderInputInputObject extends InputObject
{
    protected $appliedDiscount;
    protected $discountCodes;
    protected $acceptAutomaticDiscounts;
    protected $billingAddress;
    protected $customAttributes;
    protected $email;
    protected $lineItems;
    protected $metafields;
    protected $localizedFields;
    protected $note;
    protected $shippingAddress;
    protected $shippingLine;
    protected $tags;
    protected $taxExempt;
    protected $useCustomerDefaultAddress;
    protected $visibleToCustomer;
    protected $reserveInventoryUntil;
    protected $presentmentCurrencyCode;
    protected $phone;
    protected $paymentTerms;
    protected $purchasingEntity;
    protected $sourceName;
    protected $allowDiscountCodesInCheckout;
    protected $poNumber;
    protected $sessionToken;
    protected $transformerFingerprint;

    /**
     * The discount that will be applied to the draft order.
     * A draft order line item can have one discount. A draft order can also have one order-level discount.
     */
    public function setAppliedDiscount(ShopifyDraftOrderAppliedDiscountInputInputObject $shopifyDraftOrderAppliedDiscountInputInputObject): static
    {
        $this->appliedDiscount = $shopifyDraftOrderAppliedDiscountInputInputObject;

        return $this;
    }

    /**
     * The list of discount codes that will be attempted to be applied to the draft order.
     * If the draft isn't eligible for any given discount code it will be skipped during calculation.
     */
    public function setDiscountCodes(array $discountCodes): static
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * Whether or not to accept automatic discounts on the draft order during calculation.
     * If false, only discount codes and custom draft order discounts (see `appliedDiscount`) will be applied.
     * If true, eligible automatic discounts will be applied in addition to discount codes and custom draft order discounts.
     */
    public function setAcceptAutomaticDiscounts($acceptAutomaticDiscounts): static
    {
        $this->acceptAutomaticDiscounts = $acceptAutomaticDiscounts;

        return $this;
    }

    /**
     * The mailing address associated with the payment method.
     */
    public function setBillingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->billingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * The extra information added to the draft order on behalf of the customer.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The customer's email address.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The list of product variant or custom line item.
     * Each draft order must include at least one line item.
     * Accepts a maximum of 499 line items.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * The list of metafields attached to the draft order. An existing metafield can not be used when creating a draft order.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * The localized fields attached to the draft order. For example, Tax IDs.
     */
    public function setLocalizedFields(array $localizedFields): static
    {
        $this->localizedFields = $localizedFields;

        return $this;
    }

    /**
     * The text of an optional note that a shop owner can attach to the draft order.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * The mailing address to where the order will be shipped.
     */
    public function setShippingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->shippingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * The shipping line object, which details the shipping method used.
     */
    public function setShippingLine(ShopifyShippingLineInputInputObject $shopifyShippingLineInputInputObject): static
    {
        $this->shippingLine = $shopifyShippingLineInputInputObject;

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
     * Whether or not taxes are exempt for the draft order.
     * If false, then Shopify will refer to the taxable field for each line item.
     * If a customer is applied to the draft order, then Shopify will use the customer's tax exempt field instead.
     */
    public function setTaxExempt($taxExempt): static
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }

    /**
     * Whether to use the customer's default address.
     */
    public function setUseCustomerDefaultAddress($useCustomerDefaultAddress): static
    {
        $this->useCustomerDefaultAddress = $useCustomerDefaultAddress;

        return $this;
    }

    /**
     * Whether the draft order will be visible to the customer on the self-serve portal.
     */
    public function setVisibleToCustomer($visibleToCustomer): static
    {
        $this->visibleToCustomer = $visibleToCustomer;

        return $this;
    }

    /**
     * The time after which inventory reservation will expire.
     */
    public function setReserveInventoryUntil($reserveInventoryUntil): static
    {
        $this->reserveInventoryUntil = $reserveInventoryUntil;

        return $this;
    }

    /**
     * The payment currency of the customer for this draft order.
     */
    public function setPresentmentCurrencyCode($shopifyCurrencyCode): static
    {
        $this->presentmentCurrencyCode = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * The customer's phone number.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The fields used to create payment terms.
     */
    public function setPaymentTerms(ShopifyPaymentTermsInputInputObject $shopifyPaymentTermsInputInputObject): static
    {
        $this->paymentTerms = $shopifyPaymentTermsInputInputObject;

        return $this;
    }

    /**
     * The purchasing entity for the draft order.
     */
    public function setPurchasingEntity(ShopifyPurchasingEntityInputInputObject $shopifyPurchasingEntityInputInputObject): static
    {
        $this->purchasingEntity = $shopifyPurchasingEntityInputInputObject;

        return $this;
    }

    /**
     * The source channel that the order is attributed to. Set this to the handle of an order attribution definition configured for your sales channel app, such as `youtube` or `channel:amazon-us`.
     * To set up order attribution for your app, follow the [order attribution guide](https://shopify.dev/docs/apps/build/sales-channels/order-attribution).
     */
    public function setSourceName($sourceName): static
    {
        $this->sourceName = $sourceName;

        return $this;
    }

    /**
     * Whether discount codes are allowed during checkout of this draft order.
     */
    public function setAllowDiscountCodesInCheckout($allowDiscountCodesInCheckout): static
    {
        $this->allowDiscountCodesInCheckout = $allowDiscountCodesInCheckout;

        return $this;
    }

    /**
     * The purchase order number.
     */
    public function setPoNumber($poNumber): static
    {
        $this->poNumber = $poNumber;

        return $this;
    }

    /**
     * The unique token identifying the draft order.
     */
    public function setSessionToken($sessionToken): static
    {
        $this->sessionToken = $sessionToken;

        return $this;
    }

    /**
     * Fingerprint to guarantee bundles are handled correctly.
     */
    public function setTransformerFingerprint($transformerFingerprint): static
    {
        $this->transformerFingerprint = $transformerFingerprint;

        return $this;
    }
}
