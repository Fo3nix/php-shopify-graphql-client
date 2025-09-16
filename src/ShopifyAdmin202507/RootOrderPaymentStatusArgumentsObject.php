<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootOrderPaymentStatusArgumentsObject extends ArgumentsObject
{
    protected $paymentReferenceId;
    protected $orderId;

    public function setPaymentReferenceId($paymentReferenceId)
    {
        $this->paymentReferenceId = $paymentReferenceId;

        return $this;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }
}
