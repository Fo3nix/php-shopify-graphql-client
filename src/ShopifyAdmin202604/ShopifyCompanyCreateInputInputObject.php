<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields and values for creating a company and its associated resources.
 */
class ShopifyCompanyCreateInputInputObject extends InputObject
{
    const REQUIRED = ["company"];

    protected $company;
    protected $companyContact;
    protected $companyLocation;

    /**
     * The attributes for the company.
     */
    public function setCompany(ShopifyCompanyInputInputObject $shopifyCompanyInputInputObject): static
    {
        $this->company = $shopifyCompanyInputInputObject;

        return $this;
    }

    /**
     * The attributes for the company contact.
     */
    public function setCompanyContact(ShopifyCompanyContactInputInputObject $shopifyCompanyContactInputInputObject): static
    {
        $this->companyContact = $shopifyCompanyContactInputInputObject;

        return $this;
    }

    /**
     * The attributes for the company location.
     */
    public function setCompanyLocation(ShopifyCompanyLocationInputInputObject $shopifyCompanyLocationInputInputObject): static
    {
        $this->companyLocation = $shopifyCompanyLocationInputInputObject;

        return $this;
    }
}
