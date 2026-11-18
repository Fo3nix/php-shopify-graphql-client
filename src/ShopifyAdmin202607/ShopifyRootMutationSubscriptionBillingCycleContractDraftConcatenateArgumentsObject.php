<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionBillingCycleContractDraftConcatenateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "concatenatedBillingCycleContracts"];

    protected $draftId;
    protected $concatenatedBillingCycleContracts;

    /**
     * The gid of the Subscription Contract draft to update.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * An array of Subscription Contracts with their selected billing cycles to concatenate to the subscription draft.
     */
    public function setConcatenatedBillingCycleContracts(array $concatenatedBillingCycleContracts): static
    {
        $this->concatenatedBillingCycleContracts = $concatenatedBillingCycleContracts;

        return $this;
    }
}
