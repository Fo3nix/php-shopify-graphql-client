<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying the subscription contract and selecting the associated billing cycle.
 */
class ShopifySubscriptionBillingCycleInputInputObject extends InputObject
{
    const REQUIRED = ["contractId", "selector"];

    protected $contractId;
    protected $selector;

    /**
     * The ID of the subscription contract associated with the billing cycle.
     */
    public function setContractId($contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * Selects the billing cycle by date or index.
     */
    public function setSelector(ShopifySubscriptionBillingCycleSelectorInputObject $shopifySubscriptionBillingCycleSelectorInputObject): static
    {
        $this->selector = $shopifySubscriptionBillingCycleSelectorInputObject;

        return $this;
    }
}
