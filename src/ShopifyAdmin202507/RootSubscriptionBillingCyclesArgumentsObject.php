<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootSubscriptionBillingCyclesArgumentsObject extends ArgumentsObject
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

    public function setBillingCyclesDateRangeSelector(SubscriptionBillingCyclesDateRangeSelectorInputObject $subscriptionBillingCyclesDateRangeSelectorInputObject)
    {
        $this->billingCyclesDateRangeSelector = $subscriptionBillingCyclesDateRangeSelectorInputObject;

        return $this;
    }

    public function setBillingCyclesIndexRangeSelector(SubscriptionBillingCyclesIndexRangeSelectorInputObject $subscriptionBillingCyclesIndexRangeSelectorInputObject)
    {
        $this->billingCyclesIndexRangeSelector = $subscriptionBillingCyclesIndexRangeSelectorInputObject;

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

    public function setSortKey($subscriptionBillingCyclesSortKeys)
    {
        $this->sortKey = new RawObject($subscriptionBillingCyclesSortKeys);

        return $this;
    }
}
