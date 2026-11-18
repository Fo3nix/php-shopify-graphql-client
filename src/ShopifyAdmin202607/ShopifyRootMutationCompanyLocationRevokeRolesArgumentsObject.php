<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationRevokeRolesArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId", "rolesToRevoke"];

    protected $companyLocationId;
    protected $rolesToRevoke;

    /**
     * The location whose roles are being revoked.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The current roles to revoke.
     */
    public function setRolesToRevoke(array $rolesToRevoke): static
    {
        $this->rolesToRevoke = $rolesToRevoke;

        return $this;
    }
}
