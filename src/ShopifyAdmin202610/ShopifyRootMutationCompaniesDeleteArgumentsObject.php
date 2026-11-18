<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompaniesDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyIds"];

    protected $companyIds;

    /**
     * A list of IDs of companies to delete.
     */
    public function setCompanyIds(array $companyIds): static
    {
        $this->companyIds = $companyIds;

        return $this;
    }
}
