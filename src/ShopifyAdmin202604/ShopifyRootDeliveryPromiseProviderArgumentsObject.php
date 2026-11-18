<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootDeliveryPromiseProviderArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locationId"];

    protected $locationId;

    /**
     * The ID of the location associated with the delivery promise provider.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }
}
