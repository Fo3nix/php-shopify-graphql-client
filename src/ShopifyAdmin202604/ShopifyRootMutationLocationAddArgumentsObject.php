<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationLocationAddArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The properties of the location to add.
     */
    public function setInput(ShopifyLocationAddInputInputObject $shopifyLocationAddInputInputObject): static
    {
        $this->input = $shopifyLocationAddInputInputObject;

        return $this;
    }
}
