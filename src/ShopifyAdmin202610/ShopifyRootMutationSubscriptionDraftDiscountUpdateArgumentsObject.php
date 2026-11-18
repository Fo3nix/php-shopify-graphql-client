<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftDiscountUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "discountId", "input"];

    protected $draftId;
    protected $discountId;
    protected $input;

    /**
     * The ID of the Subscription Contract draft to update a subscription discount on.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * The gid of the Subscription Discount to update.
     */
    public function setDiscountId($discountId): static
    {
        $this->discountId = $discountId;

        return $this;
    }

    /**
     * The properties to update on the Subscription Discount.
     */
    public function setInput(ShopifySubscriptionManualDiscountInputInputObject $shopifySubscriptionManualDiscountInputInputObject): static
    {
        $this->input = $shopifySubscriptionManualDiscountInputInputObject;

        return $this;
    }
}
