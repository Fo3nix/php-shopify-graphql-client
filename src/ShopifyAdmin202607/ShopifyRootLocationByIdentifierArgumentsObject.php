<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootLocationByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ShopifyLocationIdentifierInputInputObject $shopifyLocationIdentifierInputInputObject)
    {
        $this->identifier = $shopifyLocationIdentifierInputInputObject;

        return $this;
    }
}
