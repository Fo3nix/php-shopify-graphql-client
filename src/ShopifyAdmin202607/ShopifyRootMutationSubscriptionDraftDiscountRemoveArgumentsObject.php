<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftDiscountRemoveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "discountId"];

    protected $draftId;
    protected $discountId;

    /**
     * The gid of the subscription contract draft to remove a subscription discount from.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * The gid of the subscription draft discount to remove.
     */
    public function setDiscountId($discountId): static
    {
        $this->discountId = $discountId;

        return $this;
    }
}
