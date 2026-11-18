<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftCommitArgumentsObject extends ArgumentsObject
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
