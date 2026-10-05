<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootLocationsArgumentsObject extends ArgumentsObject
{
    protected $includeLegacy;
    protected $includeInactive;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;

    public function setIncludeLegacy($includeLegacy)
    {
        $this->includeLegacy = $includeLegacy;

        return $this;
    }

    public function setIncludeInactive($includeInactive)
    {
        $this->includeInactive = $includeInactive;

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

    public function setSortKey($shopifyLocationSortKeys)
    {
        $this->sortKey = new RawObject($shopifyLocationSortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
