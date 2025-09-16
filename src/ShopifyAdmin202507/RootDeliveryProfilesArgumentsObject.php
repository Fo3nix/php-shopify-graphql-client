<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeliveryProfilesArgumentsObject extends ArgumentsObject
{
    protected $merchantOwnedOnly;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setMerchantOwnedOnly($merchantOwnedOnly)
    {
        $this->merchantOwnedOnly = $merchantOwnedOnly;

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
