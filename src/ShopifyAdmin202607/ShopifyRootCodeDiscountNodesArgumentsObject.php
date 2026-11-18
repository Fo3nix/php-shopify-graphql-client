<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootCodeDiscountNodesArgumentsObject extends ArgumentsObject
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
    public function setSortKey($shopifyCodeDiscountSortKeys): static
    {
        $this->sortKey = new RawObject($shopifyCodeDiscountSortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | combines_with | string | Filter by the [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations) that you can use in combination with [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types). | - `order_discounts`<br/> - `product_discounts`<br/> - `shipping_discounts` | | - `combines_with:product_discounts` |
     * | combines_with.product_discounts_with_tags_on_same_cart_line | string | Filter by a combines with tag applied to discounts on the same cart line. Supports multiple tags separated by commas (e.g., combines_with.product_discounts_with_tags_on_same_cart_line:priority,exclusive). | | | - `combines_with.product_discounts_with_tags_on_same_cart_line:priority`<br/> - `combines_with.product_discounts_with_tags_on_same_cart_line:priority,exclusive` |
     * | created_at | time | Filter by the date and time when the discount was created. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<='2024'` |
     * | discount_type | string | Filter by the [discount type](https://help.shopify.com/manual/discounts/discount-types). | - `app`<br/> - `bogo`<br/> - `fixed_amount`<br/> - `free_shipping`<br/> - `percentage` | | - `discount_type:fixed_amount` |
     * | ends_at | time | Filter by the date and time when the discount expires and is no longer available for customer use. | | | - `ends_at:>'2020-10-21T23:39:20Z'`<br/> - `ends_at:<now`<br/> - `ends_at:<='2024'` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | starts_at | time | Filter by the date and time, in the shop's timezone, when the discount becomes active and is available for customer use. | | | - `starts_at:>'2020-10-21T23:39:20Z'`<br/> - `starts_at:<now`<br/> - `starts_at:<='2024'` |
     * | status | string | Filter by the status of the discount. | - `active`<br/> - `expired`<br/> - `scheduled` | | - `status:scheduled` |
     * | tag | string | Filter by a tag applied to the discount. | | | - `tag:loyalty`<br/> - `tag:clearance` |
     * | times_used | integer | Filter by the number of times the discount has been used. For example, if a "Buy 3, Get 1 Free" t-shirt discount is automatically applied in 200 transactions, then the discount has been used 200 times. <br><br> This value is updated asynchronously. As a result, it might be different than the actual usage count. | | | - `times_used:0`<br/> - `times_used:>150`<br/> - `times_used:>=200` |
     * | title | string | Filter by the discount name that displays to customers. | | | - `title:Black Friday Sale` |
     * | type | string | Filter by the [discount type](https://help.shopify.com/manual/discounts/discount-types). | - `all`<br/> - `all_with_app`<br/> - `app`<br/> - `bxgy`<br/> - `fixed_amount`<br/> - `free_shipping`<br/> - `percentage` | | - `type:percentage` |
     * | updated_at | time | Filter by the date and time when the discount was last updated. | | | - `updated_at:>'2020-10-21T23:39:20Z'`<br/> - `updated_at:<now`<br/> - `updated_at:<='2024'` |
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
