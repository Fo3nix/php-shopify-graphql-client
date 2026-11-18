<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationCompanyLocationRevokeTaxExemptionsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId", "taxExemptions"];

    protected $companyLocationId;
    protected $taxExemptions;

    /**
     * The location from which the tax exemptions will be revoked.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The tax exemptions that are being revoked from the location.
     */
    public function setTaxExemptions(array $taxExemptions): static
    {
        $this->taxExemptions = array_map(function ($value) {
            return new RawObject($value);
        }, $taxExemptions);

        return $this;
    }
}
