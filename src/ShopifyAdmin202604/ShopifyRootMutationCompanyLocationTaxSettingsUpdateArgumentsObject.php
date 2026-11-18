<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationCompanyLocationTaxSettingsUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId"];

    protected $companyLocationId;
    protected $taxRegistrationId;
    protected $taxExempt;
    protected $exemptionsToAssign;
    protected $exemptionsToRemove;

    /**
     * The ID of the company location that the tax settings get assigned to.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The unique tax registration ID for the company location.
     */
    public function setTaxRegistrationId($taxRegistrationId): static
    {
        $this->taxRegistrationId = $taxRegistrationId;

        return $this;
    }

    /**
     * Whether the location is exempt from taxes.
     */
    public function setTaxExempt($taxExempt): static
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }

    /**
     * The list of tax exemptions to assign to the company location.
     */
    public function setExemptionsToAssign(array $exemptionsToAssign): static
    {
        $this->exemptionsToAssign = array_map(function ($value) {
            return new RawObject($value);
        }, $exemptionsToAssign);

        return $this;
    }

    /**
     * The list of tax exemptions to remove from the company location.
     */
    public function setExemptionsToRemove(array $exemptionsToRemove): static
    {
        $this->exemptionsToRemove = array_map(function ($value) {
            return new RawObject($value);
        }, $exemptionsToRemove);

        return $this;
    }
}
