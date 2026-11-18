<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyArticleCommentsCountArgumentsObject extends ArgumentsObject
{
    protected $query;
    protected $limit;

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by a case-insensitive search of multiple fields in a document. | | | - `query=Bob Norman`<br/> - `query=title:green hoodie` |
     * | article_id | id | Filter by the ID of the article the comment belongs to. | | | - `article_id:123456789`<br/> - `article_id:>=123456789`<br/> - `article_id:<=123456789` |
     * | created_at | time | Filter by the date and time when the comment was created. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<=2024` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | published_at | time | Filter by the date and time when the comment was published. | | | - `published_at:>'2020-10-21T23:39:20Z'`<br/> - `published_at:<now`<br/> - `published_at:<=2024` |
     * | published_status | string | Filter by published status | - `any`<br/> - `published`<br/> - `unpublished` | | - `published_status:any`<br/> - `published_status:published`<br/> - `published_status:unpublished` |
     * | status | string |
     * | updated_at | time | Filter by the date and time when the comment was last updated. | | | - `updated_at:>'2020-10-21T23:39:20Z'`<br/> - `updated_at:<now`<br/> - `updated_at:<=2024` |
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
