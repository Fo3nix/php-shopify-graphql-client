<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAppSubscriptionLineItemUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "cappedAmount"];

    protected $id;
    protected $cappedAmount;

    /**
     * The ID of the app subscription line item to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The new maximum amount of usage charges that can be incurred within a subscription billing interval.
     */
    public function setCappedAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->cappedAmount = $shopifyMoneyInputInputObject;

        return $this;
    }
}
