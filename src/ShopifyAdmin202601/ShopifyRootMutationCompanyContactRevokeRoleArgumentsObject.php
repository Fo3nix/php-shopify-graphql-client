<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactRevokeRoleArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactId", "companyContactRoleAssignmentId"];

    protected $companyContactId;
    protected $companyContactRoleAssignmentId;

    /**
     * The ID of the contact to revoke a role from.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }

    /**
     * The ID of the role assignment to revoke from a contact.
     */
    public function setCompanyContactRoleAssignmentId($companyContactRoleAssignmentId): static
    {
        $this->companyContactRoleAssignmentId = $companyContactRoleAssignmentId;

        return $this;
    }
}
