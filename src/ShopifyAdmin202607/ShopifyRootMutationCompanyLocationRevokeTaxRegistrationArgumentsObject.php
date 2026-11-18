<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationRevokeTaxRegistrationArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId"];

    protected $companyLocationId;

    /**
     * The location whose tax registration is being revoked.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }
}
