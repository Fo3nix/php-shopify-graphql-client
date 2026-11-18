<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactAssignRolesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactId", "rolesToAssign"];

    protected $companyContactId;
    protected $rolesToAssign;

    /**
     * The contact whose roles are being assigned.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }

    /**
     * The new roles to assign.
     */
    public function setRolesToAssign(array $rolesToAssign): static
    {
        $this->rolesToAssign = $rolesToAssign;

        return $this;
    }
}
