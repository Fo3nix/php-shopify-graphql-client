<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDelegateAccessTokenDestroyArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["accessToken"];

    protected $accessToken;

    /**
     * Provides the delegate access token to destroy.
     */
    public function setAccessToken($accessToken): static
    {
        $this->accessToken = $accessToken;

        return $this;
    }
}
