<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootBulkOperationArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the `BulkOperation` to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
