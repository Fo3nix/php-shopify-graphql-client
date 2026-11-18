<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Access permissions for the definition's metaobjects.
 */
class ShopifyMetaobjectAccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectAccess";

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
