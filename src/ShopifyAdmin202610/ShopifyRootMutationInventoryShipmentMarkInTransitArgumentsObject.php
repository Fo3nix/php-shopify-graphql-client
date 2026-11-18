<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationInventoryShipmentMarkInTransitArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $dateShipped;

    /**
     * The ID of the inventory shipment to mark in transit.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The date the shipment was shipped.
     */
    public function setDateShipped($dateShipped): static
    {
        $this->dateShipped = $dateShipped;

        return $this;
    }
}
