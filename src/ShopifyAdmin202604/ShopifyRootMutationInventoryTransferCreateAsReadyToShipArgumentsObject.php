<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryTransferCreateAsReadyToShipArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for the inventory transfer.
     */
    public function setInput(ShopifyInventoryTransferCreateAsReadyToShipInputInputObject $shopifyInventoryTransferCreateAsReadyToShipInputInputObject): static
    {
        $this->input = $shopifyInventoryTransferCreateAsReadyToShipInputInputObject;

        return $this;
    }
}
