<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerPaymentMethodPaypalBillingAgreementUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "billingAddress"];

    protected $id;
    protected $billingAddress;

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
}
