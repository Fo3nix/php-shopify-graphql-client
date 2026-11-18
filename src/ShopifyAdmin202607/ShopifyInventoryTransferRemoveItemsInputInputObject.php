<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to remove inventory items from a transfer.
 */
class ShopifyInventoryTransferRemoveItemsInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $transferLineItemIds;

    /**
     * The ID of the inventory transfer where the items will be removed.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The IDs of the [`InventoryTransferLineItem`s](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransferLineItem)
     * to be removed from the transfer. Passing an empty array is a no-op and returns
     * the transfer unchanged.
     */
    public function setTransferLineItemIds(array $transferLineItemIds): static
    {
        $this->transferLineItemIds = $transferLineItemIds;

        return $this;
    }
}
