<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMobilePlatformApplicationArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * ID of the mobile platform app.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
