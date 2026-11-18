<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the role and location to assign to a company contact.
 */
class ShopifyCompanyContactRoleAssignInputObject extends InputObject
{
    const REQUIRED = ["companyContactRoleId", "companyLocationId"];

    protected $companyContactRoleId;
    protected $companyLocationId;

    /**
     * The role ID.
     */
    public function setCompanyContactRoleId($companyContactRoleId): static
    {
        $this->companyContactRoleId = $companyContactRoleId;

        return $this;
    }

    /**
     * The location.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }
}
