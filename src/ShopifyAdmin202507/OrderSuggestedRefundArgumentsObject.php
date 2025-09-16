<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class OrderSuggestedRefundArgumentsObject extends ArgumentsObject
{
    protected $shippingAmount;
    protected $refundShipping;
    protected $refundLineItems;
    protected $refundDuties;
    protected $suggestFullRefund;
    protected $refundMethodAllocation;

    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    public function setRefundShipping($refundShipping)
    {
        $this->refundShipping = $refundShipping;

        return $this;
    }

    public function setRefundLineItems(array $refundLineItems)
    {
        $this->refundLineItems = $refundLineItems;

        return $this;
    }

    public function setRefundDuties(array $refundDuties)
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }

    public function setSuggestFullRefund($suggestFullRefund)
    {
        $this->suggestFullRefund = $suggestFullRefund;

        return $this;
    }

    public function setRefundMethodAllocation($refundMethodAllocation)
    {
        $this->refundMethodAllocation = new RawObject($refundMethodAllocation);

        return $this;
    }
}
