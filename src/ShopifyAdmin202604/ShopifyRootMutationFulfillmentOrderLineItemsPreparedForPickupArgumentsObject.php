<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderLineItemsPreparedForPickupArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input for marking fulfillment order line items as ready for pickup.
     */
    public function setInput(ShopifyFulfillmentOrderLineItemsPreparedForPickupInputInputObject $shopifyFulfillmentOrderLineItemsPreparedForPickupInputInputObject): static
    {
        $this->input = $shopifyFulfillmentOrderLineItemsPreparedForPickupInputInputObject;

        return $this;
    }
}
