<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftDiscountAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "input"];

    protected $draftId;
    protected $input;

    /**
     * The ID of the Subscription Contract draft to add a subscription discount to.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * The properties of the new Subscription Discount.
     */
    public function setInput(ShopifySubscriptionManualDiscountInputInputObject $shopifySubscriptionManualDiscountInputInputObject): static
    {
        $this->input = $shopifySubscriptionManualDiscountInputInputObject;

        return $this;
    }
}
