<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodSendUpdateEmailArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerPaymentMethodId"];

    protected $customerPaymentMethodId;
    protected $email;

    /**
     * The payment method to be updated.
     */
    public function setCustomerPaymentMethodId($customerPaymentMethodId): static
    {
        $this->customerPaymentMethodId = $customerPaymentMethodId;

        return $this;
    }

    /**
     * Specifies the payment method update email fields. Only the 'from' and 'bcc' fields are accepted for input.
     */
    public function setEmail(ShopifyEmailInputInputObject $shopifyEmailInputInputObject): static
    {
        $this->email = $shopifyEmailInputInputObject;

        return $this;
    }
}
