<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderMarkAsPaidArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input for the mutation.
     */
    public function setInput(ShopifyOrderMarkAsPaidInputInputObject $shopifyOrderMarkAsPaidInputInputObject): static
    {
        $this->input = $shopifyOrderMarkAsPaidInputInputObject;

        return $this;
    }
}
