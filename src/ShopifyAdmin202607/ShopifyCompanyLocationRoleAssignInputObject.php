<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the role and contact to assign on a location.
 */
class ShopifyCompanyLocationRoleAssignInputObject extends InputObject
{
    const REQUIRED = ["companyContactRoleId", "companyContactId"];

    protected $companyContactRoleId;
    protected $companyContactId;

    /**
     * The role ID.
     */
    public function setCompanyContactRoleId($companyContactRoleId): static
    {
        $this->companyContactRoleId = $companyContactRoleId;

        return $this;
    }

    /**
     * The company contact ID..
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }
}
