<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyReturnSuggestedRefundArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["returnRefundLineItems"];

    protected $returnRefundLineItems;
    protected $refundShipping;
    protected $refundDuties;

    /**
     * The line items from the return to include in the refund.
     */
    public function setReturnRefundLineItems(array $returnRefundLineItems): static
    {
        $this->returnRefundLineItems = $returnRefundLineItems;

        return $this;
    }

    /**
     * The shipping amount from the associated order to include in the refund.
     */
    public function setRefundShipping(ShopifyRefundShippingInputInputObject $shopifyRefundShippingInputInputObject): static
    {
        $this->refundShipping = $shopifyRefundShippingInputInputObject;

        return $this;
    }

    /**
     * The duties from to associated order to include in the refund.
     */
    public function setRefundDuties(array $refundDuties): static
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }
}
