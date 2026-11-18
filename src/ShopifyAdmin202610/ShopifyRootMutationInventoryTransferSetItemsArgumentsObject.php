<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryTransferSetItemsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for the InventoryTransferSetItems mutation.
     */
    public function setInput(ShopifyInventoryTransferSetItemsInputInputObject $shopifyInventoryTransferSetItemsInputInputObject): static
    {
        $this->input = $shopifyInventoryTransferSetItemsInputInputObject;

        return $this;
    }
}
