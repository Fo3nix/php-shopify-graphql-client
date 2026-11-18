<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a customer payment method used during a contract calculation.
 */
class ShopifySubscriptionContractCalculationCustomerPaymentMethodInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the customer payment method.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
