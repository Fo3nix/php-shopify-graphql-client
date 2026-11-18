<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderCustomerRemoveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["orderId"];

    protected $orderId;

    /**
     * The ID of the order having its customer removed.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }
}
