<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An app extension page for the customer account navigation menu.
 */
class ShopifyCustomerAccountAppExtensionPageQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountAppExtensionPage";

    /**
     * The UUID of the app extension.
     */
    public function selectAppExtensionUuid(): static
    {
        $this->selectField("appExtensionUuid");

        return $this;
    }

    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     */
    public function selectDefaultCursor(): static
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    /**
     * A unique, human-friendly string for the customer account page.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * The unique ID for the customer account page.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The title of the customer account page.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
