<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootAutomaticDiscountNodesArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;
    protected $savedSearchId;

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
    public function setSortKey($shopifyAutomaticDiscountSortKeys): static
    {
        $this->sortKey = new RawObject($shopifyAutomaticDiscountSortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | combines_with.product_discounts_with_tags_on_same_cart_line | string | Filter by a combines with tag applied to discounts on the same cart line. Supports multiple tags separated by commas (e.g., combines_with.product_discounts_with_tags_on_same_cart_line:priority,exclusive). | | | - `combines_with.product_discounts_with_tags_on_same_cart_line:priority`<br/> - `combines_with.product_discounts_with_tags_on_same_cart_line:priority,exclusive` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | status | string | Filter by the discount status. | - `active`<br/> - `expired`<br/> - `scheduled` | | - `status:scheduled` |
     * | tag | string | Filter by a tag applied to the discount. | | | - `tag:loyalty`<br/> - `tag:clearance` |
     * | type | string | Filter by the [discount type](https://help.shopify.com/manual/discounts/discount-types). | - `all`<br/> - `all_with_app`<br/> - `app`<br/> - `bxgy`<br/> - `fixed_amount`<br/> - `percentage` | | - `type:bxgy` |
     * You can apply one or more filters to a query. Learn more about [Shopify API search syntax](https://shopify.dev/api/usage/search-syntax).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }

    /**
     * The ID of a [saved search](https://shopify.dev/api/admin-graphql/latest/objects/savedsearch#field-id).
     * The search’s query string is used as the query argument.
     */
    public function setSavedSearchId($savedSearchId): static
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }
}
