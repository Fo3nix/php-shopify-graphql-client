<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootSubscriptionContractsArgumentsObject extends ArgumentsObject
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
    public function setSortKey($shopifySubscriptionContractsSortKeys): static
    {
        $this->sortKey = new RawObject($shopifySubscriptionContractsSortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | created_at | time |
     * | customer_id | id | Filter subscription contracts by the customer [`id`](https://shopify.dev/api/admin-graphql/latest/objects/Customer#field-Customer.fields.id) field. | | | - `customer_id:123` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | last_billing_attempt_error_type | string |
     * | product_id | id | Filter subscription contracts by the [`id`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-Product.fields.id) of any product on the contract's lines. | | | - `product_id:123` |
     * | product_variant_id | id | Filter subscription contracts by the [`id`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-ProductVariant.fields.id) of any product variant on the contract's lines. | | | - `product_variant_id:123` |
     * | selling_plan_id | id | Filter subscription contracts by the [`id`](https://shopify.dev/api/admin-graphql/latest/objects/SellingPlan#field-SellingPlan.fields.id) of the selling plan on any of the contract's lines. | | | - `selling_plan_id:123` |
     * | status | string |
     * | updated_at | time |
     * You can apply one or more filters to a query. Learn more about [Shopify API search syntax](https://shopify.dev/api/usage/search-syntax).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
