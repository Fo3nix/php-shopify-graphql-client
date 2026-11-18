<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * Specifies the customer to delete.
     */
    public function setInput(ShopifyCustomerDeleteInputInputObject $shopifyCustomerDeleteInputInputObject): static
    {
        $this->input = $shopifyCustomerDeleteInputInputObject;

        return $this;
    }
}
