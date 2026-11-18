<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyRevokeMainContactArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyId"];

    protected $companyId;

    /**
     * The ID of the company to revoke the main contact from.
     */
    public function setCompanyId($companyId): static
    {
        $this->companyId = $companyId;

        return $this;
    }
}
