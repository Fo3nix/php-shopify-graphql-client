<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootOrderByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ShopifyOrderIdentifierInputInputObject $shopifyOrderIdentifierInputInputObject)
    {
        $this->identifier = $shopifyOrderIdentifierInputInputObject;

        return $this;
    }
}
