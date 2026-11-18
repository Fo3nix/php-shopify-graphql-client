<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a remote stripe payment method.
 */
class ShopifyRemoteStripePaymentMethodInputInputObject extends InputObject
{
    const REQUIRED = ["customerId"];

    protected $customerId;
    protected $paymentMethodId;

    /**
     * The customer_id value from the Stripe API.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The payment_method_id value from the Stripe API. Starting on 2025,
     * payment_method_id will become mandatory for all API versions.
     */
    public function setPaymentMethodId($paymentMethodId): static
    {
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }
}
