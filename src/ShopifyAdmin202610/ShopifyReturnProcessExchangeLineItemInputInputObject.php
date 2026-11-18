<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an exchange line item.
 */
class ShopifyReturnProcessExchangeLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["id", "quantity"];

    protected $id;
    protected $quantity;

    /**
     * The ID of the exchange line item.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The quantity of the exchange line item.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
