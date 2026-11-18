<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootPageArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the `Page` to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
