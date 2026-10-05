<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyDeliveryLocationGroupZoneMethodDefinitionsArgumentsObject extends ArgumentsObject
{
    protected $eligible;
    protected $type;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;

    public function setEligible($eligible)
    {
        $this->eligible = $eligible;

        return $this;
    }

    public function setType($shopifyDeliveryMethodDefinitionType)
    {
        $this->type = new RawObject($shopifyDeliveryMethodDefinitionType);

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

    public function setSortKey($shopifyMethodDefinitionSortKeys)
    {
        $this->sortKey = new RawObject($shopifyMethodDefinitionSortKeys);

        return $this;
    }
}
