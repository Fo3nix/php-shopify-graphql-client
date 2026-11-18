<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSavedSearchCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specifies the input fields for a saved search.
     */
    public function setInput(ShopifySavedSearchCreateInputInputObject $shopifySavedSearchCreateInputInputObject): static
    {
        $this->input = $shopifySavedSearchCreateInputInputObject;

        return $this;
    }
}
