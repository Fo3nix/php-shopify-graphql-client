<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerRequestDataErasureArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId"];

    protected $customerId;

    /**
     * The ID of the customer to erase.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }
}
