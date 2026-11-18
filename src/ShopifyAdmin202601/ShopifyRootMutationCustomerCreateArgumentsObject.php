<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields to create a customer.
     */
    public function setInput(ShopifyCustomerInputInputObject $shopifyCustomerInputInputObject): static
    {
        $this->input = $shopifyCustomerInputInputObject;

        return $this;
    }
}
