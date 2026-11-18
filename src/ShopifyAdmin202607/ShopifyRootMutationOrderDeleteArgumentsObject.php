<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["orderId"];

    protected $orderId;

    /**
     * The ID of the order to be deleted.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }
}
