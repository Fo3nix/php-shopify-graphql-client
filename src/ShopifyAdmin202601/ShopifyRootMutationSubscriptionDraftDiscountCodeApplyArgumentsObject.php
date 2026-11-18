<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionDraftDiscountCodeApplyArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["draftId", "redeemCode"];

    protected $draftId;
    protected $redeemCode;

    /**
     * The gid of the subscription contract draft to apply a subscription code discount on.
     */
    public function setDraftId($draftId): static
    {
        $this->draftId = $draftId;

        return $this;
    }

    /**
     * Code discount redeem code.
     */
    public function setRedeemCode($redeemCode): static
    {
        $this->redeemCode = $redeemCode;

        return $this;
    }
}
