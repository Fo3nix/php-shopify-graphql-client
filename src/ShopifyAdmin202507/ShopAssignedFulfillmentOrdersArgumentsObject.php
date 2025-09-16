<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopAssignedFulfillmentOrdersArgumentsObject extends ArgumentsObject
{
    protected $assignmentStatus;
    protected $locationIds;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;

    public function setAssignmentStatus($fulfillmentOrderAssignmentStatus)
    {
        $this->assignmentStatus = new RawObject($fulfillmentOrderAssignmentStatus);

        return $this;
    }

    public function setLocationIds(array $locationIds)
    {
        $this->locationIds = $locationIds;

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

    public function setSortKey($fulfillmentOrderSortKeys)
    {
        $this->sortKey = new RawObject($fulfillmentOrderSortKeys);

        return $this;
    }
}
