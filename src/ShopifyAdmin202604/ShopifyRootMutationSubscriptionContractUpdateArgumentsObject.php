<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionContractUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["contractId"];

    protected $contractId;

    /**
     * The gid of the Subscription Contract to update.
     */
    public function setContractId($contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }
}
