<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating or updating a code discount, where the discount type is provided by an app extension that uses [Shopify Functions](https://shopify.dev/docs/apps/build/functions).
 *
 * Use these input fields when you need advanced or custom discount capabilities that aren't supported by [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
 */
class ShopifyDiscountCodeAppInputInputObject extends InputObject
{
    protected $combinesWith;
    protected $discountClasses;
    protected $title;
    protected $startsAt;
    protected $endsAt;
    protected $appliesOncePerCustomer;
    protected $code;
    protected $usageLimit;
    protected $context;
    protected $functionHandle;
    protected $appliesOnSubscription;
    protected $appliesOnOneTimePurchase;
    protected $recurringCycleLimit;
    protected $metafields;

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
     * Whether a customer can only use the discount once.
     */
    public function setAppliesOncePerCustomer($appliesOncePerCustomer): static
    {
        $this->appliesOncePerCustomer = $appliesOncePerCustomer;

        return $this;
    }

    /**
     * The code that customers use to apply the discount.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The maximum number of times the discount can be redeemed.
     * For unlimited usage, specify `null`.
     */
    public function setUsageLimit($usageLimit): static
    {
        $this->usageLimit = $usageLimit;

        return $this;
    }

    /**
     * The context defining which buyers can use the discount.
     * You can target specific customer IDs, customer segments, or make the discount available to all buyers.
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
     * Whether the discount applies to subscriptions items.
     */
    public function setAppliesOnSubscription($appliesOnSubscription): static
    {
        $this->appliesOnSubscription = $appliesOnSubscription;

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
     * The number of times a discount applies on recurring purchases (subscriptions).         0 will apply infinitely whereas 1 will only apply to the first checkout.
     */
    public function setRecurringCycleLimit($recurringCycleLimit): static
    {
        $this->recurringCycleLimit = $recurringCycleLimit;

        return $this;
    }

    /**
     * Additional metafields to associate to the discount. [Metafields](https://shopify.dev/docs/apps/build/custom-data) provide dynamic function configuration with different parameters, such as `percentage` for a percentage discount. Merchants can set metafield values in the Shopify admin, which makes the discount function more flexible and customizable.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }
}
