<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `DiscountCodeApp` object stores information about code discounts
 * that are managed by an app using
 * [Shopify Functions](https://shopify.dev/docs/apps/build/functions).
 * Use `DiscountCodeApp` when you need advanced, custom, or
 * dynamic discount capabilities that aren't supported by
 * [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
 *
 * Learn more about creating
 * [custom discount functionality](https://shopify.dev/docs/apps/build/discounts/build-discount-function).
 *
 * > Note:
 * > The [`DiscountAutomaticApp`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticApp)
 * object has similar functionality to the `DiscountCodeApp` object, with the exception that `DiscountAutomaticApp`
 * stores information about automatic discounts that are managed by an app using Shopify Functions.
 */
class ShopifyDiscountCodeAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeApp";

    /**
     * The details about the app extension that's providing the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types).
     * This information includes the app extension's name and
     * [client ID](https://shopify.dev/docs/apps/build/authentication-authorization/client-secrets),
     * [App Bridge configuration](https://shopify.dev/docs/api/app-bridge),
     * [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations),
     * [function ID](https://shopify.dev/docs/apps/build/functions/input-output/metafields-for-input-queries),
     * and other metadata about the discount type, including the discount type's name and description.
     */
    public function selectAppDiscountType(?ShopifyDiscountCodeAppAppDiscountTypeArgumentsObject $argsObject = null): ShopifyAppDiscountTypeQueryObject
    {
        $object = new ShopifyAppDiscountTypeQueryObject("appDiscountType");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the discount applies on regular one-time-purchase items.
     */
    public function selectAppliesOnOneTimePurchase(): static
    {
        $this->selectField("appliesOnOneTimePurchase");

        return $this;
    }

    /**
     * Whether the discount applies to subscriptions items.
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
    public function selectCodes(?ShopifyDiscountCodeAppCodesArgumentsObject $argsObject = null): ShopifyDiscountRedeemCodeConnectionQueryObject
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
    public function selectCodesCount(?ShopifyDiscountCodeAppCodesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
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
    public function selectCombinesWith(?ShopifyDiscountCodeAppCombinesWithArgumentsObject $argsObject = null): ShopifyDiscountCombinesWithQueryObject
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
    public function selectContext(?ShopifyDiscountCodeAppContextArgumentsObject $argsObject = null): ShopifyDiscountContextUnionObject
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
    public function selectCustomerSelection(?ShopifyDiscountCodeAppCustomerSelectionArgumentsObject $argsObject = null): ShopifyDiscountCustomerSelectionUnionObject
    {
        $object = new ShopifyDiscountCustomerSelectionUnionObject("customerSelection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The
     * [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
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
     * The [globally-unique ID](https://shopify.dev/docs/api/usage/gids)
     * for the discount.
     */
    public function selectDiscountId(): static
    {
        $this->selectField("discountId");

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
     * The [error history](https://shopify.dev/docs/apps/build/functions/monitoring-and-errors)
     * for the latest version of the discount type that the app provides.
     */
    public function selectErrorHistory(?ShopifyDiscountCodeAppErrorHistoryArgumentsObject $argsObject = null): ShopifyFunctionsErrorHistoryQueryObject
    {
        $object = new ShopifyFunctionsErrorHistoryQueryObject("errorHistory");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectShareableUrls(?ShopifyDiscountCodeAppShareableUrlsArgumentsObject $argsObject = null): ShopifyDiscountShareableUrlQueryObject
    {
        $object = new ShopifyDiscountShareableUrlQueryObject("shareableUrls");
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
     * The total sales from orders where the discount was used.
     */
    public function selectTotalSales(?ShopifyDiscountCodeAppTotalSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
