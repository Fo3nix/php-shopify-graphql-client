<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftFreeShippingDiscountAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "input"];

    protected $draftId;
    protected $input;

    /**
     * The ID of the subscription contract draft to add a subscription free shipping discount to.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * The properties of the new subscription free shipping discount.
     */
    public function setInput(ShopifySubscriptionFreeShippingDiscountInputInputObject $shopifySubscriptionFreeShippingDiscountInputInputObject): static
    {
        $this->input = $shopifySubscriptionFreeShippingDiscountInputInputObject;

        return $this;
    }
}
