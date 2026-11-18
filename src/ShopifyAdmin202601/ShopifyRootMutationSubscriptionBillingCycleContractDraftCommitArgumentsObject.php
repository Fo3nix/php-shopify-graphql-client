<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionBillingCycleContractDraftCommitArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId"];

    protected $draftId;

    /**
     * The gid of the Subscription Contract draft to commit.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }
}
