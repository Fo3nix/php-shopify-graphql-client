<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactRemoveFromCompanyArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactId"];

    protected $companyContactId;

    /**
     * The ID of the company contact to remove from the Company.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }
}
