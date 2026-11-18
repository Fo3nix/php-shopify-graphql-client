<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAppRevokeAccessScopesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["scopes"];

    protected $scopes;

    /**
     * The list of scope handles to revoke.
     */
    public function setScopes(array $scopes): static
    {
        $this->scopes = $scopes;

        return $this;
    }
}
