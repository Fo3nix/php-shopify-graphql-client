<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductOptionsArgumentsObject extends ArgumentsObject
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
