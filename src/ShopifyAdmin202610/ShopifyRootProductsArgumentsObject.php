<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootProductsArgumentsObject extends ArgumentsObject
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
    public function setSortKey($shopifyProductSortKeys): static
    {
        $this->sortKey = new RawObject($shopifyProductSortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | barcode | string | Filter by the product variant [`barcode`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-barcode) field. | | | - `barcode:ABC-abc-1234` |
     * | bundles | boolean | Filter by a [product bundle](https://shopify.dev/docs/apps/build/product-merchandising/bundles). A product bundle is a set of two or more related products, which are commonly offered at a discount. | | | - `bundles:true` |
     * | category_id | string | Filter by the product [category ID](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-category) (`product.category.id`). A product category is the category of a product from [Shopify's Standard Product Taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17). | | | - `category_id:sg-4-17-2-17` |
     * | collection_id | id | Filter by the collection [`id`](https://shopify.dev/api/admin-graphql/latest/objects/Collection#field-id) field. | | | - `collection_id:108179161409` |
     * | combined_listing_role | string | Filter by the role of the product in a [combined listing](https://shopify.dev/apps/build/product-merchandising/combined-listings). | - `parent`<br/> - `child`<br/> - `no_role` | | - `combined_listing_role:parent` |
     * | created_at | time | Filter by the date and time when the product was created. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<='2024'` |
     * | delivery_profile_id | id | Filter by the delivery profile [`id`](https://shopify.dev/api/admin-graphql/latest/objects/DeliveryProfile#field-id) field. | | | - `delivery_profile_id:108179161409` |
     * | error_feedback | string | Filter by products with publishing errors. |
     * | gift_card | boolean | Filter by the product [`isGiftCard`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-isgiftcard) field. | | | - `gift_card:true` |
     * | handle | string | Filter by a comma-separated list of product [handles](https://shopify.dev/api/admin-graphql/latest/queries/products#argument-query-filter-handle). | | | - `handle:the-minimal-snowboard` |
     * | has_only_composites | boolean | Filter by products that have only composite variants. | | | - `has_only_composites:true` |
     * | has_only_default_variant | boolean | Filter by products that have only a default variant. A default variant is the only variant if no other variants are specified. | | | - `has_only_default_variant:true` |
     * | has_variant_with_components | boolean | Filter by products that have variants with associated components. | | | - `has_variant_with_components:true` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | inventory_total | integer | Filter by inventory count. | | | - `inventory_total:0`<br/> - `inventory_total:>150`<br/> - `inventory_total:>=200` |
     * | is_price_reduced | boolean | Filter by products that have a reduced price. For more information, refer to the [`CollectionRule`](https://shopify.dev/api/admin-graphql/latest/objects/CollectionRule) object. | | | - `is_price_reduced:true` |
     * | metafields.{namespace}.{key} | mixed | Filters resources by metafield value. Format: `metafields.{namespace}.{key}:{value}`. Learn more about [querying by metafield value](https://shopify.dev/apps/build/custom-data/metafields/query-by-metafield-value). | | | - `metafields.custom.on_sale:true`<br/> - `metafields.product.material:"gid://shopify/Metaobject/43458085"` |
     * | out_of_stock_somewhere | boolean | Filter by products that are out of stock in at least one location. | | | - `out_of_stock_somewhere:true` |
     * | price | bigdecimal | Filter by the product variant [`price`](https://shopify.dev/api/admin-graphql/latest/objects/Productvariant#field-price) field. | | | - `price:100.57` |
     * | product_configuration_owner | string | Filter by the app [`id`](https://shopify.dev/api/admin-graphql/latest/objects/App#field-id) field. | | | - `product_configuration_owner:10001` |
     * | product_publication_status | string | Filter by channel approval process status of the resource on a channel, such as the online store. The value is a composite of the [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`) and one of the valid values. For simple visibility checks, use [published_status](https://shopify.dev/api/admin-graphql/latest/queries/products#argument-query-filter-published_status) instead. | - `* {channel_app_id}-approved`<br/> - `* {channel_app_id}-rejected`<br/> - `* {channel_app_id}-needs_action`<br/> - `* {channel_app_id}-awaiting_review`<br/> - `* {channel_app_id}-published`<br/> - `* {channel_app_id}-demoted`<br/> - `* {channel_app_id}-scheduled`<br/> - `* {channel_app_id}-provisionally_published` | | - `product_publication_status:189769876-approved` |
     * | product_type | string | Filter by a comma-separated list of [product types](https://help.shopify.com/manual/products/details/product-type). | | | - `product_type:snowboard` |
     * | publication_ids | string | Filter by a comma-separated list of publication IDs that are associated with the product. | | | - `publication_ids:184111530305,184111694145` |
     * | publishable_status | string | **Deprecated:** This parameter is deprecated as of 2025-12 and will be removed in a future API version. Use [published_status](https://shopify.dev/api/admin-graphql/latest/queries/products#argument-query-filter-published_status) for visibility checks. Filter by the publishable status of the resource on a channel. The value is a composite of the [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`) and one of the valid status values. | - `* {channel_app_id}-unset`<br/> - `* {channel_app_id}-pending`<br/> - `* {channel_app_id}-approved`<br/> - `* {channel_app_id}-not_approved` | | - `publishable_status:580111-unset`<br/> - `publishable_status:580111-pending` |
     * | published_at | time | Filter by the date and time when the product was published to the online store and other sales channels. | | | - `published_at:>'2020-10-21T23:39:20Z'`<br/> - `published_at:<now`<br/> - `published_at:<=2024` |
     * | published_status | string | Filter resources by their visibility and publication state on a channel. Online store channel filtering: - `online_store_channel`: Returns all resources in the online store channel, regardless of publication status. - `published`/`visible`: Returns resources that are published to the online store. - `unpublished`: Returns resources that are not published to the online store. Channel-specific filtering using a channel ID, channel handle, [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`), or app handle with suffixes: - `{id_or_handle}-published`: Returns resources published to the specified channel. - `{id_or_handle}-visible`: Same as `{id_or_handle}-published` (kept for backwards compatibility). - `{id_or_handle}-intended`: Returns resources added to the channel but not yet published. - `{id_or_handle}-hidden`: Returns resources not added to the channel or not published. The `online_store_channel` value applies only to the online store; other channels use the suffix format above. For example, the Point of Sale channel has the app handle `pos` and the `Channel.app.id` `129785`, so `pos-published` and `129785-published` both return resources published to Point of Sale. Other: - `unavailable`: Returns resources not published to any channel. | - `online_store_channel`<br/> - `published`<br/> - `visible`<br/> - `unpublished`<br/> - `* {channel_id_or_handle}-published`<br/> - `* {channel_id_or_handle}-visible`<br/> - `* {channel_id_or_handle}-intended`<br/> - `* {channel_id_or_handle}-hidden`<br/> - `* {channel_app_id_or_handle}-published`<br/> - `* {channel_app_id_or_handle}-visible`<br/> - `* {channel_app_id_or_handle}-intended`<br/> - `* {channel_app_id_or_handle}-hidden`<br/> - `unavailable` | | - `published_status:online_store_channel`<br/> - `published_status:published`<br/> - `published_status:580111-published`<br/> - `published_status:580111-hidden`<br/> - `published_status:pos-published`<br/> - `published_status:129785-published`<br/> - `published_status:my-channel-handle-published`<br/> - `published_status:unavailable` |
     * | sku | string | Filter by the product variant [`sku`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-sku) field. [Learn more about SKUs](https://help.shopify.com/manual/products/details/sku). | | | - `sku:XYZ-12345` |
     * | status | string | Filter by a comma-separated list of statuses. You can use statuses to manage inventory. Shopify only displays products with an `ACTIVE` status in online stores, sales channels, and apps. | - `active`<br/> - `archived`<br/> - `draft`<br/> - `unlisted` | `active` | - `status:active,draft` |
     * | tag | string | Filter objects by the `tag` field. | | | - `tag:my_tag` |
     * | tag_not | string | Filter by objects that don’t have the specified tag. | | | - `tag_not:my_tag` |
     * | title | string | Filter by the product [`title`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-title) field. | | | - `title:The Minimal Snowboard` |
     * | tracks_inventory | boolean | Filter by products that have [inventory tracking](https://help.shopify.com/manual/products/inventory/getting-started-with-inventory/set-up-inventory-tracking) enabled. | | | - `tracks_inventory:true` |
     * | updated_at | time | Filter by the date and time when the product was last updated. | | | - `updated_at:>'2020-10-21T23:39:20Z'`<br/> - `updated_at:<now`<br/> - `updated_at:<='2024'` |
     * | variant_id | id | Filter by the product variant [`id`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-id) field. | | | - `variant_id:45779434701121` |
     * | variant_title | string | Filter by the product variant [`title`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-title) field. | | | - `variant_title:'Special ski wax'` |
     * | vendor | string | Filter by the origin or source of the product. Learn more about [vendors and managing vendor information](https://help.shopify.com/manual/products/managing-vendor-info). | | | - `vendor:Snowdevil`<br/> - `vendor:Snowdevil OR vendor:Icedevil` |
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
