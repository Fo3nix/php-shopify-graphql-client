<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationCompanyLocationAssignTaxExemptionsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId", "taxExemptions"];

    protected $companyLocationId;
    protected $taxExemptions;

    /**
     * The location to which the tax exemptions will be assigned.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The tax exemptions that are being assigned to the location.
     */
    public function setTaxExemptions(array $taxExemptions): static
    {
        $this->taxExemptions = array_map(function ($value) {
            return new RawObject($value);
        }, $taxExemptions);

        return $this;
    }
}
