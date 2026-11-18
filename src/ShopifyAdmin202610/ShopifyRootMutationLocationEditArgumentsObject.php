<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationLocationEditArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of a location to edit.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The updated properties for the location.
     */
    public function setInput(ShopifyLocationEditInputInputObject $shopifyLocationEditInputInputObject): static
    {
        $this->input = $shopifyLocationEditInputInputObject;

        return $this;
    }
}
