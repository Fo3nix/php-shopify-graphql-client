<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerUpdateDefaultAddressArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "addressId"];

    protected $customerId;
    protected $addressId;

    /**
     * The ID of the customer whose default address is being updated.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The ID of the customer's new default address.
     */
    public function setAddressId($addressId): static
    {
        $this->addressId = $addressId;

        return $this;
    }
}
