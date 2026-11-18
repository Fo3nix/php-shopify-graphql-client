<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Access permissions for the definition's metafields.
 */
class ShopifyMetafieldAccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldAccess";

    /**
     * The access permitted on the Admin API.
     */
    public function selectAdmin(): static
    {
        $this->selectField("admin");

        return $this;
    }

    /**
     * The access permitted on the Customer Account API.
     */
    public function selectCustomerAccount(): static
    {
        $this->selectField("customerAccount");

        return $this;
    }

    /**
     * The access permitted on the Storefront API.
     */
    public function selectStorefront(): static
    {
        $this->selectField("storefront");

        return $this;
    }
}
