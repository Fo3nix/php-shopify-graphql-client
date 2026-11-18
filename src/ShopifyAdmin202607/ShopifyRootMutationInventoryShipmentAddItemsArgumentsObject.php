<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryShipmentAddItemsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "lineItems"];

    protected $id;
    protected $lineItems;

    /**
     * The ID of the inventory shipment to modify.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The list of line items to add to the inventory shipment.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }
}
