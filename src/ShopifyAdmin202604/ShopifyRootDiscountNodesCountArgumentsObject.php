<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootDiscountNodesCountArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $savedSearchId;
    protected $limit;

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | code | string | Filter by the discount code. Not supported for bulk discounts. | | | - `code:WELCOME10` |
     * | combines_with | string | Filter by the [Shopify Functions discount classes](https://shopify.dev/docs/apps/build/discounts#discount-classes) that the [discount type](https://shopify.dev/docs/api/admin-graphql/latest/queries/discountnodes#argument-query-filter-discount_type) can combine with. Supports multiple values separated by commas (e.g., combines_with:product_discounts,order_discounts). | - `order_discounts`<br/> - `product_discounts`<br/> - `shipping_discounts` | | - `combines_with:product_discounts`<br/> - `combines_with:product_discounts,order_discounts` |
     * | combines_with.product_discounts_with_tags_on_same_cart_line | string | Filter by a combines with tag applied to discounts on the same cart line. Supports multiple tags separated by commas (e.g., combines_with.product_discounts_with_tags_on_same_cart_line:priority,exclusive). | | | - `combines_with.product_discounts_with_tags_on_same_cart_line:priority`<br/> - `combines_with.product_discounts_with_tags_on_same_cart_line:priority,exclusive` |
     * | created_at | time | Filter by the date and time, in the shop's timezone, when the discount was created. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<='2024'` |
     * | discount_class | string | Filter by the [discount class](https://shopify.dev/docs/apps/build/discounts#discount-classes). Supports multiple classes separated by commas (e.g., discount_class:product,order). | - `order`<br/> - `product`<br/> - `shipping` | | - `discount_class:product`<br/> - `discount_class:product,order` |
     * | discount_type | string | Filter by the [discount type](https://help.shopify.com/manual/discounts/discount-types). Supports multiple types separated by commas (e.g., discount_type:percentage,fixed_amount). | - `app`<br/> - `bogo`<br/> - `fixed_amount`<br/> - `free_shipping`<br/> - `percentage` | | - `discount_type:fixed_amount`<br/> - `discount_type:percentage,fixed_amount` |
     * | ends_at | time | Filter by the date and time, in the shop's timezone, when the discount ends. | | | - `ends_at:>'2020-10-21T23:39:20Z'`<br/> - `ends_at:<now`<br/> - `ends_at:<='2024'` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | method | string | Filter by the [discount method](https://shopify.dev/docs/apps/build/discounts#discount-methods). Supports multiple methods separated by commas (e.g., method:code,automatic). | - `automatic`<br/> - `code` | | - `method:code`<br/> - `method:code,automatic` |
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
     * The ID of an existing saved search.
     * The search’s query string is used as the query argument.
     * Refer to the [`SavedSearch`](https://shopify.dev/api/admin-graphql/latest/objects/savedsearch) object.
     */
    public function setSavedSearchId($savedSearchId): static
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }

    /**
     * The upper bound on count value before returning a result. Use `null` to have no limit.
     */
    public function setLimit($limit): static
    {
        $this->limit = $limit;

        return $this;
    }
}
