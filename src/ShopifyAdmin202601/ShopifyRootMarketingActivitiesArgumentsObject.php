<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMarketingActivitiesArgumentsObject extends ArgumentsObject
{
    protected $marketingActivityIds;
    protected $remoteIds;
    protected $utm;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;
    protected $savedSearchId;

    /**
     * The list of marketing activity IDs to filter by.
     */
    public function setMarketingActivityIds(array $marketingActivityIds): static
    {
        $this->marketingActivityIds = $marketingActivityIds;

        return $this;
    }

    /**
     * The list of remote IDs associated with marketing activities to filter by.
     */
    public function setRemoteIds(array $remoteIds): static
    {
        $this->remoteIds = $remoteIds;

        return $this;
    }

    /**
     * The UTM parameters associated with marketing activities to filter by.
     */
    public function setUtm(ShopifyUTMInputInputObject $shopifyUTMInputInputObject): static
    {
        $this->utm = $shopifyUTMInputInputObject;

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

    /**
     * Sort the underlying list using a key. If your query is slow or returns an error, then [try specifying a sort key that matches the field used in the search](https://shopify.dev/api/usage/pagination-graphql#search-performance-considerations).
     */
    public function setSortKey($shopifyMarketingActivitySortKeys): static
    {
        $this->sortKey = new RawObject($shopifyMarketingActivitySortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | app_id | id |
     * | app_name | string | A comma-separated list of app names. |
     * | created_at | time |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | marketing_campaign_id | id |
     * | scheduled_to_end_at | time |
     * | scheduled_to_start_at | time |
     * | tactic | string |
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
     * The ID of a [saved search](https://shopify.dev/api/admin-graphql/latest/objects/savedsearch#field-id).
     * The search’s query string is used as the query argument.
     */
    public function setSavedSearchId($savedSearchId): static
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }
}
