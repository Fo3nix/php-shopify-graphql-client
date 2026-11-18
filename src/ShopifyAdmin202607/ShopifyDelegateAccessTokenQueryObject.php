<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A token that delegates a set of scopes from the original permission.
 *
 * To learn more about creating delegate access tokens, refer to
 * [Delegate OAuth access tokens to subsystems](https://shopify.dev/docs/apps/build/authentication-authorization/access-tokens/use-delegate-tokens).
 */
class ShopifyDelegateAccessTokenQueryObject extends QueryObject
{
    const OBJECT_NAME = "DelegateAccessToken";

    /**
     * The list of permissions associated with the token.
     */
    public function selectAccessScopes(): static
    {
        $this->selectField("accessScopes");

        return $this;
    }

    /**
     * The issued delegate access token.
     */
    public function selectAccessToken(): static
    {
        $this->selectField("accessToken");

        return $this;
    }

    /**
     * The date and time when the delegate access token was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The number of seconds until the delegate access token expires.
     */
    public function selectExpiresIn(): static
    {
        $this->selectField("expiresIn");

        return $this;
    }
}
