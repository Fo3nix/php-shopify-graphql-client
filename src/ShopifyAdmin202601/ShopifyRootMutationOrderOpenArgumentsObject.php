<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderOpenArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input for the mutation.
     */
    public function setInput(ShopifyOrderOpenInputInputObject $shopifyOrderOpenInputInputObject): static
    {
        $this->input = $shopifyOrderOpenInputInputObject;

        return $this;
    }
}
