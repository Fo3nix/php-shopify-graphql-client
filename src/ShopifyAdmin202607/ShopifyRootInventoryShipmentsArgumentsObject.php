<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootInventoryShipmentsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $sortKey;
    protected $query;

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

    public function setSortKey($shopifyInventoryShipmentSortKeys)
    {
        $this->sortKey = new RawObject($shopifyInventoryShipmentSortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
