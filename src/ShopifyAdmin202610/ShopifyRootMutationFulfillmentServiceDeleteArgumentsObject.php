<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationFulfillmentServiceDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $destinationLocationId;
    protected $inventoryAction;

    /**
     * The ID of the fulfillment service to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of an active merchant managed location where inventory and commitments will be relocated
     * after the fulfillment service is deleted.
     *
     * Inventory will only be transferred if the
     * [`TRANSFER`](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentServiceDeleteInventoryAction#value-transfer)
     * inventory action has been chosen.
     */
    public function setDestinationLocationId($destinationLocationId): static
    {
        $this->destinationLocationId = $destinationLocationId;

        return $this;
    }

    /**
     * The action to take with the location after the fulfillment service is deleted.
     */
    public function setInventoryAction($shopifyFulfillmentServiceDeleteInventoryAction): static
    {
        $this->inventoryAction = new RawObject($shopifyFulfillmentServiceDeleteInventoryAction);

        return $this;
    }
}
