<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class SubscriptionBillingCycleInputInputObject extends InputObject
{
    protected $contractId;
    protected $selector;

    public function setContractId($contractId)
    {
        $this->contractId = $contractId;

        return $this;
    }

    public function setSelector(SubscriptionBillingCycleSelectorInputObject $subscriptionBillingCycleSelectorInputObject)
    {
        $this->selector = $subscriptionBillingCycleSelectorInputObject;

        return $this;
    }
}
