<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class ReturnSuggestedRefundArgumentsObject extends ArgumentsObject
{
    protected $returnRefundLineItems;
    protected $refundShipping;
    protected $refundDuties;

    public function setReturnRefundLineItems(array $returnRefundLineItems)
    {
        $this->returnRefundLineItems = $returnRefundLineItems;

        return $this;
    }

    public function setRefundShipping(RefundShippingInputInputObject $refundShippingInputInputObject)
    {
        $this->refundShipping = $refundShippingInputInputObject;

        return $this;
    }

    public function setRefundDuties(array $refundDuties)
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }
}
