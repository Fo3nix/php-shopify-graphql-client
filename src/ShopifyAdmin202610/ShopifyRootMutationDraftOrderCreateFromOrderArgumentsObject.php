<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDraftOrderCreateFromOrderArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["orderId"];

    protected $orderId;

    /**
     * Specifies the order's id that we create the draft order from.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }
}
