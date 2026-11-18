<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a purchasing company, which is a combination of company, company contact, and company location.
 */
class ShopifyPurchasingCompanyInputInputObject extends InputObject
{
    const REQUIRED = ["companyId", "companyContactId", "companyLocationId"];

    protected $companyId;
    protected $companyContactId;
    protected $companyLocationId;

    /**
     * ID of the company.
     */
    public function setCompanyId($companyId): static
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * ID of the company contact.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }

    /**
     * ID of the company location.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }
}
