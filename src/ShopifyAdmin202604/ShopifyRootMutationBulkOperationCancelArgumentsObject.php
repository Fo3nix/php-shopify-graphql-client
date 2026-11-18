<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationBulkOperationCancelArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the bulk operation to cancel.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
