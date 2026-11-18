<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a delivery zone associated to a location group and profile.
 */
class ShopifyDeliveryLocationGroupZoneInputInputObject extends InputObject
{
    protected $id;
    protected $name;
    protected $countries;
    protected $methodDefinitionsToCreate;
    protected $methodDefinitionsToUpdate;

    /**
     * A globally-unique ID of the zone.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the zone.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * A list of countries to associate with the zone.
     */
    public function setCountries(array $countries): static
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * A list of method definitions to create.
     */
    public function setMethodDefinitionsToCreate(array $methodDefinitionsToCreate): static
    {
        $this->methodDefinitionsToCreate = $methodDefinitionsToCreate;

        return $this;
    }

    /**
     * A list of method definitions to update.
     */
    public function setMethodDefinitionsToUpdate(array $methodDefinitionsToUpdate): static
    {
        $this->methodDefinitionsToUpdate = $methodDefinitionsToUpdate;

        return $this;
    }
}
