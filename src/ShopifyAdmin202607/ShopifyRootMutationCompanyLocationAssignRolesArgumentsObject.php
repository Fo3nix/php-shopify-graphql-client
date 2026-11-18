<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationAssignRolesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId", "rolesToAssign"];

    protected $companyLocationId;
    protected $rolesToAssign;

    /**
     * The location whose roles are being assigned.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The roles to assign.
     */
    public function setRolesToAssign(array $rolesToAssign): static
    {
        $this->rolesToAssign = $rolesToAssign;

        return $this;
    }
}
