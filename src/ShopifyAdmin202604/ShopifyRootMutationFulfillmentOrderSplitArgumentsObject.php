<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderSplitArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fulfillmentOrderSplits"];

    protected $fulfillmentOrderSplits;

    /**
     * The fulfillment orders, line items and quantities to be split into new fulfillment orders.
     */
    public function setFulfillmentOrderSplits(array $fulfillmentOrderSplits): static
    {
        $this->fulfillmentOrderSplits = $fulfillmentOrderSplits;

        return $this;
    }
}
