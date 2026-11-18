<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftLineUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "lineId", "input"];

    protected $draftId;
    protected $lineId;
    protected $input;

    /**
     * The gid of the Subscription Contract draft to update a subscription line from.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * The gid of the Subscription Line to update.
     */
    public function setLineId($lineId): static
    {
        $this->lineId = $lineId;

        return $this;
    }

    /**
     * The properties of the new Subscription Line.
     */
    public function setInput(ShopifySubscriptionLineUpdateInputInputObject $shopifySubscriptionLineUpdateInputInputObject): static
    {
        $this->input = $shopifySubscriptionLineUpdateInputInputObject;

        return $this;
    }
}
