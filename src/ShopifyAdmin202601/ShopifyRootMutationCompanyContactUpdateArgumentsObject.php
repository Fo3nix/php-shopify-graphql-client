<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyContactId", "input"];

    protected $companyContactId;
    protected $input;

    /**
     * The ID of the company contact to be updated.
     */
    public function setCompanyContactId($companyContactId): static
    {
        $this->companyContactId = $companyContactId;

        return $this;
    }

    /**
     * The fields to use to update the company contact.
     */
    public function setInput(ShopifyCompanyContactInputInputObject $shopifyCompanyContactInputInputObject): static
    {
        $this->input = $shopifyCompanyContactInputInputObject;

        return $this;
    }
}
