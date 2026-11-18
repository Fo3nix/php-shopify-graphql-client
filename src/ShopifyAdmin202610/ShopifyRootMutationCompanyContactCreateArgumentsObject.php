<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyContactCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyId", "input"];

    protected $companyId;
    protected $input;

    /**
     * The ID of the company that the company contact belongs to.
     */
    public function setCompanyId($companyId): static
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * The fields to use to create the company contact.
     */
    public function setInput(ShopifyCompanyContactInputInputObject $shopifyCompanyContactInputInputObject): static
    {
        $this->input = $shopifyCompanyContactInputInputObject;

        return $this;
    }
}
