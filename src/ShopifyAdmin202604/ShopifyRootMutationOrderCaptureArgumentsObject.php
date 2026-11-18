<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderCaptureArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input for the mutation.
     */
    public function setInput(ShopifyOrderCaptureInputInputObject $shopifyOrderCaptureInputInputObject): static
    {
        $this->input = $shopifyOrderCaptureInputInputObject;

        return $this;
    }
}
