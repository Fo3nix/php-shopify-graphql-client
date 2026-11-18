<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCatalogCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The properties of the new catalog.
     */
    public function setInput(ShopifyCatalogCreateInputInputObject $shopifyCatalogCreateInputInputObject): static
    {
        $this->input = $shopifyCatalogCreateInputInputObject;

        return $this;
    }
}
