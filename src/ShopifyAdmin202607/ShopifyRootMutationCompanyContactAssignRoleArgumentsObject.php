<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactAssignRoleArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactId", "companyContactRoleId", "companyLocationId"];

    protected $companyContactId;
    protected $companyContactRoleId;
    protected $companyLocationId;

    /**
     * The ID of the contact to assign a role to.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }

    /**
     * The ID of the role to assign to a contact.
     */
    public function setCompanyContactRoleId($companyContactRoleId): static
    {
        $this->companyContactRoleId = $companyContactRoleId;

        return $this;
    }

    /**
     * The ID of the location to assign a role to a contact.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }
}
