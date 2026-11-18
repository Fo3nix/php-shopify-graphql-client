<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryTransferCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for the inventory transfer.
     */
    public function setInput(ShopifyInventoryTransferCreateInputInputObject $shopifyInventoryTransferCreateInputInputObject): static
    {
        $this->input = $shopifyInventoryTransferCreateInputInputObject;

        return $this;
    }
}
