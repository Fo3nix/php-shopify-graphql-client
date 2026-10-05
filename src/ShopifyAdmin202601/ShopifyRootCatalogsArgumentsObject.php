<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootCatalogsArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;

    public function setType($shopifyCatalogType)
    {
        $this->type = new RawObject($shopifyCatalogType);

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

    public function setSortKey($shopifyCatalogSortKeys)
    {
        $this->sortKey = new RawObject($shopifyCatalogSortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
