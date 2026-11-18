<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for return line items on a calculated return.
 */
class ShopifyCalculateReturnLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentLineItemId", "quantity"];

    protected $fulfillmentLineItemId;
    protected $restockingFee;
    protected $quantity;

    /**
     * The ID of the fulfillment line item to be returned.
     */
    public function setFulfillmentLineItemId($fulfillmentLineItemId): static
    {
        $this->fulfillmentLineItemId = $fulfillmentLineItemId;

        return $this;
    }

    /**
     * The restocking fee for the return line item.
     */
    public function setRestockingFee(ShopifyRestockingFeeInputInputObject $shopifyRestockingFeeInputInputObject): static
    {
        $this->restockingFee = $shopifyRestockingFeeInputInputObject;

        return $this;
    }

    /**
     * The quantity of the item to be returned.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
