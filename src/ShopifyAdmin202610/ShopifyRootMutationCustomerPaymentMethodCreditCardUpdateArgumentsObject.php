<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodCreditCardUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "billingAddress", "sessionId"];

    protected $id;
    protected $billingAddress;
    protected $sessionId;

    /**
     * The ID of the customer payment method.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The billing address.
     */
    public function setBillingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->billingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * The Cardserver session ID.
     */
    public function setSessionId($sessionId): static
    {
        $this->sessionId = $sessionId;

        return $this;
    }
}
