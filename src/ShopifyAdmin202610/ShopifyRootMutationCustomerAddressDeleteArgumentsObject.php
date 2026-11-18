<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerAddressDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "addressId"];

    protected $customerId;
    protected $addressId;

    /**
     * The ID of the customer whose address is being deleted.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The ID of the address to be deleted from the customer.
     */
    public function setAddressId($addressId): static
    {
        $this->addressId = $addressId;

        return $this;
    }
}
