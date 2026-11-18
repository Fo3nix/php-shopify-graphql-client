<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentEventCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fulfillmentEvent"];

    protected $fulfillmentEvent;

    /**
     * The input fields used to create a fulfillment event for a fulfillment.
     */
    public function setFulfillmentEvent(ShopifyFulfillmentEventInputInputObject $shopifyFulfillmentEventInputInputObject): static
    {
        $this->fulfillmentEvent = $shopifyFulfillmentEventInputInputObject;

        return $this;
    }
}
