<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReturnRequestArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for requesting a return.
     */
    public function setInput(ShopifyReturnRequestInputInputObject $shopifyReturnRequestInputInputObject): static
    {
        $this->input = $shopifyReturnRequestInputInputObject;

        return $this;
    }
}
