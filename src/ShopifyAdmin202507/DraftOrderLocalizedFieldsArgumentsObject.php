<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class DraftOrderLocalizedFieldsArgumentsObject extends ArgumentsObject
{
    protected $countryCodes;
    protected $purposes;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setCountryCodes(array $countryCodes)
    {
        $this->countryCodes = $countryCodes;

        return $this;
    }

    public function setPurposes(array $purposes)
    {
        $this->purposes = $purposes;

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
