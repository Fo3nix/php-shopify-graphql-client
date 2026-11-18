<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationRequestedOrderEditDeclineArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for declining a requested order edit.
     */
    public function setInput(ShopifyRequestedOrderEditDeclineInputInputObject $shopifyRequestedOrderEditDeclineInputInputObject): static
    {
        $this->input = $shopifyRequestedOrderEditDeclineInputInputObject;

        return $this;
    }
}
