<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAppByHandleArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["handle"];

    protected $handle;

    /**
     * Handle of the App.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }
}
