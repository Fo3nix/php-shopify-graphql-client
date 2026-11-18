<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to the InventoryTransferSetItems mutation.
 */
class ShopifyInventoryTransferSetItemsInputInputObject extends InputObject
{
    const REQUIRED = ["id", "lineItems"];

    protected $id;
    protected $lineItems;

    /**
     * The ID of the inventory transfer where the items will be set.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The line items to set on the Transfer. Only the items included in this list are affected; items already on the transfer that aren't referenced here will stay unchanged. Each inventory item may appear at most once in this list; duplicate `inventoryItemId` entries are rejected.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }
}
