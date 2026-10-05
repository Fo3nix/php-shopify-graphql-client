<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootSubscriptionBillingCyclesArgumentsObject extends ArgumentsObject
{
    protected $contractId;
    protected $billingCyclesDateRangeSelector;
    protected $billingCyclesIndexRangeSelector;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;

    public function setContractId($contractId)
    {
        $this->contractId = $contractId;

        return $this;
    }

    public function setBillingCyclesDateRangeSelector(ShopifySubscriptionBillingCyclesDateRangeSelectorInputObject $shopifySubscriptionBillingCyclesDateRangeSelectorInputObject)
    {
        $this->billingCyclesDateRangeSelector = $shopifySubscriptionBillingCyclesDateRangeSelectorInputObject;

        return $this;
    }

    public function setBillingCyclesIndexRangeSelector(ShopifySubscriptionBillingCyclesIndexRangeSelectorInputObject $shopifySubscriptionBillingCyclesIndexRangeSelectorInputObject)
    {
        $this->billingCyclesIndexRangeSelector = $shopifySubscriptionBillingCyclesIndexRangeSelectorInputObject;

        return $this;
    }

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setAfter($after)
    {
        $this->after = $after;

        return $this;
    }

    public function setLast($last)
    {
        $this->last = $last;

        return $this;
    }

    public function setBefore($before)
    {
        $this->before = $before;

        return $this;
    }

    public function setReverse($reverse)
    {
        $this->reverse = $reverse;

        return $this;
    }

    public function setSortKey($shopifySubscriptionBillingCyclesSortKeys)
    {
        $this->sortKey = new RawObject($shopifySubscriptionBillingCyclesSortKeys);

        return $this;
    }
}
