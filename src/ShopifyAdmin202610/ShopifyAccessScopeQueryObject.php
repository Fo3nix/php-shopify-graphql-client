<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A permission that controls access to [GraphQL Admin API](https://shopify.dev/docs/api/usage/access-scopes#authenticated-access-scopes) or [Storefront API](https://shopify.dev/docs/api/usage/access-scopes#unauthenticated-access-scopes) types. Each scope defines what data an [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) can read or write, following the format `{action}_{resource}` where action is typically "read" or "write".
 *
 * Apps declare required and optional access scopes in their configuration. During installation, merchants review and grant these permissions, determining what shop data the app can access. The granted scopes remain active until the merchant uninstalls the app or revokes them. Apps can programmatically revoke their own dynamically granted optional scopes using [`appRevokeAccessScopes`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/appRevokeAccessScopes).
 */
class ShopifyAccessScopeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AccessScope";

    /**
     * A description of the actions that the access scope allows an app to perform.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * A readable string that represents the access scope. The string usually follows the format `{action}_{resource}`. `{action}` is `read` or `write`, and `{resource}` is the resource that the action can be performed on. `{action}` and `{resource}` are separated by an underscore. For example, `read_orders` or `write_products`.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }
}
