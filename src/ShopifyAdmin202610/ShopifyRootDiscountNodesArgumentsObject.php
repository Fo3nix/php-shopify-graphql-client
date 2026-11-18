<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootDiscountNodesArgumentsObject extends ArgumentsObject
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
    public function setSortKey($shopifyDiscountSortKeys): static
    {
        $this->sortKey = new RawObject($shopifyDiscountSortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | code | string | Filter by the discount code. Not supported for bulk discounts. | | | - `code:WELCOME10` |
     * | combines_with | string | Filter by the [Shopify Functions discount classes](https://shopify.dev/docs/apps/build/discounts#discount-classes) that the [discount type](https://shopify.dev/docs/api/admin-graphql/latest/queries/discountnodes#argument-query-filter-discount_type) can combine with. Supports multiple values separated by commas (e.g., combines_with:product_discounts,order_discounts). | - `order_discounts`<br/> - `product_discounts`<br/> - `shipping_discounts` | | - `combines_with:product_discounts`<br/> - `combines_with:product_discounts,order_discounts` |
     * | combines_with.product_discounts_with_tags_on_same_cart_line | string | Filter by a combines with tag applied to discounts on the same cart line. Supports multiple tags separated by commas (e.g., combines_with.product_discounts_with_tags_on_same_cart_line:priority,exclusive). | | | - `combines_with.product_discounts_with_tags_on_same_cart_line:priority`<br/> - `combines_with.product_discounts_with_tags_on_same_cart_line:priority,exclusive` |
     * | context | string | Filter by the context type. Supports multiple values separated by commas (e.g., context:all,market). When multiple values are provided, results include discounts that match any of them. | - `all`<br/> - `customer`<br/> - `segment`<br/> - `market` | | - `context:segment`<br/> - `context:all,market` |
     * | created_at | time | Filter by the date and time, in the shop's timezone, when the discount was created. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<='2024'` |
     * | customer_ids | string | Filter by specific customer IDs that are eligible for the discount. | | | - `customer_ids:123456789`<br/> - `customer_ids:123,456` |
     * | discount_class | string | Filter by the [discount class](https://shopify.dev/docs/apps/build/discounts#discount-classes). Supports multiple classes separated by commas (e.g., discount_class:product,order). | - `order`<br/> - `product`<br/> - `shipping` | | - `discount_class:product`<br/> - `discount_class:product,order` |
     * | discount_type | string | Filter by the [discount type](https://help.shopify.com/manual/discounts/discount-types). Supports multiple types separated by commas (e.g., discount_type:percentage,fixed_amount). | - `app`<br/> - `bogo`<br/> - `fixed_amount`<br/> - `free_shipping`<br/> - `percentage` | | - `discount_type:fixed_amount`<br/> - `discount_type:percentage,fixed_amount` |
     * | ends_at | time | Filter by the date and time, in the shop's timezone, when the discount ends. | | | - `ends_at:>'2020-10-21T23:39:20Z'`<br/> - `ends_at:<now`<br/> - `ends_at:<='2024'` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | market_ids | string | Filter by specific market IDs that are eligible for the discount. Supports multiple IDs separated by commas (e.g., market_ids:123,456). | | | - `market_ids:123456789`<br/> - `market_ids:123,456` |
     * | method | string | Filter by the [discount method](https://shopify.dev/docs/apps/build/discounts#discount-methods). Supports multiple methods separated by commas (e.g., method:code,automatic). | - `automatic`<br/> - `code` | | - `method:code`<br/> - `method:code,automatic` |
     * | segment_ids | string | Filter by specific segment IDs that are eligible for the discount. Supports multiple IDs separated by commas (e.g., segment_ids:123,456). | | | - `segment_ids:123456789`<br/> - `segment_ids:123,456` |
     * | starts_at | time | Filter by the date and time, in the shop's timezone, when the discount becomes active and is available for customer use. | | | - `starts_at:>'2020-10-21T23:39:20Z'`<br/> - `starts_at:<now`<br/> - `starts_at:<='2024'` |
     * | status | string | Filter by the status of the discount. Supports multiple statuses separated by commas (e.g., status:active,scheduled). | - `active`<br/> - `expired`<br/> - `scheduled` | | - `status:scheduled`<br/> - `status:active,scheduled` |
     * | tag | string | Filter by a tag applied to the discount. Supports multiple tags separated by commas (e.g., tag:loyalty,clearance). | | | - `tag:loyalty`<br/> - `tag:loyalty,clearance` |
     * | times_used | integer | Filter by the number of times the discount has been used. For example, if a "Buy 3, Get 1 Free" t-shirt discount is automatically applied in 200 transactions, then the discount has been used 200 times. <br><br> This value is updated asynchronously. As a result, it might be different than the actual usage count. | | | - `times_used:0`<br/> - `times_used:>150`<br/> - `times_used:>=200` |
     * | title | string | Filter by the discount name that displays to merchants in the Shopify admin and to customers. | | | - `title:Black Friday Sale` |
     * | type | string | Filter by the [discount type](https://help.shopify.com/manual/discounts/discount-types). Supports multiple types separated by commas (e.g., type:percentage,fixed_amount). | - `all`<br/> - `all_with_app`<br/> - `app`<br/> - `bxgy`<br/> - `fixed_amount`<br/> - `free_shipping`<br/> - `percentage` | | - `type:percentage`<br/> - `type:percentage,fixed_amount` |
     * | updated_at | time | Filter by the date and time, in the shop's timezone, when the discount was last updated. | | | - `updated_at:>'2020-10-21T23:39:20Z'`<br/> - `updated_at:<now`<br/> - `updated_at:<='2024'` |
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
