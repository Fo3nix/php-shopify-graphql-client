<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerGenerateAccountActivationUrlArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId"];

    protected $customerId;

    /**
     * The ID of the customer that the URL is generated for.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }
}
