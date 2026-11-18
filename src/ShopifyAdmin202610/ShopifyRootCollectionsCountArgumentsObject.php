<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCollectionsCountArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $savedSearchId;
    protected $limit;

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | collection_type | string | | - `custom`<br/> - `smart` |
     * | handle | string |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | product_id | id | Filter by collections containing a product by its ID. |
     * | product_publication_status | string | Filter by channel approval process status of the resource on a channel, such as the online store. The value is a composite of the [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`) and one of the valid values. For simple visibility checks, use [published_status](https://shopify.dev/api/admin-graphql/latest/queries/products#argument-query-filter-published_status) instead. | - `* {channel_app_id}-approved`<br/> - `* {channel_app_id}-rejected`<br/> - `* {channel_app_id}-needs_action`<br/> - `* {channel_app_id}-awaiting_review`<br/> - `* {channel_app_id}-published`<br/> - `* {channel_app_id}-demoted`<br/> - `* {channel_app_id}-scheduled`<br/> - `* {channel_app_id}-provisionally_published` | | - `product_publication_status:189769876-approved` |
     * | publishable_status | string | **Deprecated:** This parameter is deprecated as of 2025-12 and will be removed in a future API version. Use [published_status](https://shopify.dev/api/admin-graphql/latest/queries/products#argument-query-filter-published_status) for visibility checks. Filter by the publishable status of the resource on a channel. The value is a composite of the [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`) and one of the valid status values. | - `* {channel_app_id}-unset`<br/> - `* {channel_app_id}-pending`<br/> - `* {channel_app_id}-approved`<br/> - `* {channel_app_id}-not_approved` | | - `publishable_status:580111-unset`<br/> - `publishable_status:580111-pending` |
     * | published_at | time | Filter by the date and time when the collection was published to the Online Store. |
     * | published_status | string | Filter resources by their visibility and publication state on a channel. Online store channel filtering: - `online_store_channel`: Returns all resources in the online store channel, regardless of publication status. - `published`/`visible`: Returns resources that are published to the online store. - `unpublished`: Returns resources that are not published to the online store. Channel-specific filtering using a channel ID, channel handle, [channel `app` ID](https://shopify.dev/api/admin-graphql/latest/objects/Channel#field-Channel.fields.app) (`Channel.app.id`), or app handle with suffixes: - `{id_or_handle}-published`: Returns resources published to the specified channel. - `{id_or_handle}-visible`: Same as `{id_or_handle}-published` (kept for backwards compatibility). - `{id_or_handle}-intended`: Returns resources added to the channel but not yet published. - `{id_or_handle}-hidden`: Returns resources not added to the channel or not published. The `online_store_channel` value applies only to the online store; other channels use the suffix format above. For example, the Point of Sale channel has the app handle `pos` and the `Channel.app.id` `129785`, so `pos-published` and `129785-published` both return resources published to Point of Sale. Other: - `unavailable`: Returns resources not published to any channel. | - `online_store_channel`<br/> - `published`<br/> - `visible`<br/> - `unpublished`<br/> - `* {channel_id_or_handle}-published`<br/> - `* {channel_id_or_handle}-visible`<br/> - `* {channel_id_or_handle}-intended`<br/> - `* {channel_id_or_handle}-hidden`<br/> - `* {channel_app_id_or_handle}-published`<br/> - `* {channel_app_id_or_handle}-visible`<br/> - `* {channel_app_id_or_handle}-intended`<br/> - `* {channel_app_id_or_handle}-hidden`<br/> - `unavailable` | | - `published_status:online_store_channel`<br/> - `published_status:published`<br/> - `published_status:580111-published`<br/> - `published_status:580111-hidden`<br/> - `published_status:pos-published`<br/> - `published_status:129785-published`<br/> - `published_status:my-channel-handle-published`<br/> - `published_status:unavailable` |
     * | title | string |
     * | updated_at | time |
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
