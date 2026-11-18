<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationSubscriptionContractUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["contractId"];

    protected $actor;
    protected $contractId;

    /**
     * The actor who initiated a subscription action.
     */
    public function setActor($shopifySubscriptionActor): static
    {
        $this->actor = new RawObject($shopifySubscriptionActor);

        return $this;
    }

    /**
     * The gid of the Subscription Contract to update.
     */
    public function setContractId($contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }
}
