<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for requesting a return.
 */
class ShopifyReturnRequestInputInputObject extends InputObject
{
    const REQUIRED = ["orderId", "returnLineItems"];

    protected $orderId;
    protected $returnLineItems;
    protected $returnShippingFee;

    /**
     * The ID of the order that's being returned.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The line items that are being handled in the return.
     */
    public function setReturnLineItems(array $returnLineItems): static
    {
        $this->returnLineItems = $returnLineItems;

        return $this;
    }

    /**
     * The return shipping fee to capture.
     */
    public function setReturnShippingFee(ShopifyReturnShippingFeeInputInputObject $shopifyReturnShippingFeeInputInputObject): static
    {
        $this->returnShippingFee = $shopifyReturnShippingFeeInputInputObject;

        return $this;
    }
}
