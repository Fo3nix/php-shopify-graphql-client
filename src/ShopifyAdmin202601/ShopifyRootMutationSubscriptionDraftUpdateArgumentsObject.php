<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "input"];

    protected $draftId;
    protected $input;

    /**
     * The gid of the Subscription Draft to update.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * The properties of the new Subscription Contract.
     */
    public function setInput(ShopifySubscriptionDraftInputInputObject $shopifySubscriptionDraftInputInputObject): static
    {
        $this->input = $shopifySubscriptionDraftInputInputObject;

        return $this;
    }
}
