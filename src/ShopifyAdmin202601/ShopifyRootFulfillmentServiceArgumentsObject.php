<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootFulfillmentServiceArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the FulfillmentService to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
