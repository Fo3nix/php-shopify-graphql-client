<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a removing a return line item from a return.
 */
class ShopifyReturnLineItemRemoveFromReturnInputInputObject extends InputObject
{
    const REQUIRED = ["returnLineItemId", "quantity"];

    protected $returnLineItemId;
    protected $quantity;

    /**
     * The ID of the return line item to remove.
     */
    public function setReturnLineItemId($returnLineItemId): static
    {
        $this->returnLineItemId = $returnLineItemId;

        return $this;
    }

    /**
     * The quantity of the associated return line item to be removed.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
