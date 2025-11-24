<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\InputObject;

class ShopifyRefundShippingInputInputObject extends InputObject
{
    protected $shippingRefundAmount;
    protected $fullRefund;

    public function setShippingRefundAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject)
    {
        $this->shippingRefundAmount = $shopifyMoneyInputInputObject;

        return $this;
    }

    public function setFullRefund($fullRefund)
    {
        $this->fullRefund = $fullRefund;

        return $this;
    }
}
