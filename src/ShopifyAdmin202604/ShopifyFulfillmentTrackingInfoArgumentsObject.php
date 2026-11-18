<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyFulfillmentTrackingInfoArgumentsObject extends ArgumentsObject
{
    protected $first;

    /**
     * Truncate the array result to this size.
     */
    public function setFirst($first): static
    {
        $this->first = $first;

        return $this;
    }
}
