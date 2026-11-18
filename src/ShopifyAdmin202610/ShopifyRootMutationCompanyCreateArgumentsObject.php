<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCompanyCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The fields to use when creating the company.
     */
    public function setInput(ShopifyCompanyCreateInputInputObject $shopifyCompanyCreateInputInputObject): static
    {
        $this->input = $shopifyCompanyCreateInputInputObject;

        return $this;
    }
}
