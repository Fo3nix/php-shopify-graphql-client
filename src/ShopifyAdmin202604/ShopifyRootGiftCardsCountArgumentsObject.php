<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootGiftCardsCountArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $savedSearchId;
    protected $limit;

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document, including gift card codes. | | | - `query=a5bh6h64b329j4k7`<br/> - `query=Bob Norman` |
     * | balance_status | string | | - `full`<br/> - `partial`<br/> - `empty`<br/> - `full_or_partial` | | - `balance_status:full` |
     * | created_at | time | | | | - `created_at:>='2020-01-01T12:00:00Z'` |
     * | customer_id | id |
     * | expires_on | date | | | | - `expires_on:>=2020-01-01` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | initial_value | string | | | | - `initial_value:>=100` |
     * | recipient_id | id |
     * | source | string | | - `manual`<br/> - `purchased`<br/> - `api_client` | | - `source:manual` |
     * | status | string | | - `disabled`<br/> - `enabled`<br/> - `expired`<br/> - `expiring` | | - `status:disabled OR status:expired` |
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
