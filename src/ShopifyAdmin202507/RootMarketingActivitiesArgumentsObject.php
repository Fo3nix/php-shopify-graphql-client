<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootMarketingActivitiesArgumentsObject extends ArgumentsObject
{
    protected $marketingActivityIds;
    protected $remoteIds;
    protected $utm;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;
    protected $savedSearchId;

    public function setMarketingActivityIds(array $marketingActivityIds)
    {
        $this->marketingActivityIds = $marketingActivityIds;

        return $this;
    }

    public function setRemoteIds(array $remoteIds)
    {
        $this->remoteIds = $remoteIds;

        return $this;
    }

    public function setUtm(UTMInputInputObject $uTMInputInputObject)
    {
        $this->utm = $uTMInputInputObject;

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

    public function setSortKey($marketingActivitySortKeys)
    {
        $this->sortKey = new RawObject($marketingActivitySortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setSavedSearchId($savedSearchId)
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }
}
