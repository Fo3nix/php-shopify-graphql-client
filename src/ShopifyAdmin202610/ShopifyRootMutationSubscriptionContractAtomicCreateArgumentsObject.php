<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionContractAtomicCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The properties of the new Subscription Contract.
     */
    public function setInput(ShopifySubscriptionContractAtomicCreateInputInputObject $shopifySubscriptionContractAtomicCreateInputInputObject): static
    {
        $this->input = $shopifySubscriptionContractAtomicCreateInputInputObject;

        return $this;
    }
}
