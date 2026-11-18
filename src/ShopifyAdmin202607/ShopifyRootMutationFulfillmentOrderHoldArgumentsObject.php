<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderHoldArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "fulfillmentHold"];

    protected $id;
    protected $fulfillmentHold;

    /**
     * The ID of the fulfillment order on which a fulfillment hold is applied.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The details of the fulfillment hold applied on the fulfillment order.
     */
    public function setFulfillmentHold(ShopifyFulfillmentOrderHoldInputInputObject $shopifyFulfillmentOrderHoldInputInputObject): static
    {
        $this->fulfillmentHold = $shopifyFulfillmentOrderHoldInputInputObject;

        return $this;
    }
}
