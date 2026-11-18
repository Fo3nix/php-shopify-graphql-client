<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating or updating a
 * [free shipping discount](https://help.shopify.com/manual/discounts/discount-types/free-shipping)
 * that's automatically applied on a cart and at checkout.
 *
 * When creating, required fields are:
 * - `startsAt`
 * - `title`
 */
class ShopifyDiscountAutomaticFreeShippingInputInputObject extends InputObject
{
    protected $title;
    protected $startsAt;
    protected $endsAt;
    protected $context;
    protected $combinesWith;
    protected $tags;
    protected $minimumRequirement;
    protected $destination;
    protected $maximumShippingPrice;
    protected $appliesOnOneTimePurchase;
    protected $appliesOnSubscription;
    protected $recurringCycleLimit;

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
     * The
     * [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that you can use in combination with the shipping discount.
     */
    public function setCombinesWith(ShopifyDiscountCombinesWithInputInputObject $shopifyDiscountCombinesWithInputInputObject): static
    {
        $this->combinesWith = $shopifyDiscountCombinesWithInputInputObject;

        return $this;
    }

    /**
     * A list of searchable keywords that are associated with the discount.
     *
     * Use these tags on product discounts to determine which other product discounts can
     * apply to the same cart line when you configure
     * `productDiscountsWithTagsOnSameCartLine` in `combinesWith`.
     *
     * For example, you can apply a `loyalty` tag to discounts
     * that are associated with a loyalty program.
     *
     * Updating `tags` overwrites any existing tags that were previously added to the discount.
     * To add new tags without overwriting existing tags, use the
     * [`tagsAdd`](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd)
     * mutation.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

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
     * A list of destinations where the discount will apply.
     */
    public function setDestination(ShopifyDiscountShippingDestinationSelectionInputInputObject $shopifyDiscountShippingDestinationSelectionInputInputObject): static
    {
        $this->destination = $shopifyDiscountShippingDestinationSelectionInputInputObject;

        return $this;
    }

    /**
     * The maximum shipping price that qualifies for the discount.
     */
    public function setMaximumShippingPrice($maximumShippingPrice): static
    {
        $this->maximumShippingPrice = $maximumShippingPrice;

        return $this;
    }

    /**
     * Whether the discount applies on regular one-time-purchase items.
     */
    public function setAppliesOnOneTimePurchase($appliesOnOneTimePurchase): static
    {
        $this->appliesOnOneTimePurchase = $appliesOnOneTimePurchase;

        return $this;
    }

    /**
     * Whether the discount applies on subscription items.
     * [Subscriptions](https://shopify.dev/docs/apps/launch/billing/subscription-billing/offer-subscription-discounts)
     * enable customers to purchase products
     * on a recurring basis.
     */
    public function setAppliesOnSubscription($appliesOnSubscription): static
    {
        $this->appliesOnSubscription = $appliesOnSubscription;

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
