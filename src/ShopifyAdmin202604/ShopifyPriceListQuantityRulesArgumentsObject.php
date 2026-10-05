<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyPriceListQuantityRulesArgumentsObject extends ArgumentsObject
{
    protected $originType;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setOriginType($shopifyQuantityRuleOriginType)
    {
        $this->originType = new RawObject($shopifyQuantityRuleOriginType);

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
