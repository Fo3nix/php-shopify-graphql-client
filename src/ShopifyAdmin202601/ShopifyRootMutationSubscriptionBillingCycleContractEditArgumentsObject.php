<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionBillingCycleContractEditArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["billingCycleInput"];

    protected $billingCycleInput;

    /**
     * Input object for selecting and using billing cycles.
     */
    public function setBillingCycleInput(ShopifySubscriptionBillingCycleInputInputObject $shopifySubscriptionBillingCycleInputInputObject): static
    {
        $this->billingCycleInput = $shopifySubscriptionBillingCycleInputInputObject;

        return $this;
    }
}
