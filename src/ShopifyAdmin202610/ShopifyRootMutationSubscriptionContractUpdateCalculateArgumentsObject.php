<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionContractUpdateCalculateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["contractId", "contractUpdateInput"];

    protected $actor;
    protected $contractId;
    protected $contractUpdateInput;

    /**
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

    /**
     * The ID of the subscription contract to update.
     */
    public function setContractId($contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * The input for the subscription contract update calculation.
     */
    public function setContractUpdateInput(ShopifySubscriptionContractCalculationContractUpdateInputInputObject $shopifySubscriptionContractCalculationContractUpdateInputInputObject): static
    {
        $this->contractUpdateInput = $shopifySubscriptionContractCalculationContractUpdateInputInputObject;

        return $this;
    }
}
