<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootWebPixelArgumentsObject extends ArgumentsObject
{
    protected $id;

    /**
     * The ID of the `WebPixel` object to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
