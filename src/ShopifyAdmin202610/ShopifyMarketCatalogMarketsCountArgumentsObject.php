<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyMarketCatalogMarketsCountArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $status;
    protected $query;
    protected $limit;

    /**
     * Filters markets by type.
     */
    public function setType($shopifyMarketType): static
    {
        $this->type = new RawObject($shopifyMarketType);

        return $this;
    }

    /**
     * Filters markets by status.
     */
    public function setStatus($shopifyMarketStatus): static
    {
        $this->status = new RawObject($shopifyMarketStatus);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | created_at | time | Filter by creation date and time. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<='2024'` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | market_condition_types | string | A comma-separated list of condition types. |
     * | market_type | string |
     * | name | string |
     * | status | string | | - `ACTIVE`<br/> - `DRAFT` |
     * | wildcard_company_location_with_country_code | string |
     * You can apply one or more filters to a query. Learn more about [Shopify API search syntax](https://shopify.dev/api/usage/search-syntax).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

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
