<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootStoreCreditAccountArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the store credit account to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
