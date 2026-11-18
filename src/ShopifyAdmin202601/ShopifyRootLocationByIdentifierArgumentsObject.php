<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootLocationByIdentifierArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["identifier"];

    protected $identifier;

    /**
     * The identifier of the location.
     */
    public function setIdentifier(ShopifyLocationIdentifierInputInputObject $shopifyLocationIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyLocationIdentifierInputInputObject;

        return $this;
    }
}
