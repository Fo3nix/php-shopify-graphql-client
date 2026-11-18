<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyAssignMainContactArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyId", "companyContactId"];

    protected $companyId;
    protected $companyContactId;

    /**
     * The ID of the company to assign the main contact to.
     */
    public function setCompanyId($companyId): static
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * The ID of the company contact to be assigned as the main contact.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }
}
