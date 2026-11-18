<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyId", "input"];

    protected $companyId;
    protected $input;

    /**
     * The ID of the company to be updated.
     */
    public function setCompanyId($companyId): static
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * The input fields to update the company.
     */
    public function setInput(ShopifyCompanyInputInputObject $shopifyCompanyInputInputObject): static
    {
        $this->input = $shopifyCompanyInputInputObject;

        return $this;
    }
}
