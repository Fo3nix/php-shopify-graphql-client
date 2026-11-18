<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCustomerCancelDataErasureArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["customerId"];

    protected $customerId;

    /**
     * The ID of the customer for whom to cancel a pending data erasure.
     */
    public function setCustomerId($customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }
}
