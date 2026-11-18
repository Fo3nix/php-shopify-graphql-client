<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryShipmentRemoveItemsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "lineItems"];

    protected $id;
    protected $lineItems;

    /**
     * The ID of the inventory shipment to remove items from.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A list of inventory shipment line item ids representing the items to be removed from the shipment.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }
}
