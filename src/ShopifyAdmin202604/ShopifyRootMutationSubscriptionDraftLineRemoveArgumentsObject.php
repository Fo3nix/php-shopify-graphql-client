<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftLineRemoveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "lineId"];

    protected $draftId;
    protected $lineId;

    /**
     * The gid of the Subscription Contract draft to remove a subscription line from.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * The gid of the Subscription Line to remove.
     */
    public function setLineId($lineId): static
    {
        $this->lineId = $lineId;

        return $this;
    }
}
