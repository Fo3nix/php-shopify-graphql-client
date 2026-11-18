<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderEditSetQuantityArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "lineItemId", "quantity"];

    protected $id;
    protected $lineItemId;
    protected $quantity;
    protected $restock;

    /**
     * The ID of the [calculated order](https://shopify.dev/api/admin-graphql/latest/objects/calculatedorder)
     * or the order edit session to edit. The edit changes the quantity on the line item.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the calculated line item to edit.
     */
    public function setLineItemId($lineItemId): static
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * The new quantity to set for the line item. This value cannot be negative.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Whether or not to restock the line item when the updated quantity is less than the original quantity.
     */
    public function setRestock($restock): static
    {
        $this->restock = $restock;

        return $this;
    }
}
