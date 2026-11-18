<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactRevokeRolesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactId"];

    protected $companyContactId;
    protected $roleAssignmentIds;
    protected $revokeAll;

    /**
     * The contact whose roles are being revoked.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }

    /**
     * The current role assignment IDs to revoke.
     */
    public function setRoleAssignmentIds(array $roleAssignmentIds): static
    {
        $this->roleAssignmentIds = $roleAssignmentIds;

        return $this;
    }

    /**
     * Flag to revoke all roles on the contact.
     */
    public function setRevokeAll($revokeAll): static
    {
        $this->revokeAll = $revokeAll;

        return $this;
    }
}
