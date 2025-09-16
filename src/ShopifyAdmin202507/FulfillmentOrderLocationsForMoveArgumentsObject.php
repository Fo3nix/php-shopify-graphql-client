<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class FulfillmentOrderLocationsForMoveArgumentsObject extends ArgumentsObject
{
    protected $lineItemIds;
    protected $query;
    protected $locationIds;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setLineItemIds(array $lineItemIds)
    {
        $this->lineItemIds = $lineItemIds;

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

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
}
