<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The pricing model for the app subscription.
 * The pricing model input can be either `appRecurringPricingDetails` or `appUsagePricingDetails`.
 */
class ShopifyAppPlanInputInputObject extends InputObject
{
    protected $appUsagePricingDetails;
    protected $appRecurringPricingDetails;

    /**
     * The pricing details for usage-based billing.
     */
    public function setAppUsagePricingDetails(ShopifyAppUsagePricingInputInputObject $shopifyAppUsagePricingInputInputObject): static
    {
        $this->appUsagePricingDetails = $shopifyAppUsagePricingInputInputObject;

        return $this;
    }

    /**
     * The pricing details for recurring billing.
     */
    public function setAppRecurringPricingDetails(ShopifyAppRecurringPricingInputInputObject $shopifyAppRecurringPricingInputInputObject): static
    {
        $this->appRecurringPricingDetails = $shopifyAppRecurringPricingInputInputObject;

        return $this;
    }
}
