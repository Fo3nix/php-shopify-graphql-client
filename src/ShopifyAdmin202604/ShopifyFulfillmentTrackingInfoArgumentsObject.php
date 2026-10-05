<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyFulfillmentTrackingInfoArgumentsObject extends ArgumentsObject
{
    protected $first;

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }
}
