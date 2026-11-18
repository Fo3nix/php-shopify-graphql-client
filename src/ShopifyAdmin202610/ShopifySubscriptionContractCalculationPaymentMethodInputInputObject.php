<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the payment method used during a contract calculation.
 * This is a oneOf input: one, and only one, field can be provided.
 *
 * Provide `customerPaymentMethod` to set a vaulted customer payment method.
 * Provide `none` to explicitly set no payment method.
 */
class ShopifySubscriptionContractCalculationPaymentMethodInputInputObject extends InputObject
{
    protected $customerPaymentMethod;
    protected $none;

    /**
     * A vaulted customer payment method.
     */
    public function setCustomerPaymentMethod(ShopifySubscriptionContractCalculationCustomerPaymentMethodInputInputObject $shopifySubscriptionContractCalculationCustomerPaymentMethodInputInputObject): static
    {
        $this->customerPaymentMethod = $shopifySubscriptionContractCalculationCustomerPaymentMethodInputInputObject;

        return $this;
    }

    /**
     * Explicitly set no payment method. Must be `true`.
     */
    public function setNone($none): static
    {
        $this->none = $none;

        return $this;
    }
}
