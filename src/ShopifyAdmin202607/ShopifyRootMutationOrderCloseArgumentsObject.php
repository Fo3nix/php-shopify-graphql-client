<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderCloseArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input for the mutation.
     */
    public function setInput(ShopifyOrderCloseInputInputObject $shopifyOrderCloseInputInputObject): static
    {
        $this->input = $shopifyOrderCloseInputInputObject;

        return $this;
    }
}
