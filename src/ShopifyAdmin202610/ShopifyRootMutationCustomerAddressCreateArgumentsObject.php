<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerAddressCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "address"];

    protected $customerId;
    protected $address;
    protected $setAsDefault;

    /**
     * The ID of the customer.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Specifies the fields to use when creating the address.
     */
    public function setAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->address = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * Whether to set the address as the customer's default address.
     */
    public function setSetAsDefault($setAsDefault): static
    {
        $this->setAsDefault = $setAsDefault;

        return $this;
    }
}
