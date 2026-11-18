<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodRevokeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerPaymentMethodId"];

    protected $customerPaymentMethodId;

    /**
     * The ID of the customer payment method to be revoked.
     */
    public function setCustomerPaymentMethodId($customerPaymentMethodId): static
    {
        $this->customerPaymentMethodId = $customerPaymentMethodId;

        return $this;
    }
}
