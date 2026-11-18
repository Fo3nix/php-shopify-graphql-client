<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootDisputeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the `ShopifyPaymentsDispute` to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
