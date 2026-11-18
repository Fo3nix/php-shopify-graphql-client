<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryTransferRemoveItemsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for the InventoryTransferRemoveItems mutation.
     */
    public function setInput(ShopifyInventoryTransferRemoveItemsInputInputObject $shopifyInventoryTransferRemoveItemsInputInputObject): static
    {
        $this->input = $shopifyInventoryTransferRemoveItemsInputInputObject;

        return $this;
    }
}
