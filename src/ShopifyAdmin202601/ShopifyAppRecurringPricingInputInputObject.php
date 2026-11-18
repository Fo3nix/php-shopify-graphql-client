<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * Instructs the app subscription to generate a fixed charge on a recurring basis. The frequency is specified by the billing interval.
 */
class ShopifyAppRecurringPricingInputInputObject extends InputObject
{
    const REQUIRED = ["price"];

    protected $interval;
    protected $price;
    protected $discount;

    /**
     * How often the app subscription generates a charge.
     */
    public function setInterval($shopifyAppPricingInterval): static
    {
        $this->interval = new RawObject($shopifyAppPricingInterval);

        return $this;
    }

    /**
     * The amount to be charged to the store every billing interval.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The discount applied to the subscription for a given number of billing intervals.
     */
    public function setDiscount(ShopifyAppSubscriptionDiscountInputInputObject $shopifyAppSubscriptionDiscountInputInputObject): static
    {
        $this->discount = $shopifyAppSubscriptionDiscountInputInputObject;

        return $this;
    }
}
