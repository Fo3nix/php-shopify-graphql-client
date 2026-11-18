<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionContractPauseArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["subscriptionContractId"];

    protected $actor;
    protected $subscriptionContractId;

    /**
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

    /**
     * The ID of the Subscription Contract.
     */
    public function setSubscriptionContractId($subscriptionContractId): static
    {
        $this->subscriptionContractId = $subscriptionContractId;

        return $this;
    }
}
