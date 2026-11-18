<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationRequestedOrderEditResolveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for resolving a requested order edit.
     */
    public function setInput(ShopifyRequestedOrderEditResolveInputInputObject $shopifyRequestedOrderEditResolveInputInputObject): static
    {
        $this->input = $shopifyRequestedOrderEditResolveInputInputObject;

        return $this;
    }
}
