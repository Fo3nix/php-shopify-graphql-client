<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionContractFailArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["subscriptionContractId"];

    protected $subscriptionContractId;

    /**
     * The ID of the Subscription Contract.
     */
    public function setSubscriptionContractId($subscriptionContractId): static
    {
        $this->subscriptionContractId = $subscriptionContractId;

        return $this;
    }
}
