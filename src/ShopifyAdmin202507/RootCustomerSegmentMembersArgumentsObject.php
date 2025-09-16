<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCustomerSegmentMembersArgumentsObject extends ArgumentsObject
{
    protected $segmentId;
    protected $query;
    protected $queryId;
    protected $timezone;
    protected $reverse;
    protected $sortKey;
    protected $first;
    protected $after;
    protected $last;
    protected $before;

    public function setSegmentId($segmentId)
    {
        $this->segmentId = $segmentId;

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setQueryId($queryId)
    {
        $this->queryId = $queryId;

        return $this;
    }

    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function setReverse($reverse)
    {
        $this->reverse = $reverse;

        return $this;
    }

    public function setSortKey($sortKey)
    {
        $this->sortKey = $sortKey;

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
}
