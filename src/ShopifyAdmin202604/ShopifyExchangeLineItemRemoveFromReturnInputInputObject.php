<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for removing an exchange line item from a return.
 */
class ShopifyExchangeLineItemRemoveFromReturnInputInputObject extends InputObject
{
    const REQUIRED = ["exchangeLineItemId", "quantity"];

    protected $exchangeLineItemId;
    protected $quantity;

    /**
     * The ID of the exchange line item to remove.
     */
    public function setExchangeLineItemId($exchangeLineItemId): static
    {
        $this->exchangeLineItemId = $exchangeLineItemId;

        return $this;
    }

    /**
     * The quantity of the associated exchange line item to be removed.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
