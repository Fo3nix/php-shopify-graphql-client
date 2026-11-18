<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionBillingCycleScheduleEditArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["billingCycleInput", "input"];

    protected $billingCycleInput;
    protected $input;

    /**
     * Input object for selecting and using billing cycles.
     */
    public function setBillingCycleInput(ShopifySubscriptionBillingCycleInputInputObject $shopifySubscriptionBillingCycleInputInputObject): static
    {
        $this->billingCycleInput = $shopifySubscriptionBillingCycleInputInputObject;

        return $this;
    }

    /**
     * Data used to create or modify billing cycle schedule edit.
     */
    public function setInput(ShopifySubscriptionBillingCycleScheduleEditInputInputObject $shopifySubscriptionBillingCycleScheduleEditInputInputObject): static
    {
        $this->input = $shopifySubscriptionBillingCycleScheduleEditInputInputObject;

        return $this;
    }
}
