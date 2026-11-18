<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a line item requested for removal in a requested order edit.
 */
class ShopifyRequestedOrderEditLineItemRemovalInputInputObject extends InputObject
{
    const REQUIRED = ["lineItemId", "quantity"];

    protected $lineItemId;
    protected $quantity;

    /**
     * The ID of the line item to request removal for.
     */
    public function setLineItemId($lineItemId): static
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * The quantity of the line item to request removal for.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
