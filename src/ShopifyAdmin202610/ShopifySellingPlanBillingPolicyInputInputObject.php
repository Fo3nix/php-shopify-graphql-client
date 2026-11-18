<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that are required to create or update a billing policy type.
 */
class ShopifySellingPlanBillingPolicyInputInputObject extends InputObject
{
    protected $fixed;
    protected $recurring;

    /**
     * The fixed billing policy details.
     */
    public function setFixed(ShopifySellingPlanFixedBillingPolicyInputInputObject $shopifySellingPlanFixedBillingPolicyInputInputObject): static
    {
        $this->fixed = $shopifySellingPlanFixedBillingPolicyInputInputObject;

        return $this;
    }

    /**
     * The recurring billing policy details.
     */
    public function setRecurring(ShopifySellingPlanRecurringBillingPolicyInputInputObject $shopifySellingPlanRecurringBillingPolicyInputInputObject): static
    {
        $this->recurring = $shopifySellingPlanRecurringBillingPolicyInputInputObject;

        return $this;
    }
}
