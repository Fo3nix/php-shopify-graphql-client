<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactId"];

    protected $companyContactId;

    /**
     * The ID of the company contact to delete.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }
}
