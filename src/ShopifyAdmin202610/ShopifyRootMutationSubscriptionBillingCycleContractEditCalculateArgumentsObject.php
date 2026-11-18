<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionBillingCycleContractEditCalculateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["contractId", "billingCycleSelector", "billingCycleEditInput"];

    protected $actor;
    protected $contractId;
    protected $billingCycleSelector;
    protected $billingCycleEditInput;

    /**
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

    /**
     * The ID of the subscription contract to edit.
     */
    public function setContractId($contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * Selects the billing cycle to edit, by index or date.
     */
    public function setBillingCycleSelector(ShopifySubscriptionBillingCycleSelectorInputObject $shopifySubscriptionBillingCycleSelectorInputObject): static
    {
        $this->billingCycleSelector = $shopifySubscriptionBillingCycleSelectorInputObject;

        return $this;
    }

    /**
     * The input for the single billing cycle contract edit calculation.
     */
    public function setBillingCycleEditInput(ShopifySubscriptionContractCalculationBillingCycleEditInputInputObject $shopifySubscriptionContractCalculationBillingCycleEditInputInputObject): static
    {
        $this->billingCycleEditInput = $shopifySubscriptionContractCalculationBillingCycleEditInputInputObject;

        return $this;
    }
}
