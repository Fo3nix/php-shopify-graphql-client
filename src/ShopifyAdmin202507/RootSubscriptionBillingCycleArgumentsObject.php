<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootSubscriptionBillingCycleArgumentsObject extends ArgumentsObject
{
    protected $billingCycleInput;

    public function setBillingCycleInput(SubscriptionBillingCycleInputInputObject $subscriptionBillingCycleInputInputObject)
    {
        $this->billingCycleInput = $subscriptionBillingCycleInputInputObject;

        return $this;
    }
}
