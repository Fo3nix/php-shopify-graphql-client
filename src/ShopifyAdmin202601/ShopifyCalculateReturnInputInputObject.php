<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to calculate return amounts associated with an order.
 */
class ShopifyCalculateReturnInputInputObject extends InputObject
{
    const REQUIRED = ["orderId"];

    protected $orderId;
    protected $returnLineItems;
    protected $exchangeLineItems;
    protected $returnShippingFee;

    /**
     * The ID of the order that will be returned.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The line items from the order to include in the return.
     */
    public function setReturnLineItems(array $returnLineItems): static
    {
        $this->returnLineItems = $returnLineItems;

        return $this;
    }

    /**
     * The exchange line items to add to the order.
     */
    public function setExchangeLineItems(array $exchangeLineItems): static
    {
        $this->exchangeLineItems = $exchangeLineItems;

        return $this;
    }

    /**
     * The return shipping fee associated with the return.
     */
    public function setReturnShippingFee(ShopifyReturnShippingFeeInputInputObject $shopifyReturnShippingFeeInputInputObject): static
    {
        $this->returnShippingFee = $shopifyReturnShippingFeeInputInputObject;

        return $this;
    }
}
