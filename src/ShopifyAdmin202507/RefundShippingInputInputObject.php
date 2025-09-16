<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class RefundShippingInputInputObject extends InputObject
{
    protected $shippingRefundAmount;
    protected $fullRefund;

    public function setShippingRefundAmount(MoneyInputInputObject $moneyInputInputObject)
    {
        $this->shippingRefundAmount = $moneyInputInputObject;

        return $this;
    }

    public function setFullRefund($fullRefund)
    {
        $this->fullRefund = $fullRefund;

        return $this;
    }
}
