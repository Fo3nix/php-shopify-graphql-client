<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderMoveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "newLocationId"];

    protected $id;
    protected $newLocationId;
    protected $fulfillmentOrderLineItems;

    /**
     * The ID of the fulfillment order to be moved.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the location where the fulfillment order will be moved.
     */
    public function setNewLocationId($newLocationId): static
    {
        $this->newLocationId = $newLocationId;

        return $this;
    }

    /**
     * The fulfillment order line items to be moved.
     * If left blank, all unfulfilled line items belonging to the fulfillment order are moved.
     */
    public function setFulfillmentOrderLineItems(array $fulfillmentOrderLineItems): static
    {
        $this->fulfillmentOrderLineItems = $fulfillmentOrderLineItems;

        return $this;
    }
}
