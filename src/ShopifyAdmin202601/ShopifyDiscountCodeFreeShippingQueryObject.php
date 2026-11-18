<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `DiscountCodeFreeShipping` object lets you manage
 * [free shipping discounts](https://help.shopify.com/manual/discounts/discount-types/free-shipping)
 * that are applied on a cart and at checkout when a customer enters a code. Free shipping discounts are
 * promotional deals that merchants offer to customers to waive shipping costs and encourage online purchases.
 *
 * The `DiscountCodeFreeShipping` object stores information about free shipping code discounts that apply to
 * specific [products and variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountProducts),
 * [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCollections),
 * or [all items in a cart](https://shopify.dev/docs/api/admin-graphql/latest/objects/AllDiscountItems).
 *
 * Learn more about working with [Shopify's discount model](https://shopify.dev/docs/apps/build/discounts),
 * including limitations and considerations.
 *
 * > Note:
 * > The
 * [`DiscountAutomaticFreeShipping`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticFreeShipping)
 * object has similar functionality to the `DiscountCodeFreeShipping` object, but discounts are automatically applied,
 * without the need for customers to enter a code.
 */
class ShopifyDiscountCodeFreeShippingQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeFreeShipping";

    /**
     * Whether the discount applies on one-time purchases.
     * A one-time purchase is a transaction where you pay a
     * single time for a product, without any ongoing
     * commitments or recurring charges.
     */
    public function selectAppliesOnOneTimePurchase(): static
    {
        $this->selectField("appliesOnOneTimePurchase");

        return $this;
    }

    /**
     * Whether the discount applies on subscription items.
     * [Subscriptions](https://shopify.dev/docs/apps/launch/billing/subscription-billing/offer-subscription-discounts)
     * enable customers to purchase products
     * on a recurring basis.
     */
    public function selectAppliesOnSubscription(): static
    {
        $this->selectField("appliesOnSubscription");

        return $this;
    }

    /**
     * Whether a customer can only use the discount once.
     */
    public function selectAppliesOncePerCustomer(): static
    {
        $this->selectField("appliesOncePerCustomer");

        return $this;
    }

    /**
     * The number of times that the discount has been used.
     * For example, if a "Buy 3, Get 1 Free" t-shirt discount
     * is automatically applied in 200 transactions, then the
     * discount has been used 200 times.
     * This value is updated asynchronously. As a result,
     * it might be lower than the actual usage count until the
     * asynchronous process is completed.
     */
    public function selectAsyncUsageCount(): static
    {
        $this->selectField("asyncUsageCount");

        return $this;
    }

    /**
     * A list codes that customers can use to redeem the discount.
     */
    public function selectCodes(?ShopifyDiscountCodeFreeShippingCodesArgumentsObject $argsObject = null): ShopifyDiscountRedeemCodeConnectionQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeConnectionQueryObject("codes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of codes that a customer can use to redeem the discount.
     */
    public function selectCodesCount(?ShopifyDiscountCodeFreeShippingCodesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("codesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The
     * [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that you can use in combination with
     * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function selectCombinesWith(?ShopifyDiscountCodeFreeShippingCombinesWithArgumentsObject $argsObject = null): ShopifyDiscountCombinesWithQueryObject
    {
        $object = new ShopifyDiscountCombinesWithQueryObject("combinesWith");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The context defining which buyers can use the discount.
     */
    public function selectContext(?ShopifyDiscountCodeFreeShippingContextArgumentsObject $argsObject = null): ShopifyDiscountContextUnionObject
    {
        $object = new ShopifyDiscountContextUnionObject("context");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the discount was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The customers that can use the discount.
     *
     * @deprecated Use `context` instead.
     */
    public function selectCustomerSelection(?ShopifyDiscountCodeFreeShippingCustomerSelectionArgumentsObject $argsObject = null): ShopifyDiscountCustomerSelectionUnionObject
    {
        $object = new ShopifyDiscountCustomerSelectionUnionObject("customerSelection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The countries that qualify for the discount.
     * You can define
     * [a list of countries](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCountries)
     * or specify [all countries](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCountryAll)
     * to be eligible for the discount.
     */
    public function selectDestinationSelection(?ShopifyDiscountCodeFreeShippingDestinationSelectionArgumentsObject $argsObject = null): ShopifyDiscountShippingDestinationSelectionUnionObject
    {
        $object = new ShopifyDiscountShippingDestinationSelectionUnionObject("destinationSelection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that's used to control how discounts can be combined.
     *
     * @deprecated Use `discountClasses` instead.
     */
    public function selectDiscountClass(): static
    {
        $this->selectField("discountClass");

        return $this;
    }

    /**
     * The classes of the discount.
     */
    public function selectDiscountClasses(): static
    {
        $this->selectField("discountClasses");

        return $this;
    }

    /**
     * The date and time when the discount expires and is no longer available to customers.
     * For discounts without a fixed expiration date, specify `null`.
     */
    public function selectEndsAt(): static
    {
        $this->selectField("endsAt");

        return $this;
    }

    /**
     * Whether there are
     * [timeline comments](https://help.shopify.com/manual/discounts/managing-discount-codes#use-the-discount-timeline)
     * associated with the discount.
     */
    public function selectHasTimelineComment(): static
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    /**
     * The maximum shipping price amount accepted to qualify for the discount.
     */
    public function selectMaximumShippingPrice(?ShopifyDiscountCodeFreeShippingMaximumShippingPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("maximumShippingPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The minimum subtotal or quantity of items that are required for the discount to be applied.
     */
    public function selectMinimumRequirement(?ShopifyDiscountCodeFreeShippingMinimumRequirementArgumentsObject $argsObject = null): ShopifyDiscountMinimumRequirementUnionObject
    {
        $object = new ShopifyDiscountMinimumRequirementUnionObject("minimumRequirement");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of billing cycles for which the discount can be applied,
     * which is useful for subscription-based discounts. For example, if you set this field
     * to `3`, then the discount only applies to the first three billing cycles of a
     * subscription. If you specify `0`, then the discount applies indefinitely.
     */
    public function selectRecurringCycleLimit(): static
    {
        $this->selectField("recurringCycleLimit");

        return $this;
    }

    /**
     * A list of URLs that the app can use to share the discount.
     */
    public function selectShareableUrls(?ShopifyDiscountCodeFreeShippingShareableUrlsArgumentsObject $argsObject = null): ShopifyDiscountShareableUrlQueryObject
    {
        $object = new ShopifyDiscountShareableUrlQueryObject("shareableUrls");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An abbreviated version of the discount
     * [`summary`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCodeFreeShipping#field-summary)
     * field.
     */
    public function selectShortSummary(): static
    {
        $this->selectField("shortSummary");

        return $this;
    }

    /**
     * The date and time when the discount becomes active and is available to customers.
     */
    public function selectStartsAt(): static
    {
        $this->selectField("startsAt");

        return $this;
    }

    /**
     * The status of the discount that describes its availability,
     * expiration, or pending activation.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * A detailed explanation of what the discount is,
     * who can use it, when and where it applies, and any associated
     * rules or limitations.
     */
    public function selectSummary(): static
    {
        $this->selectField("summary");

        return $this;
    }

    /**
     * The discount's name that displays to merchants in the Shopify admin and to customers.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The total sales from orders where the discount was used.
     */
    public function selectTotalSales(?ShopifyDiscountCodeFreeShippingTotalSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the discount was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The maximum number of times the discount can be redeemed.
     * For unlimited usage, specify `null`.
     */
    public function selectUsageLimit(): static
    {
        $this->selectField("usageLimit");

        return $this;
    }
}
