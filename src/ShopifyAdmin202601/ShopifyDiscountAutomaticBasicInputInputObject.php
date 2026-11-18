<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating or updating an
 * [amount off discount](https://help.shopify.com/manual/discounts/discount-types/percentage-fixed-amount)
 * that's automatically applied on a cart and at checkout.
 *
 * During creation the required fields are:
 *   - `customerGets`
 *   - `startsAt`
 *   - `title`
 */
class ShopifyDiscountAutomaticBasicInputInputObject extends InputObject
{
    protected $combinesWith;
    protected $title;
    protected $startsAt;
    protected $endsAt;
    protected $context;
    protected $minimumRequirement;
    protected $customerGets;
    protected $recurringCycleLimit;

    /**
     * The
     * [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that you can use in combination with
     * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function setCombinesWith(ShopifyDiscountCombinesWithInputInputObject $shopifyDiscountCombinesWithInputInputObject): static
    {
        $this->combinesWith = $shopifyDiscountCombinesWithInputInputObject;

        return $this;
    }

    /**
     * The discount's name that displays to merchants in the Shopify admin and to customers.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The date and time when the discount becomes active and is available to customers.
     */
    public function setStartsAt($startsAt): static
    {
        $this->startsAt = $startsAt;

        return $this;
    }

    /**
     * The date and time when the discount expires and is no longer available to customers.
     * For discounts without a fixed expiration date, specify `null`.
     */
    public function setEndsAt($endsAt): static
    {
        $this->endsAt = $endsAt;

        return $this;
    }

    /**
     * The context defining which buyers can use the discount.
     * You can target specific customer IDs, customer segments, or make the discount available to all buyers.
     * Discounts automatically apply on Point of Sale (POS) for Pro locations when the context is not set to ALL.
     */
    public function setContext(ShopifyDiscountContextInputInputObject $shopifyDiscountContextInputInputObject): static
    {
        $this->context = $shopifyDiscountContextInputInputObject;

        return $this;
    }

    /**
     * The minimum subtotal or quantity of items that are required for the discount to be applied.
     */
    public function setMinimumRequirement(ShopifyDiscountMinimumRequirementInputInputObject $shopifyDiscountMinimumRequirementInputInputObject): static
    {
        $this->minimumRequirement = $shopifyDiscountMinimumRequirementInputInputObject;

        return $this;
    }

    /**
     * Information about the qualifying items and their discount.
     */
    public function setCustomerGets(ShopifyDiscountCustomerGetsInputInputObject $shopifyDiscountCustomerGetsInputInputObject): static
    {
        $this->customerGets = $shopifyDiscountCustomerGetsInputInputObject;

        return $this;
    }

    /**
     * The number of billing cycles for which the discount can be applied,
     * which is useful for subscription-based discounts. For example, if you set this field
     * to `3`, then the discount only applies to the first three billing cycles of a
     * subscription. If you specify `0`, then the discount applies indefinitely.
     */
    public function setRecurringCycleLimit($recurringCycleLimit): static
    {
        $this->recurringCycleLimit = $recurringCycleLimit;

        return $this;
    }
}
