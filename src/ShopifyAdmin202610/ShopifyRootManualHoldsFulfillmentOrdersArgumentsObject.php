<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootManualHoldsFulfillmentOrdersArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    /**
     * The query conditions used to filter fulfillment orders. Only fulfillment orders corresponding to orders matching the query will be counted.
     * Supported filter parameters:
     *  - `order_financial_status`
     *  - `order_risk_level`
     *  - `shipping_address_coordinates_validated`
     *
     * See the detailed [search syntax](https://shopify.dev/api/usage/search-syntax)
     * for more information about using filters.
     */
    public function setQuery($query): static
    {
        $this->query = $query;

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
}
