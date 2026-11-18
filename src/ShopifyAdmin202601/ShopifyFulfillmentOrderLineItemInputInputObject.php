<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to include the quantity of the fulfillment order line item that should be fulfilled.
 */
class ShopifyFulfillmentOrderLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["id", "quantity"];

    protected $id;
    protected $quantity;

    /**
     * The ID of the fulfillment order line item.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The quantity of the fulfillment order line item.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
