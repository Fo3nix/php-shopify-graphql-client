<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class MarketCatalogMarketsArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $status;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setType($marketType)
    {
        $this->type = new RawObject($marketType);

        return $this;
    }

    public function setStatus($marketStatus)
    {
        $this->status = new RawObject($marketStatus);

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
}
