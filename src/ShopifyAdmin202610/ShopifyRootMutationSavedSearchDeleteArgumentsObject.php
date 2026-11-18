<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSavedSearchDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields to delete a saved search.
     */
    public function setInput(ShopifySavedSearchDeleteInputInputObject $shopifySavedSearchDeleteInputInputObject): static
    {
        $this->input = $shopifySavedSearchDeleteInputInputObject;

        return $this;
    }
}
