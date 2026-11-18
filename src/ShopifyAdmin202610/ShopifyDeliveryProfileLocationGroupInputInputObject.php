<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a location group associated to a delivery profile.
 */
class ShopifyDeliveryProfileLocationGroupInputInputObject extends InputObject
{
    protected $id;
    protected $locations;
    protected $locationsToAdd;
    protected $locationsToRemove;
    protected $zonesToCreate;
    protected $zonesToUpdate;

    /**
     * The globally-unique ID of the delivery profile location group.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The list of location IDs to be moved to this location group.
     */
    public function setLocations(array $locations): static
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * The list of location IDs to be added to this location group.
     *
     * **Note:** due to API input array limits, a maximum of 250 items can be sent per each request.
     */
    public function setLocationsToAdd(array $locationsToAdd): static
    {
        $this->locationsToAdd = $locationsToAdd;

        return $this;
    }

    /**
     * The list of location IDs to be removed from this location group.
     *
     * **Note:** due to API input array limits, a maximum of 250 items can be sent per each request.
     */
    public function setLocationsToRemove(array $locationsToRemove): static
    {
        $this->locationsToRemove = $locationsToRemove;

        return $this;
    }

    /**
     * The list of location group zones to create.
     *
     * **Note:** due to the potential complexity of the nested data, it is recommended to send no more than 5 zones per each request.
     */
    public function setZonesToCreate(array $zonesToCreate): static
    {
        $this->zonesToCreate = $zonesToCreate;

        return $this;
    }

    /**
     * The list of location group zones to update.
     *
     * **Note:** due to the potential complexity of the nested data, it is recommended to send no more than 5 zones per each request.
     */
    public function setZonesToUpdate(array $zonesToUpdate): static
    {
        $this->zonesToUpdate = $zonesToUpdate;

        return $this;
    }
}
