<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootSegmentArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * Find a segment by ID.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
