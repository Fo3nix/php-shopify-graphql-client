<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a local pickup setting associated with a location.
 */
class ShopifyDeliveryLocationLocalPickupEnableInputInputObject extends InputObject
{
    const REQUIRED = ["locationId", "pickupTime"];

    protected $locationId;
    protected $pickupTime;
    protected $instructions;

    /**
     * The ID of the location associated with the location setting.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The time of the local pickup.
     */
    public function setPickupTime($shopifyDeliveryLocalPickupTime): static
    {
        $this->pickupTime = new RawObject($shopifyDeliveryLocalPickupTime);

        return $this;
    }

    /**
     * The instructions for the local pickup.
     */
    public function setInstructions($instructions): static
    {
        $this->instructions = $instructions;

        return $this;
    }
}
