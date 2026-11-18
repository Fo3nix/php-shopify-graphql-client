<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to dispose a reverse fulfillment order line item.
 */
class ShopifyReverseFulfillmentOrderDisposeInputInputObject extends InputObject
{
    const REQUIRED = ["reverseFulfillmentOrderLineItemId", "quantity", "dispositionType"];

    protected $reverseFulfillmentOrderLineItemId;
    protected $quantity;
    protected $locationId;
    protected $dispositionType;

    /**
     * The ID of the reverse fulfillment order line item.
     */
    public function setReverseFulfillmentOrderLineItemId($reverseFulfillmentOrderLineItemId): static
    {
        $this->reverseFulfillmentOrderLineItemId = $reverseFulfillmentOrderLineItemId;

        return $this;
    }

    /**
     * The quantity of the reverse fulfillment order line item to dispose.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The ID of the location where the reverse fulfillment order line item is to be disposed.
     *         This is required when the disposition type is RESTOCKED.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The final arrangement for the reverse fulfillment order line item.
     */
    public function setDispositionType($shopifyReverseFulfillmentOrderDispositionType): static
    {
        $this->dispositionType = new RawObject($shopifyReverseFulfillmentOrderDispositionType);

        return $this;
    }
}
