<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryMoveQuantitiesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The information required to move inventory quantities.
     */
    public function setInput(ShopifyInventoryMoveQuantitiesInputInputObject $shopifyInventoryMoveQuantitiesInputInputObject): static
    {
        $this->input = $shopifyInventoryMoveQuantitiesInputInputObject;

        return $this;
    }
}
