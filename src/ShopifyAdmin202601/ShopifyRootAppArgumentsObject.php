<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAppArgumentsObject extends ArgumentsObject
{
    protected $id;

    /**
     * The ID to lookup the App by.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
