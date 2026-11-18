<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactsDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactIds"];

    protected $companyContactIds;

    /**
     * The list of IDs of the company contacts to delete.
     */
    public function setCompanyContactIds(array $companyContactIds): static
    {
        $this->companyContactIds = $companyContactIds;

        return $this;
    }
}
