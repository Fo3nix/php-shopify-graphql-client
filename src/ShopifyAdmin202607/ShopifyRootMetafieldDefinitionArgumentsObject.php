<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMetafieldDefinitionArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    /**
     * The identifier of the MetafieldDefinition to return.
     */
    public function setIdentifier(ShopifyMetafieldDefinitionIdentifierInputInputObject $shopifyMetafieldDefinitionIdentifierInputInputObject): static
    {
        $this->identifier = $shopifyMetafieldDefinitionIdentifierInputInputObject;

        return $this;
    }
}
