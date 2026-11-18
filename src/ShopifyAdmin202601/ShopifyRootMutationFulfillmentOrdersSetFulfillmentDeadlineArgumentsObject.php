<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrdersSetFulfillmentDeadlineArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fulfillmentOrderIds", "fulfillmentDeadline"];

    protected $fulfillmentOrderIds;
    protected $fulfillmentDeadline;

    /**
     * The IDs of the fulfillment orders for which the deadline is being set.
     */
    public function setFulfillmentOrderIds(array $fulfillmentOrderIds): static
    {
        $this->fulfillmentOrderIds = $fulfillmentOrderIds;

        return $this;
    }

    /**
     * The new fulfillment deadline of the fulfillment orders.
     */
    public function setFulfillmentDeadline($fulfillmentDeadline): static
    {
        $this->fulfillmentDeadline = $fulfillmentDeadline;

        return $this;
    }
}
