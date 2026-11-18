<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A token that delegates unauthenticated access scopes to clients that need to access the [Storefront API](https://shopify.dev/docs/api/storefront). Storefront access tokens enable headless storefronts and custom applications to interact with a store on behalf of customers without requiring authentication.
 *
 * The token provides specific permissions, such as reading [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) data, managing carts, or creating [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) accounts. An app can have a maximum of 100 active storefront access tokens for each [`Shop`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Shop).
 *
 * Learn more about [building with the Storefront API](https://shopify.dev/docs/storefronts/headless/building-with-the-storefront-api/getting-started).
 */
class ShopifyStorefrontAccessTokenQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessToken";

    /**
     * List of permissions associated with the token.
     */
    public function selectAccessScopes(?ShopifyStorefrontAccessTokenAccessScopesArgumentsObject $argsObject = null): ShopifyAccessScopeQueryObject
    {
        $object = new ShopifyAccessScopeQueryObject("accessScopes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The issued public access token.
     */
    public function selectAccessToken(): static
    {
        $this->selectField("accessToken");

        return $this;
    }

    /**
     * The date and time when the public access token was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * An arbitrary title for each token determined by the developer, used for reference         purposes.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The date and time when the storefront access token was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
