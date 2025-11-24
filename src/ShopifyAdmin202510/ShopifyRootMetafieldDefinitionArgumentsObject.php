<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMetafieldDefinitionArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(ShopifyMetafieldDefinitionIdentifierInputInputObject $shopifyMetafieldDefinitionIdentifierInputInputObject)
    {
        $this->identifier = $shopifyMetafieldDefinitionIdentifierInputInputObject;

        return $this;
    }
}
