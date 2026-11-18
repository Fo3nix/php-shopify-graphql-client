<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootRolloutsArgumentsObject extends ArgumentsObject
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
     * Sort the underlying list by the given key.
     */
    public function setSortKey($shopifyRolloutSortKeys): static
    {
        $this->sortKey = new RawObject($shopifyRolloutSortKeys);

        return $this;
    }

    /**
     * A filter made up of terms, connectives, modifiers, and comparators.
     * | name | type | description | acceptable_values | default_value | example_use |
     * | ---- | ---- | ---- | ---- | ---- | ---- |
     * | default | string | Filter by rollout name. | | | - `query=holiday` |
     * | change_type | string | Filter public root rollouts by an exact public change typename. Unknown identifiers match no rollouts. | - `RolloutDiscountActivateChange`<br/> - `RolloutDiscountExpireChange`<br/> - `RolloutCatalogActivateChange`<br/> - `RolloutCatalogDraftChange`<br/> - `RolloutThemePublishChange`<br/> - `RolloutCheckoutAndAccountsConfigurationPublishChange` | | - `change_type:RolloutDiscountActivateChange`<br/> - `change_type:RolloutThemePublishChange` |
     * | created_at | time | Filter by creation date and time. | | | - `created_at:>'2020-10-21T23:39:20Z'`<br/> - `created_at:<now`<br/> - `created_at:<='2024'` |
     * | id | id | Filter by `id` range. | | | - `id:1234`<br/> - `id:>=1234`<br/> - `id:<=1234` |
     * | name | string | Filter by rollout name. Matches rollouts whose name contains the search value. |
     * | status | string | Filter by rollout status. Values are case-insensitive; unknown values match no rollouts. | - `DRAFT`<br/> - `SCHEDULED`<br/> - `PAUSED`<br/> - `ACTIVE`<br/> - `CONCLUDED`<br/> - `ARCHIVED` | | - `status:ACTIVE`<br/> - `status:ACTIVE,DRAFT` |
     * You can apply one or more filters to a query. Learn more about [Shopify API search syntax](https://shopify.dev/api/usage/search-syntax).
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }
}
