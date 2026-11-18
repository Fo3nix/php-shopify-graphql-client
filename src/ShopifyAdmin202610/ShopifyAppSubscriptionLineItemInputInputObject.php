<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to add more than one pricing plan to an app subscription.
 */
class ShopifyAppSubscriptionLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["plan"];

    protected $plan;

    /**
     * The pricing model for the app subscription.
     */
    public function setPlan(ShopifyAppPlanInputInputObject $shopifyAppPlanInputInputObject): static
    {
        $this->plan = $shopifyAppPlanInputInputObject;

        return $this;
    }
}
