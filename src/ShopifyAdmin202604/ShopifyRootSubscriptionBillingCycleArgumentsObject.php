<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootSubscriptionBillingCycleArgumentsObject extends ArgumentsObject
{
    protected $billingCycleInput;

    public function setBillingCycleInput(ShopifySubscriptionBillingCycleInputInputObject $shopifySubscriptionBillingCycleInputInputObject)
    {
        $this->billingCycleInput = $shopifySubscriptionBillingCycleInputInputObject;

        return $this;
    }
}
