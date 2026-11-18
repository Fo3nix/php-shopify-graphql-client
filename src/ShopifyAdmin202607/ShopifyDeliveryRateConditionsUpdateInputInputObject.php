<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for conditions that limit a rate group to specific collections or origin locations.
 */
class ShopifyDeliveryRateConditionsUpdateInputInputObject extends InputObject
{
    protected $collectionsToAdd;
    protected $collectionsToRemove;
    protected $resetToAllProducts;
    protected $originLocationsToAdd;
    protected $originLocationsToRemove;

    /**
     * Collection IDs to add. The rate group applies only to products in these collections.
     */
    public function setCollectionsToAdd(array $collectionsToAdd): static
    {
        $this->collectionsToAdd = $collectionsToAdd;

        return $this;
    }

    /**
     * Collection IDs to remove.
     */
    public function setCollectionsToRemove(array $collectionsToRemove): static
    {
        $this->collectionsToRemove = $collectionsToRemove;

        return $this;
    }

    /**
     * Whether to remove all collection conditions so the rate group applies to all products.
     */
    public function setResetToAllProducts($resetToAllProducts): static
    {
        $this->resetToAllProducts = $resetToAllProducts;

        return $this;
    }

    /**
     * Origin location IDs to add. The rate group applies only to shipments from these locations.
     */
    public function setOriginLocationsToAdd(array $originLocationsToAdd): static
    {
        $this->originLocationsToAdd = $originLocationsToAdd;

        return $this;
    }

    /**
     * Origin location IDs to remove.
     */
    public function setOriginLocationsToRemove(array $originLocationsToRemove): static
    {
        $this->originLocationsToRemove = $originLocationsToRemove;

        return $this;
    }
}
