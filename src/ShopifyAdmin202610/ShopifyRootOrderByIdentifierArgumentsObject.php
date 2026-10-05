<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

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
