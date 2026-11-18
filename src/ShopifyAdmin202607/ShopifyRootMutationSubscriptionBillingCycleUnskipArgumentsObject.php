<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionBillingCycleUnskipArgumentsObject extends ArgumentsObject
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
