<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create or update a selling plan pricing policy.
 */
class ShopifySellingPlanPricingPolicyInputInputObject extends InputObject
{
    protected $recurring;
    protected $fixed;

    /**
     * Recurring pricing policy details.
     */
    public function setRecurring(ShopifySellingPlanRecurringPricingPolicyInputInputObject $shopifySellingPlanRecurringPricingPolicyInputInputObject): static
    {
        $this->recurring = $shopifySellingPlanRecurringPricingPolicyInputInputObject;

        return $this;
    }

    /**
     * Fixed pricing policy details.
     */
    public function setFixed(ShopifySellingPlanFixedPricingPolicyInputInputObject $shopifySellingPlanFixedPricingPolicyInputInputObject): static
    {
        $this->fixed = $shopifySellingPlanFixedPricingPolicyInputInputObject;

        return $this;
    }
}
