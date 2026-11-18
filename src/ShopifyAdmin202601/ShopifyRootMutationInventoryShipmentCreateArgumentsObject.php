<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryShipmentCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for the inventory shipment.
     */
    public function setInput(ShopifyInventoryShipmentCreateInputInputObject $shopifyInventoryShipmentCreateInputInputObject): static
    {
        $this->input = $shopifyInventoryShipmentCreateInputInputObject;

        return $this;
    }
}
