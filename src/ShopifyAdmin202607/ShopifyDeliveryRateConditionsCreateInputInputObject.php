<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for conditions that limit a rate group to specific collections or origin locations.
 */
class ShopifyDeliveryRateConditionsCreateInputInputObject extends InputObject
{
    protected $collectionsToAdd;
    protected $originLocationsToAdd;

    /**
     * Collection IDs to add. The rate group applies only to products in these collections.
     */
    public function setCollectionsToAdd(array $collectionsToAdd): static
    {
        $this->collectionsToAdd = $collectionsToAdd;

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
}
