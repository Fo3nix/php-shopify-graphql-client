<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCollectionByHandleArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["handle"];

    protected $handle;

    /**
     * The handle of the collection.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }
}
