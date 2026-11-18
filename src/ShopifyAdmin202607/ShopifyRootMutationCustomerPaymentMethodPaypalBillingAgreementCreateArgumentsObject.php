<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodPaypalBillingAgreementCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "billingAgreementId"];

    protected $customerId;
    protected $billingAddress;
    protected $billingAgreementId;
    protected $inactive;

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
     * The billing agreement ID from PayPal that starts with 'B-' (for example, `B-1234XXXXX`).
     */
    public function setBillingAgreementId($billingAgreementId): static
    {
        $this->billingAgreementId = $billingAgreementId;

        return $this;
    }

    /**
     * Whether the PayPal billing agreement is inactive.
     */
    public function setInactive($inactive): static
    {
        $this->inactive = $inactive;

        return $this;
    }
}
