<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetafieldDefinitionUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["definition"];

    protected $definition;

    /**
     * The input fields for the metafield definition update.
     */
    public function setDefinition(ShopifyMetafieldDefinitionUpdateInputInputObject $shopifyMetafieldDefinitionUpdateInputInputObject): static
    {
        $this->definition = $shopifyMetafieldDefinitionUpdateInputInputObject;

        return $this;
    }
}
