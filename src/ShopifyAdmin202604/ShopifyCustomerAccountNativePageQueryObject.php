<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A native page for the customer account navigation menu.
 */
class ShopifyCustomerAccountNativePageQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountNativePage";

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
     * The type of customer account native page.
     */
    public function selectPageType(): static
    {
        $this->selectField("pageType");

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
