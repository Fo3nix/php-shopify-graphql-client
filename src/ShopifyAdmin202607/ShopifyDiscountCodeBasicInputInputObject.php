<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating or updating an [amount off discount](https://help.shopify.com/manual/discounts/discount-types/percentage-fixed-amount) that's applied on a cart and at checkout when a customer enters a code. Amount off discounts can be a percentage off or a fixed amount off.
 *
 * When creating, required fields are:
 *   - `code`
 *   - `context` (or deprecated `customerSelection`)
 *   - `customerGets`
 *   - `startsAt`
 *   - `title`
 */
class ShopifyDiscountCodeBasicInputInputObject extends InputObject
{
    protected $combinesWith;
    protected $title;
    protected $startsAt;
    protected $endsAt;
    protected $appliesOncePerCustomer;
    protected $code;
    protected $usageLimit;
    protected $context;
    protected $tags;
    protected $minimumRequirement;
    protected $customerGets;
    protected $recurringCycleLimit;

    /**
     * The
     * [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that you can use in combination with
     * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types),
     * and the product discount tags that determine which product discounts can apply
     * together on the same cart line.
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
     * The items in the order that qualify for the discount, their quantities, and the total value of the discount.
     */
    public function setCustomerGets(ShopifyDiscountCustomerGetsInputInputObject $shopifyDiscountCustomerGetsInputInputObject): static
    {
        $this->customerGets = $shopifyDiscountCustomerGetsInputInputObject;

        return $this;
    }

    /**
     * The number of billing cycles for which the discount can be applied, which is useful for subscription-based discounts. For example, if you set this field to `3`, then the discount only applies to the first three billing cycles of a subscription. If you specify `0`, then the discount applies indefinitely.
     */
    public function setRecurringCycleLimit($recurringCycleLimit): static
    {
        $this->recurringCycleLimit = $recurringCycleLimit;

        return $this;
    }
}
