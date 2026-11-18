<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to reimburse line items on a refund.
 */
class ShopifyRefundLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["lineItemId", "quantity"];

    protected $lineItemId;
    protected $quantity;
    protected $restockType;
    protected $locationId;

    /**
     * The ID of the line item in the refund.
     */
    public function setLineItemId($lineItemId): static
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * The quantity of the associated line item to be refunded.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The type of restock for this line item.
     */
    public function setRestockType($shopifyRefundLineItemRestockType): static
    {
        $this->restockType = new RawObject($shopifyRefundLineItemRestockType);

        return $this;
    }

    /**
     * The intended location for restocking. If the `restockType` is set to `NO_RESTOCK`, then this value is empty.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }
}
