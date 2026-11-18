<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationsDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationIds"];

    protected $companyLocationIds;

    /**
     * A list of IDs of company locations to delete.
     */
    public function setCompanyLocationIds(array $companyLocationIds): static
    {
        $this->companyLocationIds = $companyLocationIds;

        return $this;
    }
}
