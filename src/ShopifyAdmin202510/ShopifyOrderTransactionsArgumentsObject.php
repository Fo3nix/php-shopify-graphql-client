<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyOrderTransactionsArgumentsObject extends ArgumentsObject
{
    protected $first;
    protected $capturable;
    protected $manuallyResolvable;

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setCapturable($capturable)
    {
        $this->capturable = $capturable;

        return $this;
    }

    public function setManuallyResolvable($manuallyResolvable)
    {
        $this->manuallyResolvable = $manuallyResolvable;

        return $this;
    }
}
