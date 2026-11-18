<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyLocationCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["companyId", "input"];

    protected $companyId;
    protected $input;

    /**
     * The ID of the company that the company location belongs to.
     */
    public function setCompanyId($companyId): static
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * The fields to use to create the company location.
     */
    public function setInput(ShopifyCompanyLocationInputInputObject $shopifyCompanyLocationInputInputObject): static
    {
        $this->input = $shopifyCompanyLocationInputInputObject;

        return $this;
    }
}
