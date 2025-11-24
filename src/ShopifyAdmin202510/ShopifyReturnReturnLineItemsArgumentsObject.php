<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyReturnReturnLineItemsArgumentsObject extends ArgumentsObject
{
    protected $processingStatus;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

    public function setProcessingStatus($shopifyReturnProcessingStatusFilterInput)
    {
        $this->processingStatus = new RawObject($shopifyReturnProcessingStatusFilterInput);

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
