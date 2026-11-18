<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the shipping cost to refund.
 */
class ShopifyRefundShippingInputInputObject extends InputObject
{
    protected $shippingRefundAmount;
    protected $fullRefund;

    /**
     * The input fields required to refund shipping cost, in the presentment currency of the order.
     * This overrides the `fullRefund` argument.
     * This field defaults to 0.00 when not provided and when the `fullRefund` argument is false.
     */
    public function setShippingRefundAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->shippingRefundAmount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * Whether to refund the full shipping amount.
     */
    public function setFullRefund($fullRefund): static
    {
        $this->fullRefund = $fullRefund;

        return $this;
    }
}
