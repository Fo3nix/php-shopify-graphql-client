<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a return.
 */
class ShopifyReturnInputInputObject extends InputObject
{
    const REQUIRED = ["orderId", "returnLineItems"];

    protected $exchangeLineItems;
    protected $requestedAt;
    protected $orderId;
    protected $returnLineItems;
    protected $returnShippingFee;

    /**
     * The new line items to be added to the order.
     */
    public function setExchangeLineItems(array $exchangeLineItems): static
    {
        $this->exchangeLineItems = $exchangeLineItems;

        return $this;
    }

    /**
     * The UTC date and time when the return was first solicited by the customer.
     */
    public function setRequestedAt($requestedAt): static
    {
        $this->requestedAt = $requestedAt;

        return $this;
    }

    /**
     * The ID of the order to be returned.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The return line items list to be handled.
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
