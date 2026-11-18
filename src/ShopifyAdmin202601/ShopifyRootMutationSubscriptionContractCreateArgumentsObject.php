<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSubscriptionContractCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The properties of the new Subscription Contract.
     */
    public function setInput(ShopifySubscriptionContractCreateInputInputObject $shopifySubscriptionContractCreateInputInputObject): static
    {
        $this->input = $shopifySubscriptionContractCreateInputInputObject;

        return $this;
    }
}
