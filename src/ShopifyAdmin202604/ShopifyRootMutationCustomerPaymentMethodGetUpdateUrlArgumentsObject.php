<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodGetUpdateUrlArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerPaymentMethodId"];

    protected $customerPaymentMethodId;

    /**
     * The payment method to be updated.
     */
    public function setCustomerPaymentMethodId($customerPaymentMethodId): static
    {
        $this->customerPaymentMethodId = $customerPaymentMethodId;

        return $this;
    }
}
