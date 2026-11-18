<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `DiscountAutomaticBxgy` object lets you manage
 * [buy X get Y discounts (BXGY)](https://help.shopify.com/manual/discounts/discount-types/buy-x-get-y)
 * that are automatically applied on a cart and at checkout. BXGY discounts incentivize customers by offering
 * them additional items at a discounted price or for free when they purchase a specified quantity of items.
 *
 * The `DiscountAutomaticBxgy` object stores information about automatic BXGY discounts that apply to
 * specific [products and variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountProducts),
 * [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCollections),
 * or [all items in a cart](https://shopify.dev/docs/api/admin-graphql/latest/objects/AllDiscountItems).
 *
 * Learn more about working with [Shopify's discount model](https://shopify.dev/docs/apps/build/discounts),
 * including limitations and considerations.
 *
 * > Note:
 * > The [`DiscountCodeBxgy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCodeBxgy)
 * object has similar functionality to the `DiscountAutomaticBxgy` object, but customers need to enter a code to
 * receive a discount.
 * >
 * > API versions prior to `2025-10` only return automatic discounts with `context` set to `all`, discounts with other values are filtered out.
 */
class ShopifyDiscountAutomaticBxgyQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticBxgy";

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
     * The
     * [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that you can use in combination with
     * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function selectCombinesWith(?ShopifyDiscountAutomaticBxgyCombinesWithArgumentsObject $argsObject = null): ShopifyDiscountCombinesWithQueryObject
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
    public function selectContext(?ShopifyDiscountAutomaticBxgyContextArgumentsObject $argsObject = null): ShopifyDiscountContextUnionObject
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
     * The items eligible for the discount and the required quantity of each to receive the discount.
     */
    public function selectCustomerBuys(?ShopifyDiscountAutomaticBxgyCustomerBuysArgumentsObject $argsObject = null): ShopifyDiscountCustomerBuysQueryObject
    {
        $object = new ShopifyDiscountCustomerBuysQueryObject("customerBuys");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The items in the order that qualify for the discount, their quantities, and the total value of the discount.
     */
    public function selectCustomerGets(?ShopifyDiscountAutomaticBxgyCustomerGetsArgumentsObject $argsObject = null): ShopifyDiscountCustomerGetsQueryObject
    {
        $object = new ShopifyDiscountCustomerGetsQueryObject("customerGets");
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
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyDiscountAutomaticBxgyEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A legacy unique ID for the discount.
     *
     * @deprecated Use DiscountAutomaticNode.id instead.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The rollouts that include this discount. A rollout includes a discount when
     * one of its treatments adds or removes the discount. Walk
     * `treatments.changes` to see what each treatment does to the discount.
     * A rollout's schedule is separate from the discount's own `startsAt` and `endsAt`.
     * Use `query` to filter by rollout `status`.
     */
    public function selectRollouts(?ShopifyDiscountAutomaticBxgyRolloutsArgumentsObject $argsObject = null): ShopifyRolloutConnectionQueryObject
    {
        $object = new ShopifyRolloutConnectionQueryObject("rollouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * A list of searchable keywords that are associated with the discount.
     * For example, a merchant might apply the `loyalty` tag to discounts
     * that are associated with their loyalty program.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

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
     * The date and time when the discount was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The number of times that the discount has been used.
     *
     * @deprecated Use `asyncUsageCount` instead.
     */
    public function selectUsageCount(): static
    {
        $this->selectField("usageCount");

        return $this;
    }

    /**
     * The maximum number of times that the discount can be applied to an order.
     */
    public function selectUsesPerOrderLimit(): static
    {
        $this->selectField("usesPerOrderLimit");

        return $this;
    }
}
