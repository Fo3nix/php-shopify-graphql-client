<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationAssignStaffMembersArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId", "staffMemberIds"];

    protected $companyLocationId;
    protected $staffMemberIds;

    /**
     * The ID of the company location to assign the staff member to.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The list of IDs of the staff members to assign.
     */
    public function setStaffMemberIds(array $staffMemberIds): static
    {
        $this->staffMemberIds = $staffMemberIds;

        return $this;
    }
}
