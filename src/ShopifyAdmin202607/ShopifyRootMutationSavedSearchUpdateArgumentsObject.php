<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSavedSearchUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields to update a saved search.
     */
    public function setInput(ShopifySavedSearchUpdateInputInputObject $shopifySavedSearchUpdateInputInputObject): static
    {
        $this->input = $shopifySavedSearchUpdateInputInputObject;

        return $this;
    }
}
