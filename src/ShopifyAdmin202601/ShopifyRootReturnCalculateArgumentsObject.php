<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootReturnCalculateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for calculating a return.
     */
    public function setInput(ShopifyCalculateReturnInputInputObject $shopifyCalculateReturnInputInputObject): static
    {
        $this->input = $shopifyCalculateReturnInputInputObject;

        return $this;
    }
}
