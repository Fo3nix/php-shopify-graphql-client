<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyOrderSuggestedRefundArgumentsObject extends ArgumentsObject
{
    protected $shippingAmount;
    protected $refundShipping;
    protected $refundLineItems;
    protected $refundDuties;
    protected $suggestFullRefund;
    protected $refundMethodAllocation;

    /**
     * The amount to refund for shipping. Overrides the `refundShipping` argument.
     */
    public function setShippingAmount($shippingAmount): static
    {
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    /**
     * Whether to refund the full shipping amount.
     */
    public function setRefundShipping($refundShipping): static
    {
        $this->refundShipping = $refundShipping;

        return $this;
    }

    /**
     * The line items from the order to include in the refund.
     */
    public function setRefundLineItems(array $refundLineItems): static
    {
        $this->refundLineItems = $refundLineItems;

        return $this;
    }

    /**
     * The duties from the order to include in the refund.
     */
    public function setRefundDuties(array $refundDuties): static
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }

    /**
     * Whether the suggested refund should be created from all refundable line items on the order.
     * If `true`, the `refundLineItems` argument will be ignored.
     */
    public function setSuggestFullRefund($suggestFullRefund): static
    {
        $this->suggestFullRefund = $suggestFullRefund;

        return $this;
    }

    /**
     * Specifies which refund methods to allocate the suggested refund amount to.
     */
    public function setRefundMethodAllocation($shopifyRefundMethodAllocation): static
    {
        $this->refundMethodAllocation = new RawObject($shopifyRefundMethodAllocation);

        return $this;
    }
}
