<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventorySetQuantitiesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The information required to set inventory quantities.
     */
    public function setInput(ShopifyInventorySetQuantitiesInputInputObject $shopifyInventorySetQuantitiesInputInputObject): static
    {
        $this->input = $shopifyInventorySetQuantitiesInputInputObject;

        return $this;
    }
}
