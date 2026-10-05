<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

class ShopifySubscriptionBillingCycleInputInputObject extends InputObject
{
    protected $contractId;
    protected $selector;

    public function setContractId($contractId)
    {
        $this->contractId = $contractId;

        return $this;
    }

    public function setSelector(ShopifySubscriptionBillingCycleSelectorInputObject $shopifySubscriptionBillingCycleSelectorInputObject)
    {
        $this->selector = $shopifySubscriptionBillingCycleSelectorInputObject;

        return $this;
    }
}
