<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootOrderByIdentifierArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["identifier"];

    protected $identifier;

    /**
     * The identifier of the order.
     */
    public function setIdentifier(ShopifyOrderIdentifierInputInputObject $shopifyOrderIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyOrderIdentifierInputInputObject;

        return $this;
    }
}
