<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDelegateAccessTokenCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for creating a delegate access token.
     */
    public function setInput(ShopifyDelegateAccessTokenInputInputObject $shopifyDelegateAccessTokenInputInputObject): static
    {
        $this->input = $shopifyDelegateAccessTokenInputInputObject;

        return $this;
    }
}
