<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootDraftOrdersCountArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $savedSearchId;
    protected $limit;

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | created_at | time |
     * | customer_id | id |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | ids | string |
     * | source | string |
     * | status | string |
     * | tag | string |
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
