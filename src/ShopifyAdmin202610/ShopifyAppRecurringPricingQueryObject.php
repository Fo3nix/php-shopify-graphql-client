<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The pricing information about a subscription app.
 * The object contains an interval (the frequency at which the shop is billed for an app subscription) and
 * a price (the amount to be charged to the subscribing shop at each interval).
 */
class ShopifyAppRecurringPricingQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRecurringPricing";

    /**
     * The discount applied to the subscription for a given number of billing intervals.
     */
    public function selectDiscount(?ShopifyAppRecurringPricingDiscountArgumentsObject $argsObject = null): ShopifyAppSubscriptionDiscountQueryObject
    {
        $object = new ShopifyAppSubscriptionDiscountQueryObject("discount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The frequency at which the subscribing shop is billed for an app subscription.
     */
    public function selectInterval(): static
    {
        $this->selectField("interval");

        return $this;
    }

    /**
     * The app store pricing plan handle.
     */
    public function selectPlanHandle(): static
    {
        $this->selectField("planHandle");

        return $this;
    }

    /**
     * The amount and currency to be charged to the subscribing shop every billing interval.
     */
    public function selectPrice(?ShopifyAppRecurringPricingPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
