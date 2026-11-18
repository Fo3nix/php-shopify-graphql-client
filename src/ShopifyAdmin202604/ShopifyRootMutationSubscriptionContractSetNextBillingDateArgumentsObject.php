<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionContractSetNextBillingDateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["contractId", "date"];

    protected $contractId;
    protected $date;

    /**
     * The gid of the Subscription Contract to set the next billing date for.
     */
    public function setContractId($contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * The next billing date.
     */
    public function setDate($date): static
    {
        $this->date = $date;

        return $this;
    }
}
