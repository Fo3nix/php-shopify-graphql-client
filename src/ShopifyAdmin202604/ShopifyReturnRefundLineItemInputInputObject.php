<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a return refund line item.
 */
class ShopifyReturnRefundLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["returnLineItemId", "quantity"];

    protected $returnLineItemId;
    protected $quantity;

    /**
     * The ID of the return line item to be refunded.
     */
    public function setReturnLineItemId($returnLineItemId): static
    {
        $this->returnLineItemId = $returnLineItemId;

        return $this;
    }

    /**
     * The quantity of the return line item to be refunded.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
