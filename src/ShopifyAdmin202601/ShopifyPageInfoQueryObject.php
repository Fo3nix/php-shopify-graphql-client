<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Returns information about pagination in a connection, in accordance with the
 * [Relay specification](https://relay.dev/graphql/connections.htm#sec-undefined.PageInfo).
 * For more information, please read our [GraphQL Pagination Usage Guide](https://shopify.dev/api/usage/pagination-graphql).
 */
class ShopifyPageInfoQueryObject extends QueryObject
{
    const OBJECT_NAME = "PageInfo";

    /**
     * The cursor corresponding to the last node in edges.
     */
    public function selectEndCursor(): static
    {
        $this->selectField("endCursor");

        return $this;
    }

    /**
     * Whether there are more pages to fetch following the current page.
     */
    public function selectHasNextPage(): static
    {
        $this->selectField("hasNextPage");

        return $this;
    }

    /**
     * Whether there are any pages prior to the current page.
     */
    public function selectHasPreviousPage(): static
    {
        $this->selectField("hasPreviousPage");

        return $this;
    }

    /**
     * The cursor corresponding to the first node in edges.
     */
    public function selectStartCursor(): static
    {
        $this->selectField("startCursor");

        return $this;
    }
}
