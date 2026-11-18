<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationReturnApproveRequestArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields to approve a return.
     */
    public function setInput(ShopifyReturnApproveRequestInputInputObject $shopifyReturnApproveRequestInputInputObject): static
    {
        $this->input = $shopifyReturnApproveRequestInputInputObject;

        return $this;
    }
}
