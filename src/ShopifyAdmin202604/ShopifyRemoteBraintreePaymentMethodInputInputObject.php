<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a remote Braintree customer payment profile.
 */
class ShopifyRemoteBraintreePaymentMethodInputInputObject extends InputObject
{
    const REQUIRED = ["customerId"];

    protected $customerId;
    protected $paymentMethodToken;

    /**
     * The `customer_id` value from the Braintree API.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The `payment_method_token` value from the Braintree API. Starting on 2025,
     * payment_method_token will become mandatory for all API versions.
     */
    public function setPaymentMethodToken($paymentMethodToken): static
    {
        $this->paymentMethodToken = $paymentMethodToken;

        return $this;
    }
}
