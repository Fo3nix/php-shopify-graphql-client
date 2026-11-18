<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyAddressDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["addressId"];

    protected $addressId;

    /**
     * The ID of the address to delete.
     */
    public function setAddressId($addressId): static
    {
        $this->addressId = $addressId;

        return $this;
    }
}
