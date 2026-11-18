<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootLocationArgumentsObject extends ArgumentsObject
{
    protected $id;

    /**
     * The ID of the location to return. If no ID is provided, the primary location of the Shop is returned.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
