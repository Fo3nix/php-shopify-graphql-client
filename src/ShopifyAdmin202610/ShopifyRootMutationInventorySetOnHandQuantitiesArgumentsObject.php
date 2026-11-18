<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventorySetOnHandQuantitiesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The information required to set inventory on hand quantities.
     */
    public function setInput(ShopifyInventorySetOnHandQuantitiesInputInputObject $shopifyInventorySetOnHandQuantitiesInputInputObject): static
    {
        $this->input = $shopifyInventorySetOnHandQuantitiesInputInputObject;

        return $this;
    }
}
