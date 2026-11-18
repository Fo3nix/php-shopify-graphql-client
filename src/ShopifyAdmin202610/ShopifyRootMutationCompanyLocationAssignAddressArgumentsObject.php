<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationCompanyLocationAssignAddressArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId", "address", "addressTypes"];

    protected $locationId;
    protected $address;
    protected $addressTypes;

    /**
     * The ID of the company location to update addresses on.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The input fields to use to update the address.
     */
    public function setAddress(ShopifyCompanyAddressInputInputObject $shopifyCompanyAddressInputInputObject): static
    {
        $this->address = $shopifyCompanyAddressInputInputObject;

        return $this;
    }

    /**
     * The list of address types on the location to update.
     */
    public function setAddressTypes(array $addressTypes): static
    {
        $this->addressTypes = array_map(function ($value) {
            return new RawObject($value);
        }, $addressTypes);

        return $this;
    }
}
