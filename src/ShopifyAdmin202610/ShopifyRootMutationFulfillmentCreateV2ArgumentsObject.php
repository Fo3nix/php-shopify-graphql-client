<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentCreateV2ArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fulfillment"];

    protected $fulfillment;
    protected $message;

    /**
     * The input fields used to create a fulfillment from fulfillment orders.
     */
    public function setFulfillment(ShopifyFulfillmentV2InputInputObject $shopifyFulfillmentV2InputInputObject): static
    {
        $this->fulfillment = $shopifyFulfillmentV2InputInputObject;

        return $this;
    }

    /**
     * An optional message for the fulfillment request.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }
}
