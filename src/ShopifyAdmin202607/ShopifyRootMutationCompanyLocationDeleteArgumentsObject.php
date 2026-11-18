<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId"];

    protected $companyLocationId;

    /**
     * The ID of the company location to delete.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }
}
