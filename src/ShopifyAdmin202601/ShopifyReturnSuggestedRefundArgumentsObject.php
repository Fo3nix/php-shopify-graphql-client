<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyReturnSuggestedRefundArgumentsObject extends ArgumentsObject
{
    protected $returnRefundLineItems;
    protected $refundShipping;
    protected $refundDuties;

    public function setReturnRefundLineItems(array $returnRefundLineItems)
    {
        $this->returnRefundLineItems = $returnRefundLineItems;

        return $this;
    }

    public function setRefundShipping(ShopifyRefundShippingInputInputObject $shopifyRefundShippingInputInputObject)
    {
        $this->refundShipping = $shopifyRefundShippingInputInputObject;

        return $this;
    }

    public function setRefundDuties(array $refundDuties)
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }
}
