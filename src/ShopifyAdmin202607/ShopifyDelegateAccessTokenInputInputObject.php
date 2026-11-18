<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a delegate access token.
 */
class ShopifyDelegateAccessTokenInputInputObject extends InputObject
{
    const REQUIRED = ["delegateAccessScope"];

    protected $delegateAccessScope;
    protected $expiresIn;

    /**
     * The list of scopes that will be delegated to the new access token.
     */
    public function setDelegateAccessScope(array $delegateAccessScope): static
    {
        $this->delegateAccessScope = $delegateAccessScope;

        return $this;
    }

    /**
     * The amount of time, in seconds, after which the delegate access token is no longer valid.
     */
    public function setExpiresIn($expiresIn): static
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }
}
