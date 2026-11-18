<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an error that happens while revoking a granted scope.
 */
class ShopifyAppRevokeAccessScopesAppRevokeScopeErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevokeAccessScopesAppRevokeScopeError";

    /**
     * The error code.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The path to the input field that caused the error.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * The error message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
