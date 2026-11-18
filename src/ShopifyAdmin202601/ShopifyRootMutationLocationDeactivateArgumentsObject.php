<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationLocationDeactivateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId"];

    protected $locationId;
    protected $destinationLocationId;

    /**
     * The ID of a location to deactivate.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * The ID of a destination location to which inventory, pending orders and moving transfers will be moved from the location to deactivate.
     */
    public function setDestinationLocationId($destinationLocationId): static
    {
        $this->destinationLocationId = $destinationLocationId;

        return $this;
    }
}
