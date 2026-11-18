<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyShopProductVariantsArgumentsObject extends ArgumentsObject
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
    public function setSortKey($shopifyProductVariantSortKeys): static
    {
        $this->sortKey = new RawObject($shopifyProductVariantSortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | barcode | string | Filter by the product variant [`barcode`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-barcode) field. | | | - `barcode:ABC-abc-123` |
     * | collection | string | Filter by the [ID of the collection](https://shopify.dev/api/admin-graphql/latest/objects/Collection#field-id) that the product variant belongs to. | | | - `collection:465903092033` |
     * | created_at | time | Filter by creation date and time. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<='2024'` |
     * | delivery_profile_id | id | Filter by the product variant [delivery profile ID](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-deliveryprofile) (`ProductVariant.deliveryProfile.id`). | | | - `delivery_profile_id:108179161409` |
     * | exclude_composite | boolean | Filter by product variants that aren't composites. | | | - `exclude_composite:true` |
     * | exclude_variants_with_components | boolean | Filter by whether there are [components](https://shopify.dev/docs/apps/build/product-merchandising/bundles/add-product-fixed-bundle) that are associated with the product variants in a bundle. | | | - `exclude_variants_with_components:true` |
     * | gift_card | boolean | Filter by the product [`isGiftCard`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-isgiftcard) field. | | | - `gift_card:true` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | inventory_quantity | integer | Filter by an aggregate of inventory across all locations where the product variant is stocked. | | | - `inventory_quantity:10` |
     * | location_id | id | Filter by the [location ID](https://shopify.dev/api/admin-graphql/latest/objects/Location#field-id) for the product variant. | | | - `location_id:88511152449` |
     * | managed | boolean | Filter by whether there is fulfillment service tracking associated with the product variants. | | | - `managed:true` |
     * | managed_by | string | Filter by the fulfillment service that tracks the number of items in stock for the product variant. | | | - `managed_by:shopify` |
     * | option1 | string | Filter by a custom property that a shop owner uses to define product variants. | | | - `option1:small` |
     * | option2 | string | Filter by a custom property that a shop owner uses to define product variants. | | | - `option2:medium` |
     * | option3 | string | Filter by a custom property that a shop owner uses to define product variants. | | | - `option3:large` |
     * | product_id | id | Filter by the product [`id`](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-id) field. | | | - `product_id:8474977763649` |
     * | product_ids | string | Filter by a comma-separated list of product [IDs](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-id). | | | - `product_ids:8474977763649,8474977796417` |
     * | product_publication_status | string | Filter by channel approval process status of the resource on a channel, such as the online store. The value is a composite of the [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`) and one of the valid values. For simple visibility checks, use [published_status](https://shopify.dev/api/admin-graphql/latest/queries/products#argument-query-filter-published_status) instead. | - `* {channel_app_id}-approved`<br/> - `* {channel_app_id}-rejected`<br/> - `* {channel_app_id}-needs_action`<br/> - `* {channel_app_id}-awaiting_review`<br/> - `* {channel_app_id}-published`<br/> - `* {channel_app_id}-demoted`<br/> - `* {channel_app_id}-scheduled`<br/> - `* {channel_app_id}-provisionally_published` | | - `product_publication_status:189769876-approved` |
     * | product_status | string | Filter by a comma-separated list of product [statuses](https://shopify.dev/api/admin-graphql/latest/objects/Product#field-status). | | | - `product_status:ACTIVE,DRAFT` |
     * | product_type | string | Filter by the product type that's associated with the product variants. | | | - `product_type:snowboard`<br/> - `product_type:snowboard,skis`<br/> - `product_type:snowboard OR product_type:skis` |
     * | publishable_status | string | **Deprecated:** This parameter is deprecated as of 2025-12 and will be removed in a future API version. Use [published_status](https://shopify.dev/api/admin-graphql/latest/queries/products#argument-query-filter-published_status) for visibility checks. Filter by the publishable status of the resource on a channel. The value is a composite of the [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`) and one of the valid status values. | - `* {channel_app_id}-unset`<br/> - `* {channel_app_id}-pending`<br/> - `* {channel_app_id}-approved`<br/> - `* {channel_app_id}-not_approved` | | - `publishable_status:580111-unset`<br/> - `publishable_status:580111-pending` |
     * | published_status | string | Filter resources by their visibility and publication state on a channel. Online store channel filtering: - `online_store_channel`: Returns all resources in the online store channel, regardless of publication status. - `published`/`visible`: Returns resources that are published to the online store. - `unpublished`: Returns resources that are not published to the online store. Channel-specific filtering using a channel ID, channel handle, [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`), or app handle with suffixes: - `{id_or_handle}-published`: Returns resources published to the specified channel. - `{id_or_handle}-visible`: Same as `{id_or_handle}-published` (kept for backwards compatibility). - `{id_or_handle}-intended`: Returns resources added to the channel but not yet published. - `{id_or_handle}-hidden`: Returns resources not added to the channel or not published. The `online_store_channel` value applies only to the online store; other channels use the suffix format above. For example, the Point of Sale channel has the app handle `pos` and the `Channel.app.id` `129785`, so `pos-published` and `129785-published` both return resources published to Point of Sale. Other: - `unavailable`: Returns resources not published to any channel. | - `online_store_channel`<br/> - `published`<br/> - `visible`<br/> - `unpublished`<br/> - `* {channel_id_or_handle}-published`<br/> - `* {channel_id_or_handle}-visible`<br/> - `* {channel_id_or_handle}-intended`<br/> - `* {channel_id_or_handle}-hidden`<br/> - `* {channel_app_id_or_handle}-published`<br/> - `* {channel_app_id_or_handle}-visible`<br/> - `* {channel_app_id_or_handle}-intended`<br/> - `* {channel_app_id_or_handle}-hidden`<br/> - `unavailable` | | - `published_status:online_store_channel`<br/> - `published_status:published`<br/> - `published_status:580111-published`<br/> - `published_status:580111-hidden`<br/> - `published_status:pos-published`<br/> - `published_status:129785-published`<br/> - `published_status:my-channel-handle-published`<br/> - `published_status:unavailable` |
     * | requires_components | boolean | Filter by whether the product variant can only be purchased with components. [Learn more](https://shopify.dev/apps/build/product-merchandising/bundles#store-eligibility). | | | - `requires_components:true` |
     * | sku | string | Filter by the product variant [`sku`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-sku) field. [Learn more about SKUs](https://help.shopify.com/manual/products/details/sku). | | | - `sku:XYZ-12345` |
     * | tag | string | Filter objects by the `tag` field. | | | - `tag:my_tag` |
     * | tag_not | string | Filter by objects that don’t have the specified tag. | | | - `tag_not:my_tag` |
     * | taxable | boolean | Filter by the product variant [`taxable`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-taxable) field. | | | - `taxable:false` |
     * | title | string | Filter by the product variant [`title`](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant#field-title) field. | | | - `title:ice` |
     * | updated_at | time | Filter by date and time when the product variant was updated. | | | - `updated_at:>'2020-10-21T23:39:20Z'`<br/> - `updated_at:<now`<br/> - `updated_at:<=2024` |
     * | vendor | string | Filter by the origin or source of the product variant. Learn more about [vendors and managing vendor information](https://help.shopify.com/manual/products/managing-vendor-info). | | | - `vendor:Snowdevil`<br/> - `vendor:Snowdevil,Icedevil`<br/> - `vendor:Snowdevil OR vendor:Icedevil` |
     * You can apply one or more filters to a query. Learn more about [Shopify API search syntax](https://shopify.dev/api/usage/search-syntax).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
