<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationStorefrontAccessTokenDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Provides the input fields required to delete a storefront access token.
     */
    public function setInput(ShopifyStorefrontAccessTokenDeleteInputInputObject $shopifyStorefrontAccessTokenDeleteInputInputObject): static
    {
        $this->input = $shopifyStorefrontAccessTokenDeleteInputInputObject;

        return $this;
    }
}
