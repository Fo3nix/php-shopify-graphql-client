<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryShipmentUpdateItemQuantitiesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $items;

    /**
     * The ID of the inventory shipment to update item quantities.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The list of line items to be updated to the shipment.
     */
    public function setItems(array $items): static
    {
        $this->items = $items;

        return $this;
    }
}
