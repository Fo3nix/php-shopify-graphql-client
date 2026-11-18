<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootOrderPaymentStatusArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["paymentReferenceId", "orderId"];

    protected $paymentReferenceId;
    protected $orderId;

    /**
     * Unique identifier returned by orderCreatePayment.
     */
    public function setPaymentReferenceId($paymentReferenceId): static
    {
        $this->paymentReferenceId = $paymentReferenceId;

        return $this;
    }

    /**
     * ID of the order for which the payment was initiated.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }
}
