<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderRescheduleArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "fulfillAt"];

    protected $id;
    protected $fulfillAt;

    /**
     * The ID of the fulfillment order to reschedule.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A future date and time when the fulfillment order will be marked as ready for fulfillment.
     */
    public function setFulfillAt($fulfillAt): static
    {
        $this->fulfillAt = $fulfillAt;

        return $this;
    }
}
