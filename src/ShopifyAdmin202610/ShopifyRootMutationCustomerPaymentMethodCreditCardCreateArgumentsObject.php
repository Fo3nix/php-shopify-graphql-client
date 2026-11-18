<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodCreditCardCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "billingAddress", "sessionId"];

    protected $customerId;
    protected $billingAddress;
    protected $sessionId;

    /**
     * The ID of the customer.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

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
     * The Cardserver session ID. Obtained by storing card data with Shopify's Cardsink. Exchanging raw card data for a session ID must be done in a PCI complaint environment.
     */
    public function setSessionId($sessionId): static
    {
        $this->sessionId = $sessionId;

        return $this;
    }
}
