<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationRequestedOrderEditCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for creating a requested order edit.
     */
    public function setInput(ShopifyRequestedOrderEditCreateInputInputObject $shopifyRequestedOrderEditCreateInputInputObject): static
    {
        $this->input = $shopifyRequestedOrderEditCreateInputInputObject;

        return $this;
    }
}
