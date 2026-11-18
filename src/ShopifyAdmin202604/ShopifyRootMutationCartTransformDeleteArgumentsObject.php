<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCartTransformDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * A globally-unique identifier for the cart transform.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
