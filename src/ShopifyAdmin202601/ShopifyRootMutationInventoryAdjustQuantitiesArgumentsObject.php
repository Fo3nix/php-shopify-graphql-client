<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryAdjustQuantitiesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The information required to adjust inventory quantities.
     */
    public function setInput(ShopifyInventoryAdjustQuantitiesInputInputObject $shopifyInventoryAdjustQuantitiesInputInputObject): static
    {
        $this->input = $shopifyInventoryAdjustQuantitiesInputInputObject;

        return $this;
    }
}
