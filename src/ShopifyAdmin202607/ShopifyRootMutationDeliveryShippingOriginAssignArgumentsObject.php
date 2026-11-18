<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryShippingOriginAssignArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId"];

    protected $locationId;

    /**
     * The ID of the location to assign as the shipping origin.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }
}
