<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerAddressUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId", "addressId", "address"];

    protected $customerId;
    protected $addressId;
    protected $address;
    protected $setAsDefault;

    /**
     * The ID of the customer whose address is being updated.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * The ID of the address to update.
     */
    public function setAddressId($addressId): static
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Specifies the fields to use when updating the address.
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
