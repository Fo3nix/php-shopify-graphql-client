<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerSegmentMembersArgumentsObject extends ArgumentsObject
{
    protected $segmentId;
    protected $query;
    protected $queryId;
    protected $timezone;
    protected $reverse;
    protected $sortKey;
    protected $first;
    protected $after;
    protected $last;
    protected $before;

    /**
     * The ID of the segment.
     */
    public function setSegmentId($segmentId): static
    {
        $this->segmentId = $segmentId;

        return $this;
    }

    /**
     * The query that's used to filter the members. The query is composed of a combination of conditions on facts about customers such as `email_subscription_status = 'SUBSCRIBED'` with [this syntax](https://shopify.dev/api/shopifyql/segment-query-language-reference).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }

    /**
     * The ID of the segment members query.
     */
    public function setQueryId($queryId): static
    {
        $this->queryId = $queryId;

        return $this;
    }

    /**
     * The timezone that's used to interpret relative date arguments. The timezone defaults to UTC if the timezone isn't provided.
     */
    public function setTimezone($timezone): static
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Reverse the order of the list. The sorting behaviour defaults to ascending order.
     */
    public function setReverse($reverse): static
    {
        $this->reverse = $reverse;

        return $this;
    }

    /**
     * Sort the list by a given key. Valid values:
     * • `created_at` - Sort by customer creation date
     * • `first_order_date` - Sort by the date of the customer's first order
     * • `last_abandoned_order_date` - Sort by the date of the customer's last abandoned checkout
     * • `last_order_date` - Sort by the date of the customer's most recent order
     * • `number_of_orders` - Sort by the total number of orders placed by the customer
     * • `amount_spent` - Sort by the total amount the customer has spent across all orders
     *
     * Use with the `reverse` parameter to control sort direction (ascending by default, descending when reverse=true).
     */
    public function setSortKey($sortKey): static
    {
        $this->sortKey = $sortKey;

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
}
