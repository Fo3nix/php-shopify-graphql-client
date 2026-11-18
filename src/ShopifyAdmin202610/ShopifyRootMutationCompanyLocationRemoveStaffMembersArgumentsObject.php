<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationRemoveStaffMembersArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationStaffMemberAssignmentIds"];

    protected $companyLocationStaffMemberAssignmentIds;

    /**
     * The list of IDs of the company location staff member assignment to delete.
     */
    public function setCompanyLocationStaffMemberAssignmentIds(array $companyLocationStaffMemberAssignmentIds): static
    {
        $this->companyLocationStaffMemberAssignmentIds = $companyLocationStaffMemberAssignmentIds;

        return $this;
    }
}
