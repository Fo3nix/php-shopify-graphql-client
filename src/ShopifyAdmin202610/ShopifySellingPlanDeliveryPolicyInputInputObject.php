<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that are required to create or update a delivery policy.
 */
class ShopifySellingPlanDeliveryPolicyInputInputObject extends InputObject
{
    protected $fixed;
    protected $recurring;

    /**
     * The fixed delivery policy details.
     */
    public function setFixed(ShopifySellingPlanFixedDeliveryPolicyInputInputObject $shopifySellingPlanFixedDeliveryPolicyInputInputObject): static
    {
        $this->fixed = $shopifySellingPlanFixedDeliveryPolicyInputInputObject;

        return $this;
    }

    /**
     * The recurring delivery policy details.
     */
    public function setRecurring(ShopifySellingPlanRecurringDeliveryPolicyInputInputObject $shopifySellingPlanRecurringDeliveryPolicyInputInputObject): static
    {
        $this->recurring = $shopifySellingPlanRecurringDeliveryPolicyInputInputObject;

        return $this;
    }
}
