<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyLocationId", "input"];

    protected $companyLocationId;
    protected $input;

    /**
     * The ID of the company location to update.
     */
    public function setCompanyLocationId($companyLocationId): static
    {
        $this->companyLocationId = $companyLocationId;

        return $this;
    }

    /**
     * The input fields to update in the company location.
     */
    public function setInput(ShopifyCompanyLocationUpdateInputInputObject $shopifyCompanyLocationUpdateInputInputObject): static
    {
        $this->input = $shopifyCompanyLocationUpdateInputInputObject;

        return $this;
    }
}
