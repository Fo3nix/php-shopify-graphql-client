<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationStorefrontAccessTokenCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Provides the input fields for creating a storefront access token.
     */
    public function setInput(ShopifyStorefrontAccessTokenInputInputObject $shopifyStorefrontAccessTokenInputInputObject): static
    {
        $this->input = $shopifyStorefrontAccessTokenInputInputObject;

        return $this;
    }
}
