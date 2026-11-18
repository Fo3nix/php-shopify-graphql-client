<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationCreateTaxRegistrationArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId", "taxId"];

    protected $locationId;
    protected $taxId;

    /**
     * The ID of the company location that the tax registration gets assigned to.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The unique tax id for the tax registration.
     */
    public function setTaxId($taxId): static
    {
        $this->taxId = $taxId;

        return $this;
    }
}
