<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootSubscriptionBillingCyclesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["contractId"];

    protected $contractId;
    protected $billingCyclesDateRangeSelector;
    protected $billingCyclesIndexRangeSelector;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;

    /**
     * The ID of the subscription contract to retrieve billing cycles for.
     */
    public function setContractId($contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * Select subscription billing cycles within a date range.
     */
    public function setBillingCyclesDateRangeSelector(ShopifySubscriptionBillingCyclesDateRangeSelectorInputObject $shopifySubscriptionBillingCyclesDateRangeSelectorInputObject): static
    {
        $this->billingCyclesDateRangeSelector = $shopifySubscriptionBillingCyclesDateRangeSelectorInputObject;

        return $this;
    }

    /**
     * Select subscription billing cycles within an index range.
     */
    public function setBillingCyclesIndexRangeSelector(ShopifySubscriptionBillingCyclesIndexRangeSelectorInputObject $shopifySubscriptionBillingCyclesIndexRangeSelectorInputObject): static
    {
        $this->billingCyclesIndexRangeSelector = $shopifySubscriptionBillingCyclesIndexRangeSelectorInputObject;

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
    public function setSortKey($shopifySubscriptionBillingCyclesSortKeys): static
    {
        $this->sortKey = new RawObject($shopifySubscriptionBillingCyclesSortKeys);

        return $this;
    }
}
