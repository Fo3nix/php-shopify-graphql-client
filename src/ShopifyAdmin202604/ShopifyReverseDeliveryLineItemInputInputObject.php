<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a reverse delivery line item.
 */
class ShopifyReverseDeliveryLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["reverseFulfillmentOrderLineItemId", "quantity"];

    protected $reverseFulfillmentOrderLineItemId;
    protected $quantity;

    /**
     * The ID of the related reverse fulfillment order line item.
     */
    public function setReverseFulfillmentOrderLineItemId($reverseFulfillmentOrderLineItemId): static
    {
        $this->reverseFulfillmentOrderLineItemId = $reverseFulfillmentOrderLineItemId;

        return $this;
    }

    /**
     * The quantity of the item to be included in the delivery.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
