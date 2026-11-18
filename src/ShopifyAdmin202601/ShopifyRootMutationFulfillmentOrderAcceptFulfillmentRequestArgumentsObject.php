<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderAcceptFulfillmentRequestArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $message;
    protected $estimatedShippedAt;

    /**
     * The ID of the fulfillment order associated with the fulfillment request.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * An optional reason for accepting the fulfillment request.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }

    /**
     * The estimated date and time when the fulfillment order will be shipped.
     */
    public function setEstimatedShippedAt($estimatedShippedAt): static
    {
        $this->estimatedShippedAt = $estimatedShippedAt;

        return $this;
    }
}
