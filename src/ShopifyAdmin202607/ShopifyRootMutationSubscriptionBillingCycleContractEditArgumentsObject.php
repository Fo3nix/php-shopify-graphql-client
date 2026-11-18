<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionBillingCycleContractEditArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["billingCycleInput"];

    protected $actor;
    protected $billingCycleInput;

    /**
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

    /**
     * Input object for selecting and using billing cycles.
     */
    public function setBillingCycleInput(ShopifySubscriptionBillingCycleInputInputObject $shopifySubscriptionBillingCycleInputInputObject): static
    {
        $this->billingCycleInput = $shopifySubscriptionBillingCycleInputInputObject;

        return $this;
    }
}
