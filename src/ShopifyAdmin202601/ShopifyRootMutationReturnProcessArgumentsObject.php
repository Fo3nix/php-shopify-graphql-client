<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReturnProcessArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specifies the input fields for processing a return.
     */
    public function setInput(ShopifyReturnProcessInputInputObject $shopifyReturnProcessInputInputObject): static
    {
        $this->input = $shopifyReturnProcessInputInputObject;

        return $this;
    }
}
