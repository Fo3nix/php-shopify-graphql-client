<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a line item removal on a calculated requested order edit.
 */
class ShopifyCalculateRequestedOrderEditLineItemRemovalInputInputObject extends InputObject
{
    const REQUIRED = ["lineItemId", "quantity"];

    protected $lineItemId;
    protected $quantity;

    /**
     * The ID of the line item to be removed.
     */
    public function setLineItemId($lineItemId): static
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * The quantity of the item to be removed. Quantity can't exceed the line item's unfulfilled quantity.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
