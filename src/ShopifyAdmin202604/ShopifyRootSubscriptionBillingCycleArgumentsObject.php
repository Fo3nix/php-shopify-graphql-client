<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootSubscriptionBillingCycleArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["billingCycleInput"];

    protected $billingCycleInput;

    /**
     * Input object used to select and use billing cycles.
     */
    public function setBillingCycleInput(ShopifySubscriptionBillingCycleInputInputObject $shopifySubscriptionBillingCycleInputInputObject): static
    {
        $this->billingCycleInput = $shopifySubscriptionBillingCycleInputInputObject;

        return $this;
    }
}
