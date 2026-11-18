<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootCarrierServicesArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;

    /**
     * The first `n` elements from the [paginated list](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }

    /**
     * The elements that come after the specified [cursor](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setAfter($after): static
    {
        $this->after = $after;

        return $this;
    }

    /**
     * The last `n` elements from the [paginated list](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setLast($last): static
    {
        $this->last = $last;

        return $this;
    }

    /**
     * The elements that come before the specified [cursor](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function setBefore($before): static
    {
        $this->before = $before;

        return $this;
    }

    /**
     * Reverse the order of the underlying list.
     */
    public function setReverse($reverse): static
    {
        $this->reverse = $reverse;

        return $this;
    }

    /**
     * Sort the underlying list using a key. If your query is slow or returns an error, then [try specifying a sort key that matches the field used in the search](https://shopify.dev/api/usage/pagination-graphql#search-performance-considerations).
     */
    public function setSortKey($shopifyCarrierServiceSortKeys): static
    {
        $this->sortKey = new RawObject($shopifyCarrierServiceSortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | active | boolean |
     * | created_at | time | Filter by creation date and time. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<='2024'` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * You can apply one or more filters to a query. Learn more about [Shopify API search syntax](https://shopify.dev/api/usage/search-syntax).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
