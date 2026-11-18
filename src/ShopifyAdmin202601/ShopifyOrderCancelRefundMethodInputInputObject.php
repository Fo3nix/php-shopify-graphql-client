<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to specify the refund method for an order cancellation.
 */
class ShopifyOrderCancelRefundMethodInputInputObject extends InputObject
{
    protected $originalPaymentMethodsRefund;
    protected $storeCreditRefund;

    /**
     * Whether to refund to the original payment method.
     */
    public function setOriginalPaymentMethodsRefund($originalPaymentMethodsRefund): static
    {
        $this->originalPaymentMethodsRefund = $originalPaymentMethodsRefund;

        return $this;
    }

    /**
     * Whether to refund to store credit.
     */
    public function setStoreCreditRefund(ShopifyOrderCancelStoreCreditRefundInputInputObject $shopifyOrderCancelStoreCreditRefundInputInputObject): static
    {
        $this->storeCreditRefund = $shopifyOrderCancelStoreCreditRefundInputInputObject;

        return $this;
    }
}
