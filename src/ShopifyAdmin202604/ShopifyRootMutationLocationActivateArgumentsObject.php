<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationLocationActivateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId"];

    protected $locationId;

    /**
     * The ID of a location to activate.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }
}
