<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating or updating an automatic discount
 * that's managed by an app.
 *
 * Use these input fields when you need advanced, custom, or
 * dynamic discount capabilities that aren't supported by
 * [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
 */
class ShopifyDiscountAutomaticAppInputInputObject extends InputObject
{
    protected $combinesWith;
    protected $discountClasses;
    protected $title;
    protected $startsAt;
    protected $endsAt;
    protected $context;
    protected $functionHandle;
    protected $metafields;
    protected $appliesOnSubscription;
    protected $appliesOnOneTimePurchase;
    protected $recurringCycleLimit;

    /**
     * The
     * [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that you can use in combination with
     * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function setCombinesWith(ShopifyDiscountCombinesWithInputInputObject $shopifyDiscountCombinesWithInputInputObject): static
    {
        $this->combinesWith = $shopifyDiscountCombinesWithInputInputObject;

        return $this;
    }

    /**
     * Determines which discount effects the discount can apply.
     */
    public function setDiscountClasses(array $discountClasses): static
    {
        $this->discountClasses = array_map(function ($value) {
            return new RawObject($value);
        }, $discountClasses);

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
     * Discounts automatically apply on Point of Sale (POS) for Pro locations. For app discounts using Admin UI Extensions, merchants can control POS eligibility when the context is set to ALL.
     */
    public function setContext(ShopifyDiscountContextInputInputObject $shopifyDiscountContextInputInputObject): static
    {
        $this->context = $shopifyDiscountContextInputInputObject;

        return $this;
    }

    /**
     * The handle of the function providing the discount.
     */
    public function setFunctionHandle($functionHandle): static
    {
        $this->functionHandle = $functionHandle;

        return $this;
    }

    /**
     * Additional metafields to associate to the discount.
     * [Metafields](https://shopify.dev/docs/apps/build/custom-data)
     * provide dynamic function configuration with
     * different parameters, such as `percentage` for a percentage discount. Merchants can set metafield values
     * in the Shopify admin, which makes the discount function more flexible and customizable.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

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
     * Whether the discount applies on one-time purchases.
     */
    public function setAppliesOnOneTimePurchase($appliesOnOneTimePurchase): static
    {
        $this->appliesOnOneTimePurchase = $appliesOnOneTimePurchase;

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
