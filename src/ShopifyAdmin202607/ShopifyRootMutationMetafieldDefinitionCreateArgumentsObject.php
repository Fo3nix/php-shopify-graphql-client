<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetafieldDefinitionCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["definition"];

    protected $definition;

    /**
     * Specifies the input fields for a metafield definition.
     */
    public function setDefinition(ShopifyMetafieldDefinitionInputInputObject $shopifyMetafieldDefinitionInputInputObject): static
    {
        $this->definition = $shopifyMetafieldDefinitionInputInputObject;

        return $this;
    }
}
