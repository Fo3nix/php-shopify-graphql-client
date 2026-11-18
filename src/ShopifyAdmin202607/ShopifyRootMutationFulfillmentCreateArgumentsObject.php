<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["fulfillment"];

    protected $fulfillment;
    protected $message;

    /**
     * The input fields used to create a fulfillment from fulfillment orders.
     */
    public function setFulfillment(ShopifyFulfillmentInputInputObject $shopifyFulfillmentInputInputObject): static
    {
        $this->fulfillment = $shopifyFulfillmentInputInputObject;

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
