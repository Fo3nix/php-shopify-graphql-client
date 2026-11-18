<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootRequestedOrderEditCalculateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for calculating a requested order edit.
     */
    public function setInput(ShopifyCalculateRequestedOrderEditInputInputObject $shopifyCalculateRequestedOrderEditInputInputObject): static
    {
        $this->input = $shopifyCalculateRequestedOrderEditInputInputObject;

        return $this;
    }
}
