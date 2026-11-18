<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftLineAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "input"];

    protected $draftId;
    protected $input;

    /**
     * The gid of the Subscription Contract draft to add a subscription line to.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * The properties of the new Subscription Line.
     */
    public function setInput(ShopifySubscriptionLineInputInputObject $shopifySubscriptionLineInputInputObject): static
    {
        $this->input = $shopifySubscriptionLineInputInputObject;

        return $this;
    }
}
