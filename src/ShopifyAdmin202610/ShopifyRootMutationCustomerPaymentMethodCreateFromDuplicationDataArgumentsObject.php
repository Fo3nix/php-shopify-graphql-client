<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodCreateFromDuplicationDataArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "billingAddress", "encryptedDuplicationData"];

    protected $customerId;
    protected $billingAddress;
    protected $encryptedDuplicationData;

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
     * The encrypted payment method data.
     */
    public function setEncryptedDuplicationData($encryptedDuplicationData): static
    {
        $this->encryptedDuplicationData = $encryptedDuplicationData;

        return $this;
    }
}
