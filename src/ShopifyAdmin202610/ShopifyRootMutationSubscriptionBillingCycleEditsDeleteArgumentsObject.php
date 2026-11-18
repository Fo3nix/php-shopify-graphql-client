<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionBillingCycleEditsDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["contractId", "targetSelection"];

    protected $contractId;
    protected $targetSelection;

    /**
     * The globally-unique identifier of the subscription contract that the billing cycle belongs to.
     */
    public function setContractId($contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * Select billing cycles to be deleted.
     */
    public function setTargetSelection($shopifySubscriptionBillingCyclesTargetSelection): static
    {
        $this->targetSelection = new RawObject($shopifySubscriptionBillingCyclesTargetSelection);

        return $this;
    }
}
