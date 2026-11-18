<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to specify whether the inventory item should be activated or not at the specified location.
 */
class ShopifyInventoryBulkToggleActivationInputInputObject extends InputObject
{
    const REQUIRED = ["locationId", "activate"];

    protected $locationId;
    protected $activate;

    /**
     * The ID of the location to modify the inventory item's stocked status.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Whether the inventory item can be stocked at the specified location. To deactivate, set the value to false which removes an inventory item's quantities from that location, and turns off inventory at that location.
     */
    public function setActivate($activate): static
    {
        $this->activate = $activate;

        return $this;
    }
}
