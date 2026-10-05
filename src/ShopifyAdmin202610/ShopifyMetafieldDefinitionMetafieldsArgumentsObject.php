<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyMetafieldDefinitionMetafieldsArgumentsObject extends ArgumentsObject
{
    protected $validationStatus;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setValidationStatus($shopifyMetafieldValidationStatus)
    {
        $this->validationStatus = new RawObject($shopifyMetafieldValidationStatus);

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
