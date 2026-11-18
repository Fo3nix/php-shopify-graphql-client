<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyShopAssignedFulfillmentOrdersArgumentsObject extends ArgumentsObject
{
    protected $assignmentStatus;
    protected $locationIds;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;

    /**
     * The assignment status of the fulfillment orders that should be returned.
     * If `assignmentStatus` argument is not provided, then
     * the query will return all assigned fulfillment orders,
     * except those that have the `CLOSED` status.
     */
    public function setAssignmentStatus($shopifyFulfillmentOrderAssignmentStatus): static
    {
        $this->assignmentStatus = new RawObject($shopifyFulfillmentOrderAssignmentStatus);

        return $this;
    }

    /**
     * Returns fulfillment orders only for certain locations, specified by a list of location IDs.
     */
    public function setLocationIds(array $locationIds): static
    {
        $this->locationIds = $locationIds;

        return $this;
    }

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
    public function setSortKey($shopifyFulfillmentOrderSortKeys): static
    {
        $this->sortKey = new RawObject($shopifyFulfillmentOrderSortKeys);

        return $this;
    }
}
